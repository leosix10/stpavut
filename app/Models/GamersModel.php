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
                                    INNER JOIN enigmes ON enigme_ordre = gamer_enigme_en_cours
                                    WHERE gamer_email=?', [$u]);
        return $query->getResultArray();
    }

    public function recupProfilSeul($u){
        $mabase = db_connect();
        $query = $mabase->query('SELECT * FROM gamers WHERE gamer_email=?', [$u]);
        return $query->getResultArray();
    }

    public function enigmeResolu($idgamer, $idenigme){
        $mabase = db_connect();
        //mettre à jour la table étudier pour mettre à résolu l'énigme
        $idenigme +=1;
        $mabase->query('UPDATE gamers 
                            SET gamer_enigme_en_cours=?, nb_essais_total = nb_essais_total + nb_essais, nb_essais=0
                            WHERE gamer_id=?', [$idenigme, $idgamer]);
    }

    public function enigmeErronee($idgamer, $idenigme){
        $mabase = db_connect();
        $mabase->query('UPDATE gamers SET nb_essais = nb_essais+1 WHERE gamer_id=?', [$idgamer]);

    }

    public function Enregistrer($email, $nom, $prenom, $pass, $laphoto){
        $mabase = db_connect();
        $mabase->query('INSERT INTO gamers(gamer_etat, nb_essais, gamer_enigme_en_cours, gamer_email, gamer_nom, gamer_prenom, gamer_pass, gamer_photo) 
                            VALUES(1, 0, 1, ?, ?, ?, ?, ?)', [$email, $nom, $prenom, $pass, $laphoto]);

    }

}