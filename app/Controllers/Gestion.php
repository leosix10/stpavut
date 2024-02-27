<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Libraries\GroceryCrud;

class Gestion extends Controller
{

    protected $request;


    protected $helpers = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->mesSessions = \Config\Services::session();
    }

    public function index(){
        $this->mesSessions->admin = 0;
        echo view('Login_view');
    }

    public function AccueilAdmin(){
        if($this->mesSessions->admin == 0) {
            return redirect()->to(base_url().'/Gestion');
        } else {
            echo view('AccueilAdmin_view');
        }
    }

    public function Verification(){
        // ************ secu pour le mode dev!!!
        if(!isset($_POST['username'])||!isset($_POST['pass'])) return;
        // ************
        if ($_POST['username'] == "admin" && $_POST['pass'] == "leosixm3202"){
            $this->mesSessions->admin = 1;
            return redirect()->to(base_url().'/Gestion/AccueilAdmin');
        } else {
            return redirect()->to(base_url().'/Gestion');
        }
    }

    function showImageGamer($value){
        return '<img src="'.base_url().'/assets/photos/gamers/'.$value.'" width=100px>';
    }
    public function JoueursAdmin(){
        if($this->mesSessions->admin == 0) {
            return redirect()->to(base_url().'/Gestion');
        } else {
            $crud = new GroceryCrud();

            $crud->setTheme('datatables');
            $crud->displayAs('gamer_nom', 'Nom du joueur');
            $crud->setTable('gamers');

            $crud->unsetExport();
            $crud->unsetPrint();

            $crud->callbackColumn('gamer_photo', array($this,'showImageGamer'));

            $output = $crud->render();

            echo view('JoueursAdmin_view', (array)$output);

        }

    }

    function showImageEnigme($value){
        return '<img src="'.base_url().'/assets/photos/enigmes/'.$value.'" width=100px>';
    }
    public function EnigmeAdmin(){
        if($this->mesSessions->admin == 0) {
            return redirect()->to(base_url().'/Gestion');
        } else {
            $crud = new GroceryCrud();

            $crud->setTheme('datatables');
            $crud->displayAs('enigme_titre', 'Titre de l\'énigme');
            $crud->setTable('enigmes');

            $crud->unsetExport();
            $crud->unsetPrint();

            $crud->callbackColumn('enigme_photo', array($this,'showImageEnigme'));

            $crud->callbackAddField('enigme_photo', function(){
                return'<input type="hidden" name="enigme_photo" id="enigme_photo"><input type="file" name="file_photo" id="file_photo"><img src="" alt="" id="miniature" height="60px"/>';
            });

            $output = $crud->render();

            echo view('EnigmeAdmin_view', (array)$output);

        }

    }

    public function Telechargement(){
        if($this->mesSessions->admin == 0) return redirect()->to(base_url() .'/Gestion');

            $image = $this->request->getFile('fichierphoto');
            $nomDeLaphoto = date("Ymd-H-i-s").$image->getName();
            if ($image->getMimeType() != "image/jpeg" && $image->getMimeType() != "image/png"){
                echo "Erreur de format";
                return;
            }
            echo $nomDeLaphoto;
            $image->move("./assets/photos/enigmes/", $nomDeLaphoto);

    }


}
