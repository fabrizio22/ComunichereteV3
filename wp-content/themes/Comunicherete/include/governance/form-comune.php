<?php
//echo get_template_directory_uri();
?>
<div id="comune_reg" class="comune_reg">
	<div class="gruppoComuneRegione">
		<input placeholder="Insirisci il tuo Comune di Appartenenza" title="Comune di appartenenza" type="text" id="comuneApp" name="comuneApp">
        <input type="hidden" id="comune" name="comuneH" value="Denominazione Ente">
        <br />
		<input id="mailIns" placeholder="Inserisci la tua Mail" class="mailIns" type="text"  name="mailIns">
        <input type="hidden" id="comune" name="mailInsH" value="Mail Ente">
		<input id="mailComune" class="mailComune" type="text" name="indirizzoMail" value=""><br />
		<input id="confMail" placeholder="Reinserisci la Mail" class="confMail" type="text" name="confMail">
		<input id="mailComuneConf" class="mailComune" type="text" name="indirizzoMail" value=""><br />


		<div class="fildComune" id="fildComune">
            <label class="titoloSottoSezione">Organo di Appartenenza e Qualifica</label><br/>
            <select class="selectCerca" id="organoAppartenenza" name="organoAppartenenza">
                <option value="-" selected="selected">Seleziona Organo di Appartenenza</option>
                <option value="Organi di Governo">Organi di Governo</option>
                <option value="Organi di Controllo">Organi di Controllo</option>
                <option value="Personale Amministraivo">Personale Amministraivo</option>
                <option value="Organi di Controllo">Polizia Municipale</option>
            </select>
		</div>
        <input type="hidden" name="sezAmministrativoH" value="Organo di Appartenenza">
	</div>
</div>