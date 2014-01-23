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

/*
	if (isset($_POST['SubComuni'])){
		$comune = $_POST['comune'];
	    echo($comune);
	}



	if (isset($_POST['procedi_registrazione'])){


	    $risultatiQuery = array();
	    $nome = $_POST['nome'];
	    $cognome = $_POST['cognome'];
	 
		if((!empty($nome)) && (!empty($cognome)) && (!empty($mail))){ 		  
			global $wpdb;
			
		    //$risultatiQuery =  registrazioni( $nome );
		    $risultatiQuery = $wpdb->get_row( $wpdb->prepare( "select * from dati_utente_registrazione where nome = %s AND cognome  = %s", $nome, $cognome ) );
		    
		    if ( is_object( $risultatiQuery ) ){
				$nome_valore = $risultatiQuery->nome;
				$cognome_valore = $risultatiQuery->cognome;
				$mail_valore = $risultatiQuery->mail;	
				$titoloAccademico_valore = $risultatiQuery->titolo_accademico;
				
				//echo($nome_valore);
				//echo($cognome_valore);
				//echo($mail_valore);		
		    }else{
			    $errore = 'dati non presenti nel db';
		    }
		}
		else
		{
			$errore = 'inserire i campi del form';
			
		} 
	}

*/
	if (isset($_POST['Submit'])){

		//echo('sono nel salva');


		$cognome_valore = $_POST['cognome'];
		$nome_valore = $_POST['nome'];
		$comune = $_POST['comune'];
		$mail = $_POST['mailIns'];
		$sezAmministrativo = $_POST['sezAmministrativo'];
		$sezSettori = $_POST['sezSettori'];
		$indirizzoMail = $_POST['indirizzoMail'];

		$mailValida =$mail . $indirizzoMail;


		$password = '123456';
		
		$user_data = array(
		'ID' => '',
		'user_pass' => $password,
		'user_login' => $nome_valore
		);

		$new_userid = wp_insert_user( $user_data );
		
		if( isset($new_userid)  ) {

		} else {
			 $errore = 'Error on user creation';
		}
		
		$corpoMail = "e stata eggettuata una registrazione con il seguente nome" .$nome_valore . " e cognome " . $cognome_valore ." i dati di accesso sono :" . $nome_valore . "e pass" . $password;

		mail($mailValida, "invio mail registrazione", $corpoMail, "From: ".$mailValida);
		
		wp_redirect(get_bloginfo('url').'/wp-content/themes/vantage/page-registrazione.php');
				
	}


	get_header(); ?>


				<label class="titoloSezione">Registrati</label><br /><hr/>


				
				<form id="form_organoPolitico" class="form_organoPolitico" name="form_organoPolitico" method="post" action="<?php echo home_url( 'form-governance' ); ?>">
				<?php include('include/governance/form-registrazioneIniziale.php'); ?>
				<?php include('include/governance/form-comune.php'); ?>
				<?php include('include/governance/form-personaleAmministrativi.php'); ?>
				<?php include('include/governance/form-organoGoverno.php'); ?>
				<?php include('include/governance/form-organiControllo.php'); ?>
<!-- 				<?php include('include/form-personaleAmministrativi.php'); ?> -->
				<?php include('include/governance/form-UfficioAnagrafe.php'); ?>
				<?php include('include/governance/form-deleghe.php'); ?>
				<?php include('include/governance/form-settori.php'); ?>
				<?php include('include/form-domandeSicurezza.php'); ?>
				<?php include('include/form-Privacy-accettazione.php'); ?>
				
				
				<div class="salvaButton" id="salvaButton">
					<input id="salva" type="submit" name="Submit" value="Submit" tabindex="2" />
				</div>
				</form>	
	</div>

	<?php get_footer(); ?>