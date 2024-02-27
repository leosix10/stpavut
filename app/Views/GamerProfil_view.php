
<div id="flex">
    <h1>Bienvenue Mr <?php echo $profil[0]['gamer_prenom'] ?> <?php echo $profil[0]['gamer_nom'] ?></h1>
    <p class="info"><img src="<?php echo base_url(); ?>/assets/photos/gamers/<?php echo $profil[0]['gamer_photo']?>"></p>

    <p class="info">Vous en êtes à l'énigme <?php echo $profil[0]['gamer_enigme_en_cours'] ?>, vous avez en tout fait <?php echo $profil[0]['nb_essais_total'] ?> essais sur l'ensemble des énigmes</p>
    <div class="enigme">
        <p class="info">Voici l'énigme : " <?php echo $profil[0]['enigme_titre'] ?> "</p>
        <p class="info">Vous avez déjà fait <?php echo $profil[0]['nb_essais'] ?> essai(s) sur cette énigme</p>
        <p class="info">Indice : <?php echo $profil[0]['enigme_texte'] ?></p>
        <p class="info"><img src="<?php echo base_url(); ?>/assets/photos/enigmes/<?php echo $profil[0]['enigme_photo'] ?>"></p>
    </div>
    <form method="POST" action="<?php echo base_url(); ?>/Gamer/validReponse">
        <p class="info">Veuillez taper la clé de l'énigme: <input type="text" name="reponse"><input type="submit" name="soumettre"></p>
    </form>
</div>
