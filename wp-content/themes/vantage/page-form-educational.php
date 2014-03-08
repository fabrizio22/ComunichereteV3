<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package alexandria
 */
//var $valorePassato = $_GET['gov'];
 
//if($_GET['educational'] === 'educational'){
//    echo ($_GET['educational']);
//}else{
//	echo("che palle ho sbagliato");
//}


get_header(); ?>

    <label class="titoloSezione">Registrati</label><br /><hr/>

<form id="form_organoPolitico" class="form_organoPolitico" name="form_organoPolitico" method="post" action="<?php echo home_url( 'form-educational' ); ?>">

    <?php include('include/educational/form-registrazioneInizialeEdu.php'); ?>
    <?php include('include/educational/form-domandeSicurezzaEdu.php'); ?>
    <?php include('include/educational/form-Privacy-accettazioneEdu.php'); ?>

    <div class="salvaButton" id="salvaButton">
        <input id="salva" type="submit" name="Submit" value="Submit" tabindex="2" />
    </div>
</form>
    </div>


<?php get_footer(); ?>