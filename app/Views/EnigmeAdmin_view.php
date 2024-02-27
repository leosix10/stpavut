<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>




</head>
<body>
	<div>
		<a href='<?php echo base_url()?>/Gestion/AccueilAdmin'>Retour accueil back-office</a>
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>



    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

<script type="text/javascript">
    $(document).ready(function(){
        //console.log("go!");
        $("#file_photo").change(function(){
            //console.log($("#file_photo").val());
            formdata = new FormData();
            file =$(this).prop('files')[0];
            formdata.append("fichierphoto", file);
            $.ajax( { url: "<?php echo base_url()?>/Gestion/Telechargement", type: "POST", data: formdata, contentType: false, processData: false,  success: function (result) {
                console.log(result);
                $("#miniature").attr("src","<?php echo base_url() ?>/public/assets/photos/enigmes/"+result);
                $("#enigme_photo").val(result);
                console.log("fini");
            } });
        })
    })
</script>
</body>
</html>
