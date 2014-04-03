    <?php
    /**
     * Created by PhpStorm.
     * User: Master
     * Date: 14/03/14
     * Time: 16:36
     */

    ?>
    		<form action="<?php echo home_url( 'ricerca-utente' ); ?>" method="post">
            <div class="contenitoreFiltri" id="contenitoreFiltri">
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
                        <input type="text" class="inputNomeEnte" name="inputNomeEnte" id="inputNomeEnte" disabled="true">
                    </div>

                    <div id="contentFiltri" class="contentFiltri">
                        <label id="linkZonaGeografica" class="linkZonaGeografica disabilitato">Zona Geografica</label>
                        <div class="conteiner2liv2" id="conteiner2liv2">
                            <div id="divZonaGeografica" class="divZonaGeografica">
                                <div class="zonaGeografica_Regione" id="zonaGeografica_Regione" name="zonaGeografica_Regione">
                                    <select class="selectCerca" id="zonaGeografica_regione" name="zonaGeografica_regione" disabled="true"> </select>
                                </div>

                                <div class="zonaGeografica_Provincia" id="zonaGeografica_Provincia" name="zonaGeografica_Provincia">
                                    <select class="selectCerca" id="zonaGeografica_provincia" name="zonaGeografica_provincia" disabled="true"></select>
                                </div>

                                <div class="zonaGeografica_Comune" id="zonaGeografica_Comune" name="zonaGeografica_Comune">
                                    <select multiple class="selectCerca" id="zonaGeografica_comune" name="zonaGeografica_comune" disabled="true"></select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a href="#" id="avviaRicerca" class="avviaRicerca disabilitato">Avvia Ricerca</a>
			  </div>
            </form>
             <div id="risultatoRicercaUtente" class="risultatoRicercaUtente">