<?php namespace App\Models;

use CodeIgniter\Model;

class GamersModel extends Model {

    protected $table      = 'gamers';
    protected $primaryKey = 'gamer_id';

    public function verif($u, $p){
        $mabase = db_connect();
        $query = $mabase->query('SELECT * FROM gamers WHERE gamer_email=? AND gamer_pass=?', [$u, $p]);
        $resultat = $query->getResultArray();
        return count($resultat);
    }

    public function recupProfil($u){
        $mabase = db_connect();
        $query = $mabase->query('SELECT * FROM gamers 
                                    INNER JOIN etudier ON gamer_id = gamers_gamer_id 
                                    INNER JOIN enigmes ON enigme_id = enigmes_enigme_id
                                    WHERE gamer_email=? AND etat_resolution=0', [$u]);
        return $query->getResultArray();
    }

    public function enigmeResolu($idgamer, $idenigme){
        $mabase = db_connect();
        //mettre à jour la table étudier pour mettre à résolu l'énigme
        $mabase->query('UPDATE etudier SET etat_resolution=1 WHERE gamers_gamer_id=? AND enigmes_enigme_id=?', [$idgamer, $idenigme]);
        $idenigme +=1;
        $mabase->query('UPDATE gamers SET gamer_enigme_en_cours=? WHERE gamer_id=?', [$idenigme, $idgamer]);
        $mabase->query('INSERT INTO etudier(gamers_gamer_id, enigmes_enigme_id, etat_resolution, nb_essais) VALUES(?,?,0,0)', [$idgamer, $idenigme]);
    }

    public function enigmeErronee($idgamer, $idenigme){
        $mabase = db_connect();
        $mabase->query('UPDATE etudier SET nb_essais = nb_essais+1 WHERE gamers_gamer_id=? AND enigmes_enigme_id=?', [$idgamer, $idenigme]);

    }

    public function Enregistrer($email, $nom, $prenom, $pass, $laphoto){
        $mabase = db_connect();
        $mabase->query('INSERT INTO gamers(gamer_etat, gamer_enigme_en_cours, gamer_email, gamer_nom, gamer_prenom, gamer_pass, gamer_photo) 
                            VALUES(1, 1, ?, ?, ?, ?, ?)', [$email, $nom, $prenom, $pass, $laphoto]);
        /*
        $mabase->query('SELECT FROM gamers()');
        $mabase->query('INSERT INTO etudier(etat_resolution, gamers_gamer_id, enigmes_enigme_id, nb_essais)
                            VALUES(0, ?, 1, 0)'[$id_gamer]);
        */
    }

}