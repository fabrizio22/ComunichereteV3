    <?php
    /**
     * Created by PhpStorm.
     * User: Master
     * Date: 14/03/14
     * Time: 16:36
     */

    ?>
    <div class="contenitoreFiltri" id="contenitoreFiltri">
<!--            <label class="titoloSezioneRicerca">Ricerca Utente</label>-->
    		    <form action="<?php echo home_url( 'ricerca-utente' ); ?>" method="post">

                <div class="filtriRicercaUtente">
                    <div class="divNomeUtente" name="divNomeUtente">
<!--                        <label class="intestazione">Nome</label>-->
                        <input type="text" class="inputUtente" name="nomeUtente" id="nomeUtente" placeholder="None">
                    </div>
                    <div class="divCognomeUtente" name="divCognomeUtente">
<!--                        <label class="intestazione">Cognome</label>-->
                        <input type="text" class="inputCognome" name="inputCognome" id="inputCognome" placeholder="Cognome" >
                    </div>
                    <div class="divCercaIn" name="divCercaIn">
                        <label class="intestazione">Cerca Utente in</label>
                        <?php include('pubblicaAmministrazione.php'); ?>
                    </div>
                    <div class="divQualificaProfessioneCarica" name="divQualificaProfessioneCarica">
                        <label class="intestazione">Qualifica Professione e Carica</label>
                        <select class="selectCerca" id="qualifiche" name="qualifiche" disabled="disabled"></select>
                    </div>
                    <div class="divNomeEnte" name="divNomeEnte">
                        <label class="intestazione disabilitato">Cerca solo in questa Struttura</label>
                        <input id="cercaEnte" type="checkbox" value="cercaEnte" disabled="true">
                        <label id="nomeEnte" class="nomeEnte"></label>
                        <input type="text" class="inputNomeEnte" name="inputNomeEnte" id="inputNomeEnte" disabled="true">
                    </div>


                        <label id="linkZonaGeografica" class="linkZonaGeografica disabilitato">Zona Geografica</label>
                        <div class="conteiner2liv2" id="conteiner2liv2">
                            <div id="divZonaGeografica" class="divZonaGeografica">
                                <div class="zonaGeografica_Regione" id="zonaGeografica_Regione" name="zonaGeografica_Regione">
                                     <div id='contenitoreSelect' class='contenitoreSelect'>
                                        <a id='selectComplessaRegRicerca' class='selectComplessa disabilitato'><div class='divLinkSelectEvoluta' id='divLinkSelectEvolutaReg'>Regione</div><div class='contentFrecciaSelect' id='contentFrecciaSelect' name='contentFrecciaSelect'><img src='http://localhost/ComunichereteV3/wp-content/plugins/wp-wg-ricerca-utente/img/freccia.png' class='freccia'></div></a>
                                     </div>
                                    <input type="hidden" id="valoreSelectReg" name="valoreSelectReg" value="">
                                </div>

                                    <div id='cm_apriRegioniRicerca' class='cm_apriRegioniRicerca'>
                                        <ol id='label_reg' class='facet-values'>

                                        </ol>
                                    </div>


                                <div class="zonaGeografica_Provincia" id="zonaGeografica_Provincia" name="zonaGeografica_Provincia">
                                    <div id='contenitoreSelect' class='contenitoreSelect'>
                                        <a id='selectComplessaProvRicerca' class='selectComplessa disabilitato'><div class='divLinkSelectEvoluta' id='divLinkSelectEvolutaProv'>Provincia</div><div class='contentFrecciaSelect' id='contentFrecciaSelect' name='contentFrecciaSelect'><img src='http://localhost/ComunichereteV3/wp-content/plugins/wp-wg-ricerca-utente/img/freccia.png' class='freccia'></div></a>
                                    </div>
                                    <input type="hidden" id="valoreSelectProv" name="valoreSelectProv" value="">
                                </div>


                                    <div id='cm_apriProvinciaRicerca' class='cm_apriProvinciaRicerca'>
                                        <ol id="label_pro" class='facet-values'>

                                        </ol>
                                    </div>


                                <div class="zonaGeografica_Comune" id="zonaGeografica_Comune" name="zonaGeografica_Comune">
                                    <div id='contenitoreSelect' class='contenitoreSelect'>
                                        <a id='selectComplessaComRicerca' class='selectComplessa disabilitato'><div class='divLinkSelectEvoluta' id='divLinkSelectEvolutaCom'>Comune</div><div class='contentFrecciaSelectCom' id='contentFrecciaSelectCom' name='contentFrecciaSelectCom'><img src='http://localhost/ComunichereteV3/wp-content/plugins/wp-wg-ricerca-utente/img/freccia.png' class='freccia'></div></a>
                                    </div>

                                        <div id='cm_apriComuneRicerca' class='cm_apriComuneRicerca'>
                                            <ol id="label_com" class='facet-values'>

                                            </ol>
                                        </div>
                                    <div class="footerCombo" id="footerCombo"><a href="#" id="confermaFiltri" class="confermaFiltri">Conferma Selezione</a></div>

                                </div>

                            </div>
                        </div>

                </div>
                <input type="submit" class="avviaRicerca disabilitato" id="avviaRicerca" value="Avvia Ricerca">


            </form>
    </div>