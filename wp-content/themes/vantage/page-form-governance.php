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
    global $wpdb;
    $bp_prefix       = bp_core_get_table_prefix();

	if (isset($_POST['Submit'])){

        //echo('sono nel salva');


        $cognome_valore = $_POST['cognome'];
        $nome_valore = $_POST['nome'];
        $secondoNome_valore = $_POST['secondoNome'];
        $registrazione1_valore = $_POST['registrazione1'];
        $comune = $_POST['comune'];
        $mail = $_POST['mailIns'];
        $indirizzoMail = $_POST['indirizzoMail'];
        $sezOrgAppatenenza = $_POST['sezOrgAppatenenza'];
        $sezAmministrativo = $_POST['sezAmministrativo'];
        $sezSettori = $_POST['sezSettori'];


        // domande si sicurezza
        $password = $_POST['password'];
        $selectDomanda1 = $_POST['selectDomanda1'];
        $risposta1 = $_POST['risposta1'];
        $selectDomanda1 = $_POST['selectDomanda2'];
        $risposta1 = $_POST['risposta2'];
        $selectDomanda1 = $_POST['selectDomanda3'];
        $risposta1 = $_POST['risposta3'];


        //organo di controllo
        $sezOganoControllo = $_POST['sezOganoControllo'];

//        //deleghe
//        $deleghe = $_POST['deleghe'];
//        $partitoPolitico = $_POST['partitoPolitico'];
//        $dataElezioneGG = $_POST['dataElezioneGG'];
//        $dataElezioneMM = $_POST['dataElezioneMM'];
//        $dataElezioneAA = $_POST['dataElezioneAA'];
//
//        $dataElezione = $dataElezioneGG."-".$dataElezioneMM."-".$dataElezioneAA;
//
//        $dataNominaGG = $_POST['dataNominaGG'];
//        $dataNominaMM = $_POST['dataNominaMM'];
//        $dataNominaAA = $_POST['dataNominaAA'];
//
//        $dataNomina = $dataNominaGG."-".$dataNominaMM."-".$dataNominaAA;


        //uffici
        $suap = $_POST['suap'];
        $ufficioAnagrafe = $_POST['ufficioAnagrafe'];
        $culturaSportTurismo = $_POST['culturaSportTurismo'];
        $economato = $_POST['economato'];
        $ufficioElettorale = $_POST['ufficioElettorale'];
        $ufficioGiuntaComunale = $_POST['ufficioGiuntaComunale'];
        $ufficioLavoriPubblici = $_POST['ufficioLavoriPubblici'];
        $ufficioProtocollo = $_POST['ufficioProtocollo'];
        $ufficioRelazioniPubblico = $_POST['ufficioRelazioniPubblico'];
        $ufficioSegreteriaGenerale = $_POST['ufficioSegreteriaGenerale'];
        $suap = $_POST['ufficioServiziDemografici'];
        $ufficioServiziSociali = $_POST['ufficioServiziSociali'];


        $mailValida =$mail . $indirizzoMail;


        //$password = '123456';

        $user_data = array(
            'ID' => '',
            'user_pass' => $password,
            'user_login' => $nome_valore
        );

        $new_userid = wp_insert_user( $user_data );

        if( isset($new_userid)  ) {


            $profile_fieldsId_Name = $wpdb->get_results( "SELECT id, name FROM {$bp_prefix}bp_xprofile_fields", ARRAY_A);




            $corpoMail = "e stata eggettuata una registrazione con il seguente nome" .$nome_valore . " e cognome " . $cognome_valore ." i dati di accesso sono :" . $nome_valore . "e pass" . $password;

            mail($mailValida, "invio mail registrazione", $corpoMail, "From: ".$mailValida);
            wp_redirect(get_bloginfo('url').'/wp-content/themes/vantage/page-registrazione.php');


        } else {
            $errore = 'Error on user creation';
        }

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
