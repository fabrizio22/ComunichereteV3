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

    $idx = 0;
    $campi_registrazione = null;

	if (isset($_POST['Submit'])){

        //echo('sono nel salva');

        $nome_valore = $_POST['nome'];
        if(isset($nome_valore)){
           $nome_valoreH = $_POST['nomeH'];
           $dati_field[$idx] = $nome_valoreH."-".$nome_valore;
        }

        $cognome_valore = $_POST['cognome'];
        if(isset($cognome_valore)){
            $cognome_valoreH = $_POST['cognomeH'];
            $dati_field[++$idx] = $cognome_valoreH."-".$cognome_valore;
        }
        $secondoNome_valore = $_POST['secondoNome'];
        if(isset($secondoNome_valore)){
            $secondoNome_valoreH = $_POST['secondoNomeH'];
            $dati_field[++$idx] = $secondoNome_valoreH."-".$secondoNome_valore;
        }

        $registrazione1_valore = $_POST['registrazione1'];
        if(isset($registrazione1_valore)){
            $registrazione1_valoreH = $_POST['registrazione1H'];
            $dati_field[++$idx] = $registrazione1_valoreH."-".$registrazione1_valore;
        }

        $DenominazioneEnte = $_POST['comuneApp'];
        if(isset($DenominazioneEnte)){
            $comuneH = $_POST['comuneH'];
            $dati_field[++$idx] = $comuneH."-".$DenominazioneEnte;
        }

        $mail = $_POST['mailIns'];
        if(isset($mail)){
            $mailH = $_POST['mailInsH'];
            $dati_field[++$idx] = $mailH."-".$mail;
        }

        $indirizzoMail = $_POST['indirizzoMail'];

        $sezOrgAppatenenza = $_POST['organoAppartenenza'];
        if(isset($sezOrgAppatenenza)){
            $sezOrgAppatenenzaH = $_POST['sezAmministrativoH'];
            $dati_field[++$idx] = $sezOrgAppatenenzaH."-".$sezOrgAppatenenza;
        }

        $sezAmministrativo = $_POST['qualificheGov'];
        if(isset($sezAmministrativo)){
            $sezAmministrativoH = $_POST['sezAmministrativoH'];
            $dati_field[++$idx] = $sezAmministrativoH."-".$sezAmministrativo;
        }


        $sezSettori = $_POST['settori'];
        if(isset($sezSettori)){
            $sezSettoriH = $_POST['sezSettoriH'];
            $dati_field[++$idx] = $sezSettoriH."-".$sezSettori;
        }

        // domande si sicurezza
        $password = $_POST['password'];

        $selectDomanda1 = $_POST['selectDomanda1'];
        if(isset($selectDomanda1)){
            $selectDomanda1H = $_POST['selectDomanda1H'];
            $dati_field[++$idx] = $selectDomanda1H."-".$selectDomanda1;
        }

        $risposta1 = $_POST['risposta1'];
        if(isset($risposta1)){
            $risposta1H = $_POST['risposta1H'];
            $dati_field[++$idx] = $risposta1H."-".$risposta1;
        }

        $selectDomanda2 = $_POST['selectDomanda2'];
        if(isset($selectDomanda2)){
            $selectDomanda2H = $_POST['selectDomanda2H'];
            $dati_field[++$idx] = $selectDomanda2H."-".$selectDomanda2;
        }

        $risposta2 = $_POST['risposta2'];
        if(isset($risposta2)){
            $risposta2H = $_POST['risposta2H'];
            $dati_field[++$idx] = $risposta2H."-".$risposta2;
         }

        $selectDomanda3 = $_POST['selectDomanda3'];
        if(isset($selectDomanda3)){
            $selectDomanda3H = $_POST['selectDomanda3H'];
            $dati_field[++$idx] = $selectDomanda3H."-".$selectDomanda3;
         }

        $risposta3 = $_POST['risposta3'];
        if(isset($risposta3)){
            $risposta3H = $_POST['risposta3H'];
            $dati_field[++$idx] = $risposta3H."-".$risposta3;
        }



        //organo di controllo
        $sezOganoControllo = $_POST['organoControllo'];
        if(isset($sezOganoControllo)){
            $sezOganoControlloH = $_POST['sezOganoControlloH'];
            $dati_field[++$idx] = $sezOganoControlloH."-".$sezOganoControllo;
         }

        //organo di governo
        $sezOganoGoverno = $_POST['organoGoverno'];
        if(isset($sezOganoControllo)){
            $sezOganoGovernoH = $_POST['sezOganoGovernoH'];
            $dati_field[++$idx] = $sezOganoGovernoH."-".$sezOganoGoverno;
        }


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

        $mailValida =$mail . $indirizzoMail;

        $dati_field;

        $user_data = array(
            'ID' => '',
            'user_pass' => $password,
            'user_email' => $mailValida,
            'user_login' => $nome_valore
        );

        $new_userid = wp_insert_user( $user_data );


        if( isset($new_userid)  ) {

            for ($i = 0; $i <= count($dati_field) ; ++$i) {
                $val_fild_reg = explode("-", $dati_field[$i]);
                //$nome_field = $profile_fieldsId_Name[$i][name];

                $profile_fieldsId_Name_id = $wpdb->get_var( "SELECT id FROM {$bp_prefix}bp_xprofile_fields where name = '". $val_fild_reg[0]."'");


                $data= array(                            'ID' => '',
                    'field_id' => $profile_fieldsId_Name_id,
                    'user_id' => $new_userid,
                    'value' => $val_fild_reg[1],
                    'last_updated' => ' '
                );
                $wpdb->insert( 'wp_bp_xprofile_data', $data );

            }

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
<!--    --><?php //include('include/governance/form-settori.php'); ?>
<!--    --><?php //include('include/governance/form-UfficioAnagrafe.php'); ?>
    <?php include('include/governance/poliziaMunicipale.php'); ?>
<!--    --><?php //include('include/governance/form-deleghe.php'); ?>
    <?php include('include/form-domandeSicurezza.php'); ?>
    <?php include('include/form-Privacy-accettazione.php'); ?>
<!--    provincia -->
    <?php include('include/governance/provincia/form-provincia.php'); ?>
    <?php include('include/governance/provincia/form-organoGovernoProv.php'); ?>
    <?php include('include/governance/provincia/form-organiControlloPr.php'); ?>
    <?php include('include/governance/provincia/form-personaleAmministrativiPr.php'); ?>
    <?php include('include/governance/provincia/poliziaMunicipalePr.php'); ?>
<!--    --><?php //include('include/governance/provincia/form-deleghePr.php'); ?>
    <?php include('include/governance/provincia/form-domandeSicurezzaPr.php'); ?>
    <?php include('include/governance/provincia/form-Privacy-accettazionePr.php'); ?>
<!--    regione -->
    <?php include('include/governance/regione/form-regione.php'); ?>
    <?php include('include/governance/regione/form-organoGovernoReg.php'); ?>
<!--    --><?php //include('include/governance/regione/form-delegheRg.php'); ?>
    <?php include('include/governance/regione/form-personaleAmministrativiRg.php'); ?>
    <?php include('include/governance/regione/form-domandeSicurezzaRg.php'); ?>
    <?php include('include/governance/regione/form-Privacy-accettazioneRg.php'); ?>

    <div class="salvaButton" id="salvaButton">
        <input id="salva" type="submit" name="Submit" value="Submit" tabindex="2" />
    </div>
</form>
</div>

<?php get_footer(); ?>
