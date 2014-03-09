<div id="regione_reg" class="regione_reg">
    <input placeholder="Insirisci la tua Regione di Appartenenza" title="Regione di appartenenza" type="text" id="regioneApp" name="regioneApp">
    <input type="hidden" id="regione" name="regioneH" value="Denominazione Ente">
    <br />
	<div class="gruppoComuneRegione">
        <input id="mailIns" placeholder="Inserisci la tua Mail" class="mailIns" type="text"  name="mailInsRg">
        <input type="hidden" id="comune" name="mailInsH" value="Mail Ente">
        <input id="mailComune" class="mailComune" type="text" name="indirizzoMailRg" value=""><br />
        <input id="confMail" placeholder="Reinserisci la Mail" class="confMail" type="text" name="confMail">
        <input id="mailComuneConf" class="mailComune" type="text" name="indirizzoMailRg" value=""><br />


		<div class="fildRegione" id="fildRegione">
            <label class="titoloSottoSezione">Organo di Appartenenza e Qualifica</label><br/>
            <select class="selectCerca selectCercaReg" id="organoAppartenenzaRg" name="organoAppartenenzaRg">
                <option value="-" selected="selected">Seleziona Organo di Appartenenza</option>
                <option value="Organi di Governo">Organi di Governo</option>
                <option value="Personale Amministraivo">Personale Amministraivo</option>
            </select>
		</div>
        <input type="hidden" name="sezAmministrativoH" value="Organo di Appartenenza">
	</div>
</div>