<?Php/*Plugin Name: Widget ricerca utentePlugin Script: wp-wg-ricerca-utente.phpDescription: si potrà inserire una ricerca utente nella sezione della sidebar che ci interessaVersion: 1.0License: GPL 2.0Author: Fabrizio Fatelli*/// rimuove dalla <head> la info sulla versione di wordpress installata sul sitoremove_action('wp_head', 'wp_generator');// toglie suggerimenti nella pagine di login in caso di login erratoadd_filter('login_errors',create_function('$a', "return null;"));wp_enqueue_style('ricerca_utente_css', WP_PLUGIN_URL . '/wp-wg-ricerca-utente/css/ricerca_utente.css');wp_enqueue_script('ricerca_utente_js', WP_PLUGIN_URL . '/wp-wg-ricerca-utente/js/ricerca_utente.js', array('jquery'));class wg_ricerca_utente extends WP_Widget{    public function __construct()    {        parent::WP_Widget( 'ricerca-utente', 'RICERCA UTENTE', array('description' => 'Grazie a questo wg sarà possibile effettuare la ricerca utente'));    }    public function form( $instance ){?>    <?php    }    public function widget( $args, $instance, $qual)    {        global $wpdb;        extract( $args );        $bp_prefix = bp_core_get_table_prefix();        $codizioni = 'select * from wp_dati_user where';        //$codizioni .= $qualifiche;        $inputCognome = $_POST['inputCognome'];        if($inputCognome != ''){            $codizioni .= ' cognome_user = '."'".$inputCognome. "'".' and';        }        $inputNomeEnte = $_POST['inputNomeEnte'];        if($inputNomeEnte != ''){            $codizioni .= ' nome_ente = '."'".$inputNomeEnte . "'".' and';        }        $divLinkSelectEvolutaReg =  $_POST['valoreSelectReg'];        if($divLinkSelectEvolutaReg != ''){            $codizioni .= ' denominazione_regione = '."'".$divLinkSelectEvolutaReg . "'".' and';        }        $divLinkSelectEvolutaProv = $_POST['valoreSelectProv'];        if($divLinkSelectEvolutaProv != ''){            $codizioni .= ' denominazione_provincia = '."'".$divLinkSelectEvolutaProv . "'".' and';        }        $pubblicaAmministrazioneRicerca = $_POST['pubblicaAmministrazioneRicerca'];        if($pubblicaAmministrazioneRicerca != ''){            $codizioni .= ' nome_ente = '."'".$pubblicaAmministrazioneRicerca . "'".' and';        }        $qualifiche = $_POST['qualifiche'];        if($qualifiche != ''){            if(count($qualifiche) == 1){                foreach($qualifiche as $chiave => $valore) {                    $codizioni .= ' qualifica = '."'".$valore . "'".' ';                }            }else{                $num_elementi = count($qualifiche);                $i=1;                foreach($qualifiche as $chiave => $valore) {                    $codizioni .= ' qualifica = '."'".$valore . "'".' ';                    if ($num_elementi != $i){                        $codizioni .= 'or';                        $i++;                    }                }            }            //$qualifiche .=  implode("qualifica = ", "'" .$qualifiche."'" );        }        $nomeUtente = $_POST['nomeUtente'];        if($nomeUtente != ''){            $codizioni .= ' and nome_user = '."'".$nomeUtente. "'".' ';        }        $divLinkSelectEvolutacom = $_POST['comune'];        if($divLinkSelectEvolutacom != ''){            foreach($divLinkSelectEvolutacom as $chiave => $valore) {                $codizioni .= ' or denominazione_comune_italiano = '."'".$valore . "'".' ';            }        }//        $valoriRicerca =null;//        $query =null;        $profile = $wpdb->get_results($wpdb->prepare($codizioni, ARRAY_A));        $qual=null;        $qualificheQ = $_POST['qualifiche'];        if($qualificheQ != ''){            if(count($qualificheQ) == 1){                foreach($qualificheQ as $chiave => $valore) {                    $qual .= ' voce_qualifiche = '."'".$valore . "'".' ';                }            }else{                $num_elementi = count($qualificheQ);                $i=1;                foreach($qualificheQ as $chiave => $valore) {                    $qual .= ' voce_qualifiche = '."'".$valore . "'".' ';                    if ($num_elementi != $i){                        $qual .= 'or';                        $i++;                    }                }            }            //$qualifiche .=  implode("qualifica = ", "'" .$qualifiche."'" );        }        $ufficio =null;        $deleghe =null;        $settori =null;        $dipartimenti =null;        $direzioni =null;        $nuclei =null;        $qualificheFiltri = $wpdb->get_results($wpdb->prepare('select * from wp_cm_qualifiche where '.$qual, ARRAY_A));        foreach($qualificheFiltri as $chiave => $valore) {            if($ufficio !='ok'){                $ufficio = $valore -> ufficio;            }            if($deleghe !='ok'){                $deleghe = $valore -> deleghe;            }            if($settori !='ok'){                $settori = $valore -> settori;            }            if($dipartimenti !='ok'){                $dipartimenti = $valore -> dipartimenti;            }            if($direzioni !='ok'){                $direzioni = $valore -> direzioni;            }            if($nuclei !='ok'){                $nuclei = $valore -> nuclei;            }         }        echo $before_widget;        echo $before_title . $title . $after_title;        ?>        <div class="contenitore" id="contenitore">            <?php include_once('inc/filtri_ricerca.php'); ?>            <div id="linkNavigazione" class="linkNavigazione"><!-- #contiene i tasti di navigazione risultato -->                <div class="ricercaProfili ricercaProfiliWrapper ricercaProfiliPosizione" id="ricercaProfili">                    <div id="ricercaProfiliImg" class="ricercaProfiliImg ">                        <div id="ricercaProfiliImgWrap" class="ricercaProfiliImgWrap"></div>                    </div>                    <label class="descrizioneTNavigazione descrizioneTNavigazioneProfil" id="descrizioneTNavigazione">Ricerca Profili</label>                </div>                <div class="mieiContatti mieiContattiPosizione" id="mieiContatti">                    <div class="mieiContattiImg">                        <div id="mieiContattiImgWrap" class="mieiContattiImgWrap"></div>                    </div>                    <label class="descrizioneTNavigazione descrizioneTNavigazioneMiei" id="descrizioneTNavigazione">Miei Contatti</label>                </div>                <div class="richiestaCollaborazione richiestaCollaborazionePosizione" id="richiestaCollaborazione">                    <div id="richiestaCollaborazioneImg" class="richiestaCollaborazioneImg">                        <div id="richiestaCollaborazioneImgWrap" class="richiestaCollaborazioneImgWrap"></div>                    </div>                    <label class="descrizioneTNavigazione descrizioneTNavigazioneColl" id="descrizioneTNavigazioneColl">Richiesta di collaborazione</label>                </div>            </div>            <div class="contentRisultato" id="contentRisultato">                <div id="risultatoRicercaUtenteFiltri" class="risultatoRicercaUtenteFiltri">                    <div id="areaFiltri" class="areaFiltri"> <!-- #contiene i filtri profilati -->                        <div id="intestazioneFiltri" class="intestazioneFiltri">Affina la Ricerca</div>                        <?php if($ufficio == 'ok'){ ?>                            <div class="affinaRicercaFiltro" id="affinaRicercaFiltro">                                <?php include('inc/qualifiche/comuni/cm_Uffici.php'); ?>                            </div>                        <? } ?>                        <?php if($nuclei == 'ok'){ ?>                            <div class="affinaRicercaFiltro" id="affinaRicercaFiltro">                                <?php include('pubblicaAmministrazione.php'); ?>                            </div>                        <? } ?>                        <?php if($deleghe == 'ok'){ ?>                            <div class="affinaRicercaFiltro" id="affinaRicercaFiltro">                                <?php include('inc/qualifiche/comuni/cm_deleghe.php'); ?>                            </div>                        <? } ?>                        <?php if($settori == 'ok'){ ?>                            <div class="affinaRicercaFiltro" id="affinaRicercaFiltro">                                <?php include('inc/qualifiche/comuni/cm_Settori.php'); ?>                            </div>                        <? } ?>                        <?php if($dipartimenti == 'ok'){ ?>                            <div class="affinaRicercaFiltro" id="affinaRicercaFiltro">                                <?php include('pubblicaAmministrazione.php'); ?>                            </div>                        <? } ?>                        <?php if($direzioni == 'ok'){ ?>                            <div class="affinaRicercaFiltro" id="affinaRicercaFiltro">                                <?php include('pubblicaAmministrazione.php'); ?>                            </div>                        <? } ?>                    </div>                </div>                <div id="contenitoreRisultato" class="contenitoreRisultato"><!-- #contenitore dei risultati -->                    <div id="contenitoreScroll" class="contenitoreScroll"><!-- #contennitore per scroll risultati utente -->                        <div id="areaElencoUtenti" class="areaElencoUtenti"><!-- #contenitore risultato utente -->                        <?php foreach($profile as $chiave => $valore) { ?>                            <div class="schedaUtente" >                                <div id="intestazioneFil" class="intestazioneFil">                                    <div id="utente" class="utente"><?php echo($valore -> nome_user); echo($valore -> cognome_user);  ?></div>                                    <div class="frecciaDetUtente"></div>                                </div>                                <div class="contentAvatar"><div id="avatar" class="avatar"><img class="subImgAvat" src="<?php echo content_url() ?>/plugins/wp-wg-ricerca-utente/img/Richieste-Collaborazione.png"></div></div>                                <div id="stemma" class="stemma"></div>                                <div id="entefiltro"  class="entefiltro"><?php echo($valore -> denominazione_comune_italiano);  ?></div>                                <div id="maggInfo" class="maggInfo">i</div>                                <div class="qualidicaDes" id="qualidicaDes"><?php echo($valore -> qualifica);  ?></div>                                <div id="delegaDes" class="delegaDes">Deleghe : <?php echo($valore -> deleghe);  ?></div>                            </div>                        <?php } ?>                        </div>                    </div>                    <div id="infoUtenteCont" class="infoUtenteCont"><!-- #contenitore info utente -->                        <div id="infoUtente" class="infoUtente"><!-- #contenitore info utente -->                            <div id="contentInfoHeader" class="contentInfoHeader">                                <div id="contentinfoUtente" class="contentinfoUtente">                                    <div class="immagineUtente" id="immagineUtente">                                    </div>                                    <div id="contentLabelUtente" class="contentLabelUtente" >                                        <label class="nomeUtentInfo" id="nomeUtentInfo">Fabrizio</label>                                        <label class="cognomeUtentInfo" id="cognomeUtentInfo">Fatelli</label>                                        <label class="certificatoUtentInfo" id="certificatoUtentInfo">Certificato</label>                                    </div>                                </div>                                <div id="contentTastiCM" class="contentTastiCM">                                    <div name="collegati" class="collegati">                                        <label class="tastoCollegati" id="tastoCollegati">Collegati      e Collabora</label>                                    </div>                                    <div name="messaggio" class="messaggio">                                        <label class="tastoMessaggio" id="tastoMessaggio">invia un Messaggio</label>                                    </div>                                </div>                                <div id="contentTasti" class="contentTasti">                                    <div id="tastoOrganizzazione" class="tastoOrganizzazione">                                        <label class="nomeTasto" id="nomeTasto">organizzazione</label>                                    </div>                                    <div id="tastoMansione" class="tastoMansione">                                        <label class="nomeTasto" id="nomeTasto">Mansione</label>                                    </div>                                    <div id="tastoAlrto" class="tastoAltro">                                        <label class="nomeTasto" id="nomeTasto">Altro</label>                                    </div>                                </div>                                <div id="contentMansione" class="contentMansione">                                </div>                                <div id="contentAtro" class="contentAtro">                                </div>                                <div id="contentInfoPreMappa" class="contentInfoPreMappa">                                </div>                                <div id="contentMappa" class="contentMappa">                                    <label class="nomeTasto" id="nomeTasto">mappa</label>                                </div>                            </div>                    </div>                </div>            </div>        </div>        <?php        echo $after_widget;    }}function wg_ricerca_utente(){    register_widget( 'wg_ricerca_utente' );}add_action( 'widgets_init', 'wg_ricerca_utente' );?>