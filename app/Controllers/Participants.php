<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Participants extends Controller
{

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->mesSessions = session();
    }

    public function index(){

        $gamersmodel = new \App\Models\GamersModel();
        $data['lesjoueurs'] = $gamersmodel->findAll();
        $data['connecte'] = $this->mesSessions->joueur;

        echo view('Entete_view', $data);
        echo view('Participants_view',$data);
        echo view('Piedpage_view');
	}

}