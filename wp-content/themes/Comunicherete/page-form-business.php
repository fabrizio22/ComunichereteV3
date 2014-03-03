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
 
/*
if($_GET['business'] == 'business'){
    echo ($_GET['business']);
}else{
	echo("che palle ho sbagliato");
}
*/


get_header(); ?>

	<label class="titoloSezione">Registrati</label><br /><hr/>
	<form id="form_businnes" class="form_businnes" name="form_businnes" method="post" action="<?php echo home_url( 'form_businnes' ); ?>">
			<?php include('include/business/form-registrazioneIniziale_business.php'); ?>
			<?php include('include/business/form-qualificheMansioni.php'); ?>
			<?php include('include/business/form-qualificheTitolareBus.php'); ?>
			<?php include('include/business/form-qualificheAltriBus.php'); ?>
			<?php include('include/business/form-liberoProfessinista.php'); ?>
			<?php include('include/business/form-categoriaMerceologica.php'); ?>
			<?php include('include/business/form-Abbigliamento.php'); ?>
			<?php include('include/business/form-dimAziendaSedeLavorativa.php'); ?>
			<?php include('include/form-domandeSicurezza.php'); ?>
			<?php include('include/form-Privacy-accettazione.php'); ?>
				
				
			<div class="salvaButton" id="salvaButton">
				<input id="salva" type="submit" name="Submit" value="Submit" tabindex="2" />
			</div>
	</form>

<?php get_footer(); ?>