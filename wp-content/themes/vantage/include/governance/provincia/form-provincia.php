<div id="provincia_reg" class="provincia_reg">
    <input placeholder="Denominazione Provincia" title="Comune di appartenenza" type="text" id="provinciaApp" name="provinciaApp">
    <input type="hidden" id="provincia" name="provinciaH" value="Denominazione Ente">
    <br />

    <div class="gruppoComuneRegione">
		<input id="mailIns" placeholder="Inserisci la tua Mail" class="mailIns" type="text"  name="mailInsPr">
		<input id="mailComune" class="mailComune" type="text" name="indirizzoMailPr" value=""><br />
		<input id="confMail" placeholder="Reinserisci la Mail" class="confMail" type="text" name="confMail">
		<input id="mailComuneConf" class="mailComune" type="text" name="indirizzoMailPr" value=""><br />


		<div class="fildComune" id="fildComune">
            <label class="titoloSottoSezione">Organo di Appartenenza e Qualifica</label><br/>
            <select class="selectCerca selectCercaReg" id="organoAppartenenzaPr" name="organoAppartenenzaPr">
                <option value="-" selected="selected">Seleziona Organo di Appartenenza</option>
                <option value="Organi di Governo">Organi di Politico-Amministrativi</option>
                <option value="Organi di Controllo">Organi di Assistenza e Controllo</option>
                <option value="Personale Amministraivo">Personale Dirigente e Amministrativo</option>
                <option value="Polizia Provinciale">Polizia Provinciale</option>
            </select>
		</div>
	</div>
</div>