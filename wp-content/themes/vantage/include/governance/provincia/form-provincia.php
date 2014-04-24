<?php
//echo get_template_directory_uri();
?>
<div id="provincia_reg" class="provincia_reg">
    <input placeholder="Insirisci la tua Provincia di Appartenenza" title="Comune di appartenenza" type="text" id="provinciaApp" name="provinciaApp">
    <input type="hidden" id="provincia" name="provinciaH" value="Denominazione Ente">
    <br />

    <div class="gruppoComuneRegione">
		<input id="mailIns" placeholder="Inserisci la tua Mail" class="mailIns" type="text"  name="mailInsPr">
        <input type="hidden" id="comune" name="mailInsH" value="Mail Ente">
		<input id="mailComune" class="mailComune" type="text" name="indirizzoMailPr" value=""><br />
		<input id="confMail" placeholder="Reinserisci la Mail" class="confMail1" type="text" name="indirizzoMailPr">
		<input id="mailComuneConf" class="mailComune" type="text" name="indirizzoMailPr" value=""><br />


		<div class="fildComune" id="fildComune">
            <label class="titoloSottoSezione">Organo di Appartenenza e Qualifica</label><br/>
            <select class="selectCerca selectCercaReg" id="organoAppartenenzaPr" name="organoAppartenenzaPr">
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