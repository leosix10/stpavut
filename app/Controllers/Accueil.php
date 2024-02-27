<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


class Accueil extends Controller
{

    protected $request;


    protected $helpers = [];


    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->mesSessions = session();
    }

    public function index() {

        $data['connecte'] = $this->mesSessions->joueur;
        echo view('Entete_view', $data);
        echo view('Accueil_view');
        echo view('Piedpage_view');
    }
}
