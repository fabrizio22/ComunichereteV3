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

        $registrazione1_valore = $_POST['datiEnte'];
        if(isset($registrazione1_valore)){
            $registrazione1_valoreH = $_POST['registrazione1H'];
            $dati_field[++$idx] = $registrazione1_valoreH."-".$registrazione1_valore;
        }

        $DenominazioneEnteCm = $_POST['comuneAppName'];
        if(isset($DenominazioneEnteCm)){
            $comuneH = $_POST['registrazione1H'];
            $dati_field[++$idx] = $comuneH."-".$DenominazioneEnteCm;
        }

        $DenominazioneEntePr = $_POST['provinciaApp'];
        if(isset($DenominazioneEntePr)){
            $provinciaH = $_POST['registrazione1H'];
            $dati_field[++$idx] = $provinciaH."-".$DenominazioneEntePr;
        }

        $DenominazioneEnteRg = $_POST['regioneApp'];
        if(isset($DenominazioneEnteRg)){
            $regioneH = $_POST['registrazione1H'];
            $dati_field[++$idx] = $regioneH."-".$DenominazioneEnteRg;
        }

        $mailCm = $_POST['mailInsCm'];
        if(isset($mailCm) && ($mailCm!='')){
            $mailH = $_POST['mailInsH'];
            $dati_field[++$idx] = $mailH."-".$mailCm;
            $mailIndirizzo = $mailCm;
        }

        $indirizzoMailCm = $_POST['indirizzoMailCm'];
        if(isset($indirizzoMailCm) && ($indirizzoMailCm!='')){
            $mailH = "host";
            $dati_field[++$idx] = $mailH . "-" .$indirizzoMailCm;
            $mailHost = $indirizzoMailCm;
        }

        $mailPr = $_POST['mailInsPr'];
        if(isset($mailPr) && ($mailPr!='')){
            $mailH = $_POST['mailInsH'];
            $dati_field[++$idx] = $mailH."-".$mailPr;
            $mailIndirizzo = $mailPr;
        }

        $indirizzoMailPr = $_POST['indirizzoMailPr'];
        if(isset($indirizzoMailPr) && ($indirizzoMailPr!='')){
                $mailH = "host";
            $dati_field[++$idx] = $mailH . "-" .$indirizzoMailPr;
            $mailHost = $indirizzoMailPr;
        }


        $mailRg = $_POST['mailInsRg'];
        if(isset($mailRg) && ($mailRg!='')){
            $mailH = $_POST['mailInsH'];
            $dati_field[++$idx] = $mailH."-".$mailRg;
            $mailIndirizzo = $mailRg;
        }

        $indirizzoMailRg = $_POST['indirizzoMailRg'];
        if(isset($indirizzoMailRg) && ($indirizzoMailRg!='')){
                $mailH = "host";
            $dati_field[++$idx] = $mailH . "-" .$indirizzoMailRg;
            $mailHost = $indirizzoMailCm;
        }



        $sezOrgAppatenenzaRg = $_POST['organoAppartenenzaRg'];
        if((isset($sezOrgAppatenenzaRg)) && ($sezOrgAppatenenzaRg!='-')){
            $sezOrgAppatenenzaH = $_POST['sezAmministrativoH'];
            $dati_field[++$idx] = $sezOrgAppatenenzaH."-".$sezOrgAppatenenzaRg;
        }

        $sezOrgAppatenenzaPr = $_POST['organoAppartenenzaPr'];
        if((isset($sezOrgAppatenenzaPr)) && ($sezOrgAppatenenzaPr!='-')){
            $sezOrgAppatenenzaH = $_POST['sezAmministrativoH'];
            $dati_field[++$idx] = $sezOrgAppatenenzaH."-".$sezOrgAppatenenzaPr;
        }

        $sezOrgAppatenenza = $_POST['organoAppartenenza'];
        if((isset($sezOrgAppatenenza)) && ($sezOrgAppatenenza!='-')){
            $sezOrgAppatenenzaH = $_POST['sezAmministrativoH'];
            $dati_field[++$idx] = $sezOrgAppatenenzaH."-".$sezOrgAppatenenza;
        }


        $sezAmministrativo = $_POST['qualificheGov'];
        if((isset($sezAmministrativo)) && ($sezAmministrativo!='-')){
            $sezAmministrativoH = $_POST['sezAmministrativoH'];
            $dati_field[++$idx] = $sezAmministrativoH."-".$sezAmministrativo;
        }


        $sezSettori = $_POST['settori'];
        if(isset($sezSettori)){
            $sezSettoriH = $_POST['sezSettoriH'];
            $dati_field[++$idx] = $sezSettoriH."-".$sezSettori;
        }

        // domande si sicurezza
        $password = $_POST['password1'];

        $selectDomanda1 = $_POST['selectDomanda1-1'];
        if(isset($selectDomanda1)){
            $selectDomanda1H = $_POST['selectDomanda1H'];
            $dati_field[++$idx] = $selectDomanda1H."-".$selectDomanda1;
        }

        $risposta1 = $_POST['risposta1-1'];
        if(isset($risposta1)){
            $risposta1H = $_POST['risposta1H'];
            $dati_field[++$idx] = $risposta1H."-".$risposta1;
        }

        $selectDomanda2 = $_POST['selectDomanda1-2'];
        if(isset($selectDomanda2)){
            $selectDomanda2H = $_POST['selectDomanda2H'];
            $dati_field[++$idx] = $selectDomanda2H."-".$selectDomanda2;
        }

        $risposta2 = $_POST['risposta1-2'];
        if(isset($risposta2)){
            $risposta2H = $_POST['risposta2H'];
            $dati_field[++$idx] = $risposta2H."-".$risposta2;
         }

        $selectDomanda3 = $_POST['selectDomanda1-3'];
        if(isset($selectDomanda3)){
            $selectDomanda3H = $_POST['selectDomanda3H'];
            $dati_field[++$idx] = $selectDomanda3H."-".$selectDomanda3;
         }

        $risposta3 = $_POST['risposta1-3'];
        if(isset($risposta3)){
            $risposta3H = $_POST['risposta3H'];
            $dati_field[++$idx] = $risposta3H."-".$risposta3;
        }



        //organo di controllo
        $sezOganoControllo = $_POST['organoControllo'];
        if((isset($sezOganoControllo)) && ($sezOganoControllo!='-')){
            $sezOganoControlloH = $_POST['sezOganoControlloH'];
            $dati_field[++$idx] = $sezOganoControlloH."-".$sezOganoControllo;
         }

        //organo di governo
        $sezOganoGoverno = $_POST['organoGoverno'];
        if((isset($sezOganoControllo)) && ($sezOganoControllo!='-')){
            $sezOganoGovernoH = $_POST['sezOganoGovernoH'];
            $dati_field[++$idx] = $sezOganoGovernoH."-".$sezOganoGoverno;
        }

        $sezOganoGovernoRg = $_POST['organoGovernoRg'];
        if((isset($sezOganoGovernoRg)) && ($sezOganoGovernoRg!='-')){
            $sezOganoGovernoH = $_POST['sezOganoGovernoH'];
            $dati_field[++$idx] = $sezOganoGovernoH."-".$sezOganoGovernoRg;
        }

        $sezOganoGovernoPr = $_POST['organoGovernoPr'];
        if((isset($sezOganoControllo)) && ($sezOganoControllo!='-')){
            $sezOganoGovernoH = $_POST['sezOganoGovernoH'];
            $dati_field[++$idx] = $sezOganoGovernoH."-".$sezOganoGovernoPr;
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


        $mailValida =$mailIndirizzo . $mailHost;

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


                $data= array('ID' => '',
                    'field_id' => $profile_fieldsId_Name_id,
                    'user_id' => $new_userid,
                    'value' => $val_fild_reg[1],
                    'last_updated' => ' '
                );
                $wpdb->insert( 'wp_bp_xprofile_data', $data );

            }

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
