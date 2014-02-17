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
		<label class="labelBusinessTitoli">Organo di Appartenenza </label><br />
		<div class="fildComune" id="fildComune">						 
	        <input id="organiGoverno" type="radio" class="organiGoverno" name="sezOrgAppatenenza" value="Organi di Governo" />
            <input type="hidden" id="comune" name="sezOrgAppatenenzaH" value="Organo di Appartenenza">
	        <label class="optionComuni">Organo di Governo</label><br />
	        <input id="organiControllo" type="radio" class="organiControllo" name="sezOrgAppatenenza" value="Organi di Controllo" />
            <input type="hidden" id="comune" name="sezOrgAppatenenzaH" value="Organo di Appartenenza">
            <label class="optionComuni">Organo di Controllo</label><br />
            <input id="personaleAmministrativo" class="personaleAmministrativo" name="sezOrgAppatenenza" type="radio" value="Personale Amministraivo" />
            <input type="hidden" id="comune" name="sezOrgAppatenenzaH" value="Organo di Appartenenza">
            <label class="optionComuni">Personale Amministraivo</label><br />
		</div>
	</div>
</div>