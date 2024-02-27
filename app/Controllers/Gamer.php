<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Gamer extends Controller {

    protected $request;
    protected $helpers = [];


    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->mesSessions = \Config\Services::session();
    }

    public function index(){
        $this->mesSessions->joueur = 0;
        echo view('LoginGamer_view');
    }

    public function NewGamer(){
        $this->mesSessions->joueur = 0;
        echo view('NewGamer_view');
    }

    public function Enregistrement(){
        //traitement de l'enregistrement
        $gamersmodel = new \App\Models\GamersModel();

        if($gamersmodel->recupProfil($_POST['email']) != null){
            $data['messageErreur']='Ce compte existe déjà avec cet email.';
            echo view('ErreurUser_view',$data);
            return;
        }

        $image = $this->request->getFile('laphoto');
        $nomDeLaphoto = date("Ymd-H-i-s").$image->getName();
        if ($image->getMimeType() != "image/jpeg" && $image->getMimeType() != "image/png"){
            //echo view('ErreurFormat_view');
            $data['messageErreur']='Mauvais format de fichier, seul .jpg et .png sont autorisés';
            echo view('ErreurUser_view',$data);
            return;
        }

        $image->move("./assets/photos/gamers/", $nomDeLaphoto);

        $reponse = $gamersmodel->Enregistrer($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['pass'], $nomDeLaphoto);
        echo view('NewGamerValide_view');
    }

    public function Verification(){

        $gamersmodel = new \App\Models\GamersModel();
        $reponse = $gamersmodel->verif($_POST['username'], $_POST['pass']);

        if ($reponse == 1){
            $this->mesSessions->joueur = 1;
            $this->mesSessions->username = $_POST['username'];
            return redirect()->to(base_url().'/Gamer/AccueilGamer');
        } else {
            return redirect()->to(base_url().'/Gamer');
        }
    }

    public function AccueilGamer(){
        if($this->mesSessions->joueur == 0) return redirect()->to(base_url() );

        $gamersmodel = new \App\Models\GamersModel();
        $data['profil'] = $gamersmodel->recupProfil($this->mesSessions->username);
        $data['connecte'] = $this->mesSessions->joueur;

        echo view('Entete_view', $data);

        if($data['profil']==null){
            $data['profil'] = $gamersmodel->recupProfilSeul($this->mesSessions->username);
            echo view('GamerProfilWin_view', $data);
        }else{
            echo view('GamerProfil_view', $data);
        }

        if($data['profil'][0]['nb_essais']>3){
            echo view('BloquerGamer_view');
            echo view('Piedpage_view');
            return;
        }
        
        echo view('Piedpage_view');
    }

    public function validReponse(){
        if($this->mesSessions->joueur == 0) return redirect()->to(base_url() );

        $gamersmodel = new \App\Models\GamersModel();
        $data['profil'] = $gamersmodel->recupProfil($this->mesSessions->username);
        $data['connecte'] = $this->mesSessions->joueur;

        $reponse = $_POST['reponse'];
        $labonnereponse = $data['profil'][0]['enigme_mot_magique'];
        $idgamer = $data['profil'][0]['gamer_id'];
        $idenigme = $data['profil'][0]['enigme_ordre'];

        //echo $reponse.' '.$labonnereponse.' '.$idgamer.' '.$idenigme;

        if ($reponse == $labonnereponse){
            $gamersmodel->enigmeResolu($idgamer, $idenigme);
            $data['message']="Bravo, vous avez résolu l'énigme !";
        } else {
            $gamersmodel->enigmeErronee($idgamer, $idenigme);
            $data['message']="Non ! Ce n'est pas la bonne réponse";
        }

        echo view('Entete_view', $data);
        echo view('reponseEnigme_view', $data);
        echo view('Piedpage_view');
    }

}
