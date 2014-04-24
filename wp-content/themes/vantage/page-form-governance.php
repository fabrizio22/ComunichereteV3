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
    $errore = null;
    $dati_Istat = null;

    $idx = 0;
    $campi_registrazione = null;


	if (isset($_POST['Submit'])){

        $nome_valore = $_POST['nome'];
        $cognome_valore = $_POST['cognome'];
        $registrazione1_valore = $_POST['datiEnte'];
        $DenominazioneEnteCm = $_POST['comuneAppName'];
        $DenominazioneEntePr = $_POST['provinciaApp'];
        $DenominazioneEnteRg = $_POST['regioneApp'];
        $mailCm = $_POST['mailInsCm'];
        $indirizzoMailCm = $_POST['indirizzoMailCm'];
        $mailPr = $_POST['mailInsPr'];
        $indirizzoMailPr = $_POST['indirizzoMailPr'];
        $mailRg = $_POST['mailInsRg'];
        $indirizzoMailRg = $_POST['indirizzoMailRg'];
        $mailHost = $indirizzoMailCm;
        $sezOrgAppatenenzaRg = $_POST['organoAppartenenzaRg'];
        $sezOrgAppatenenzaPr = $_POST['organoAppartenenzaPr'];
        $sezOrgAppatenenza = $_POST['organoAppartenenza'];
        $sezAmministrativo = $_POST['qualificheGov'];
        $sezSettori = $_POST['settori'];

        // domande si sicurezza
        $password = $_POST['password1'];
        $selectDomanda1 = $_POST['selectDomanda1-1'];
        $risposta1 = $_POST['risposta1-1'];
        $selectDomanda2 = $_POST['selectDomanda1-2'];
        $risposta2 = $_POST['risposta1-2'];
        $selectDomanda3 = $_POST['selectDomanda1-3'];
        $risposta3 = $_POST['risposta1-3'];
        //organo di controllo
       $sezOganoControllo = $_POST['organoControllo'];
       $sezOganoGoverno = $_POST['organoGoverno'];
       $sezOganoGovernoRg = $_POST['organoGovernoRg'];
       $sezOganoGovernoPr = $_POST['organoGovernoPr'];

        $uffici = $_POST['uffici'];
        $deleghe = $_POST['deleghe'];


        if(!empty($uffici)){
            foreach ($uffici as $ufficio ) {
                $value_ufficio .=  " - ".$ufficio;
            }
            $ufficiH = $_POST['ufficiH'];
            $dati_field[++$idx] = $ufficiH."-".$value_ufficio;
        }

        if(!empty($deleghe)){
            foreach ($deleghe as $delega ) {
                $value_delega .=  " - ".$deleghe;
            }
            $delegaH = $_POST['delegheH'];
            $dati_field[++$idx] = $delegaH."-".$value_delega;
        }

        $mailValida =$mailCm . $mailHost;
        /**
         * creazione nuovo utente su SIstema
         */
        $user_data = array(
            'ID' => '',
            'user_pass' => $password,
            'user_email' => $mailValida,
            'user_login' => $nome_valore
        );

        $new_userid = wp_insert_user( $user_data );

        /*fine creazione nuovo utente*/

        //controllare quale errore ricevo
        foreach($new_userid as $chiave => $valore)
        {
            foreach($valore as $chiave1 => $valore1)
            {
                $errore = $valore1[0];
            }
        }

        if(is_numeric($new_userid)) {
        /**
         * controllo ente selezionato e creo di conseguenza un array con i dati istat recuperati dal nome
         * ente selezionato
         */
            if(($DenominazioneEnteCm !='') ||($DenominazioneEnteCm !=null) ){
            $dati_Istat = $wpdb->get_results($wpdb->prepare( "SELECT codice_regione, denominazione_regione, codice_provincia, denominazione_provincia, codice_comune, denominazione_italiano, codice_ista_comune_Num, indirizzo, cap, sito_web, email, altidudine_centro, popolazione_legale_2011, codice_catastale FROM wp_elenco_comuni_istat where denominazione_italiano = %s", $DenominazioneEnteCm, ARRAY_A));
            }


        if(($DenominazioneEntePr !='') ||($DenominazioneEntePr !=null) ){
            $dati_Istat = $wpdb->get_var( "SELECT id FROM wp_elenco_comuni_istat where denominazione_provincia = '". $DenominazioneEntePr."'");
        }

        if(($DenominazioneEnteRg !='') ||($DenominazioneEnteRg !=null) ){
                $dati_Istat = $wpdb->get_var( "SELECT id FROM wp_elenco_comuni_istat where denominazione_regione = '". $DenominazioneEnteRg."'");
        }

            $array_user = array(
                'id_user' => trim($new_userid),
                'nome_user' => trim($nome_valore),
                'cognome_user' => trim($cognome_valore),
                'mail_user' => trim($mailValida),
                'codice_regione' => trim($dati_Istat[0] ->codice_regione),
                'codice_provincia' => trim($dati_Istat[0] ->codice_provincia),
                'codice_comune' => trim($dati_Istat[0] ->codice_comune),
                'codice_catastale'=> trim($dati_Istat[0] ->codice_catastale),
                'codice_totale_istat' => trim($dati_Istat[0] ->codice_totale_istat),
                'denominazione_regione' => trim($dati_Istat[0] ->denominazione_regione),
                'denominazione_provincia' => trim($dati_Istat[0] ->denominazione_provincia),
                'denominazione_comune_italiano' => trim($dati_Istat[0] ->denominazione_italiano),
                'altitudine_centro' => trim($dati_Istat[0] ->altidudine_centro),
                'popolazione_legale_2011' => trim($dati_Istat[0] ->popolazione_legale_2011),
                'indirizzo' => trim($dati_Istat[0] ->indirizzo),
                'cap' => trim($dati_Istat[0] ->cap),
                'sito_web' => trim($dati_Istat[0] ->sito_web),
                'tipo_ente' => trim($registrazione1_valore),
                'comune_appartenenza' => trim($dati_Istat[0] ->comune_appartenenza),
                'mail' => trim($dati_Istat[0] ->mail),
                'organo_appartenenza' => trim($sezOrgAppatenenza),
                'qualifica' => trim($sezOganoGoverno),
                'servizi_settori' => trim($dati_Istat[0] ->servizi_settori),
                'servizi_uffici' => trim($dati_Istat[0] ->servizi_uffici),
                'nuclei_poliziaOperativi' => trim($dati_Istat[0] ->nuclei_poliziaOperativi),
                'deleghe' => trim($dati_Istat[0] ->deleghe),
                'dipartimento' => trim($dati_Istat[0] ->dipartimento),
                'direzioni' => trim($dati_Istat[0] ->direzioni),
                'nome_ente' => trim($registrazione1_valore)
            );
            $wpdb->insert( 'wp_dati_user', $array_user );

            /**
             * salvataggio delle domende di sicuerezza
             */
            $array_user_sicurezza = array(
                'id_user' => trim($new_userid),
                'prima_domanda_sicurezza' => trim($selectDomanda1),
                'prima_risposta_sicurezza' => trim($risposta1),
                'seconda_domanda_sicurezza' => trim($selectDomanda2),
                'seconda_risposta_sicurezza' => trim($risposta2),
                'terza_doamda_sicurezza' => trim($selectDomanda3),
                'terza_risposta_sicurezza' => trim($risposta3),
            );
            $wpdb->insert( 'wp_sicurezza_user_registrazione', $array_user_sicurezza );


            $corpoMail =   "<table>".
            "<tr>".
            "<td colspan='2'>La tua Registrazione è avvenuta con successo con i seguenti dati :</td>".
            "</tr>".
            "<tr>".
            "<td width='8%'>user :</td>".
            "<td width='92%'>".$nome_valore ."</td>".
            "</tr>".
            "<tr>".
            "<td>mail :</td>".
            "<td>".$mailValida."</td>".
            "</tr>".
            "<tr>".
            "<td colspan='2'>&nbsp;</td>".
            "</tr>".
            "<tr>".
            "<td colspan='2'>si prega il prima possibile di completare la registrazione</td>".
            "</tr>".
            "<tr>".
            "<td colspan='2'>grazie di aver svelto la nostra piattaform</td>".
            "</tr>".
            "<tr>".
            "<td colspan='2'>grazie di aver svelto la nostra piattaforma</td>".
            "</tr>".
            "<tr>".
            "<td colspan='2'><strong><em>Comunicherete</em></strong></td>".
            "</tr>".
            "</table>";

            mail($mailValida, "invio mail registrazione", $corpoMail, "From: ".$mailValida);
            //wp_redirect(get_bloginfo('url').'/wp-content/themes/vantage/page-registrazione.php');

        } else {
            //echo($risultato);
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
<!--    --><?php //include('include/governance/form-settori.php'); ?>
<!--    --><?php //include('include/governance/form-UfficioAnagrafe.php'); ?>
    <?php include('include/governance/poliziaMunicipale.php'); ?>
<!--    --><?php //include('include/governance/form-deleghe.php'); ?>
<!--    provincia -->
    <?php include('include/governance/provincia/form-provincia.php'); ?>
    <?php include('include/governance/provincia/form-organoGovernoProv.php'); ?>
    <?php include('include/governance/provincia/form-organiControlloPr.php'); ?>
    <?php include('include/governance/provincia/form-personaleAmministrativiPr.php'); ?>
    <?php include('include/governance/provincia/poliziaMunicipalePr.php'); ?>
<!--    --><?php //include('include/governance/provincia/form-deleghePr.php'); ?>

<!--    regione -->
    <?php include('include/governance/regione/form-regione.php'); ?>
    <?php include('include/governance/regione/form-organoGovernoReg.php'); ?>
<!--    --><?php //include('include/governance/regione/form-delegheRg.php'); ?>
    <?php include('include/form-domandeSicurezza.php'); ?>
    <?php include('include/governance/regione/form-personaleAmministrativiRg.php'); ?>
    <?php include('include/governance/form-Privacy-accettazione.php'); ?>
    <div class="salvaButton" id="salvaButton">
        <input id="salva" type="submit" name="Submit" value="Submit" tabindex="2" />
    </div>
</form>
</div>

<?php get_footer(); ?>
