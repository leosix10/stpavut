<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use \pdf;
require(APPPATH.'/Libraries/pdf.php');

class NosGamers extends Controller {

    public function index(){

        $gamersmodel = new \App\Models\GamersModel();
        $lesjoueurs = $gamersmodel->findAll();

        $monpdf = new pdf();

        $monpdf->AddPage();
        $monpdf->Image("assets/photos/cover.jpg",10,10,210,297);

        $monpdf->AddPage();
        $monpdf->Cell(0,20,'La liste des joueurs de Saint-Pavut',1,1,'C');

        foreach ($lesjoueurs as $un){
            $y = $monpdf->GetY();
            if($y>250){ $monpdf->AddPage(); $y = $monpdf->GetY(); }
            $monpdf->SetFillColor(210,220,230);
            $monpdf->Cell(0,24,$un['gamer_nom']." ".$un['gamer_prenom'],0,1,'L',true);
            $monpdf->Image("assets/photos/gamers/".$un['gamer_photo'],180,$y,16,20);
            $monpdf->SetFillColor(240,240,240);
            $monpdf->Cell(0,4,' ',0,1,'L',true);

        }

        $this->response->setHeader('Content-Type','application/pdf');
        $monpdf->Output();
    }

}