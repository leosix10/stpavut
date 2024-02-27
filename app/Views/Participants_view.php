<h1>Participants</h1>

<div id="afficherJoueurs">
    <?php foreach ($lesjoueurs as $item):?>

        <div id="joueur">
            <img src="<?php echo base_url(); ?>/assets/photos/gamers/<?php echo $item['gamer_photo']; ?>" alt="photo">
            <p><?php echo $item['gamer_prenom']; ?><br>
                <?php echo $item['gamer_nom']; ?></p>
        </div>

    <?php endforeach;?>
</div>
<br>
<div class="info">
    <h4>
        <a href="<?php echo base_url(); ?>/NosGamers">Voir la liste en PDF</a>
    </h4>
</div>

