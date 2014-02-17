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
    $value_ufficio = null;


    //$dati_field[];
	if (isset($_POST['Submit'])){

        //echo('sono nel salva');

        $nome_valore = $_POST['nome'];
        if(isset($nome_valore)){
           $nome_valoreH = $_POST['nomeH'];
            $dati_field[$nome_valoreH] = $nome_valore;
        }

        $cognome_valore = $_POST['cognome'];
        if(isset($cognome_valore)){
            $cognome_valoreH = $_POST['cognomeH'];
            $dati_field[$cognome_valoreH] = $cognome_valore;
        }
        $secondoNome_valore = $_POST['secondoNome'];
        if(isset($secondoNome_valore)){
            $secondoNome_valoreH = $_POST['secondoNomeH'];
            $dati_field[$secondoNome_valoreH] = $secondoNome_valore;
        }

        $registrazione1_valore = $_POST['registrazione1'];
        if(isset($registrazione1_valore)){
            $registrazione1_valoreH = $_POST['registrazione1H'];
            $dati_field[$registrazione1_valoreH] = $registrazione1_valore;
        }

        $DenominazioneEnte = $_POST['comuneApp'];
        if(isset($DenominazioneEnte)){
            $comuneH = $_POST['comuneH'];
            $dati_field[$comuneH] = $DenominazioneEnte;
        }



        $mail = $_POST['mailIns'];
        if(isset($mail)){
            $mailH = $_POST['mailInsH'];
            $dati_field[$mailH] = $mail;
        }

        $indirizzoMail = $_POST['indirizzoMail'];

        $sezOrgAppatenenza = $_POST['sezOrgAppatenenza'];
        if(isset($sezOrgAppatenenza)){
            $sezOrgAppatenenzaH = $_POST['sezOrgAppatenenzaH'];
            $dati_field[$sezOrgAppatenenzaH] = $sezOrgAppatenenza;
        }

        $sezAmministrativo = $_POST['sezAmministrativo'];
        if(isset($sezAmministrativo)){
            $sezAmministrativoH = $_POST['sezAmministrativoH'];
            $dati_field[$sezAmministrativoH] = $sezAmministrativo;
        }


        $sezSettori = $_POST['sezSettori'];
        if(isset($sezSettori)){
            $sezSettoriH = $_POST['settoriH'];
            $dati_field[$sezSettoriH] = $sezSettori;
        }


        // domande si sicurezza
        $password = $_POST['password'];

        $selectDomanda1 = $_POST['selectDomanda1'];
        if(isset($selectDomanda1)){
            $selectDomanda1H = $_POST['selectDomanda1H'];
            $dati_field[$selectDomanda1H] = $selectDomanda1;
        }

        $risposta1 = $_POST['risposta1'];
        if(isset($risposta1)){
            $risposta1H = $_POST['risposta1H'];
            $dati_field[$risposta1H] = $risposta1;
        }

        $selectDomanda2 = $_POST['selectDomanda2'];
        if(isset($selectDomanda2)){
            $selectDomanda2H = $_POST['selectDomanda2H'];
            $dati_field[$selectDomanda2H] = $selectDomanda2;
        }

        $risposta2 = $_POST['risposta2'];
        if(isset($risposta2)){
            $risposta2H = $_POST['risposta2H'];
            $dati_field[$risposta2H] = $risposta2;
        }

        $selectDomanda3 = $_POST['selectDomanda3'];
        if(isset($selectDomanda3)){
            $selectDomanda3H = $_POST['selectDomanda3H'];
            $dati_field[$selectDomanda3H] = $selectDomanda3;
        }

        $risposta3 = $_POST['risposta3'];
        if(isset($risposta3)){
            $risposta3H = $_POST['risposta3H'];
            $dati_field[$risposta3H] = $risposta3;
        }



        //organo di controllo
        $sezOganoControllo = $_POST['sezOganoControllo'];
        if(isset($sezOganoControllo)){
            $sezOganoControlloH = $_POST['sezOganoControlloH'];
            $dati_field[$sezOganoControlloH] = $sezOganoControllo;
        }


//        //deleghe
//        $deleghe = $_POST['deleghe'];
//        $delegheH = $_POST['delegheH'];
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

        $uffici = $_POST['uffici'];

        //uffici
        /*$suap = $_POST['suap'];
        $ufficioAnagrafe = $_POST['ufficioAnagrafe'];
        $culturaSportTurismo = $_POST['culturaSportTurismo'];
        $economato = $_POST['economato'];
        $ufficioElettorale = $_POST['ufficioElettorale'];
        $ufficioGiuntaComunale = $_POST['ufficioGiuntaComunale'];
        $ufficioLavoriPubblici = $_POST['ufficioLavoriPubblici'];
        $ufficioProtocollo = $_POST['ufficioProtocollo'];
        $ufficioRelazioniPubblico = $_POST['ufficioRelazioniPubblico'];
        $ufficioSegreteriaGenerale = $_POST['ufficioSegreteriaGenerale'];
        $ufficioServiziDemografici = $_POST['ufficioServiziDemografici'];
        $ufficioServiziSociali = $_POST['ufficioServiziSociali'];*/

        if(!empty($uffici)){
            foreach ($uffici as $ufficio ) {
                $value_ufficio .=  " - ".$ufficio;
            }
            $ufficiH = $_POST['ufficiH'];
            $dati_field[$ufficiH] = $value_ufficio;
        }


        $mailValida =$mail . $indirizzoMail;


        //$password = '123456';

        $dati_field;

        $user_data = array(
            'ID' => '',
            'user_pass' => $password,
            'user_login' => $nome_valore
        );

        $new_userid = wp_insert_user( $user_data );

        if( isset($new_userid)  ) {


            $profile_fieldsId_Name = $wpdb->get_results( "SELECT id, name FROM {$bp_prefix}bp_xprofile_fields", ARRAY_A);




            //$corpoMail = "e stata eggettuata una registrazione con il seguente nome" .$nome_valore . " e cognome " . $cognome_valore ." i dati di accesso sono :" . $nome_valore . "e pass" . $password;

            //mail($mailValida, "invio mail registrazione", $corpoMail, "From: ".$mailValida);
            //wp_redirect(get_bloginfo('url').'/wp-content/themes/vantage/page-registrazione.php');


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
