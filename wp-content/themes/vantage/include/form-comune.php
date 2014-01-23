<?php
//echo get_template_directory_uri();
?>
<div id="comune_reg" class="comune_reg">
	<div class="gruppoComuneRegione">
		<input placeholder="Insirisci il tuo Comune di Appartenenza" type="text" id="comune" name="comune"><br />
		<input id="mailIns" placeholder="Inserisci la tua Mail" class="mailIns" type="text"  name="mailIns">
		<input id="mailComune" class="mailComune" type="text" name="indirizzoMail" value="@gmail.com"><br />
		<input id="confMail" placeholder="Reinserisci la Mail" class="confMail" type="text" name="confMail">
		<input id="mailComune" class="mailComune" type="text" name="indirizzoMail" value="@gmail.com"><br />
		<label class="titoloGruppoComuni">Organo di Appartenenza </label><br /><hr class="gruppoComuneRegioneHr">
		<div class="fildComune" id="fildComune">						 
	                     <input id="organiGoverno" type="radio" class="organiGoverno" name="sezOrgAppatenenza" value="Organi di Governo" />
	                     <label class="optionComuni">Organo di Governo</label><br />
	                     <input id="organiControllo" type="radio" class="organiControllo" name="sezOrgAppatenenza" value="Organi di Controllo" />
	                     <label class="optionComuni">Organo di Controllo</label><br />
	                     <input id="personaleAmministrativo" class="personaleAmministrativo" name="sezOrgAppatenenza" type="radio" value="Personale Amministraivo" />
	                     <label class="optionComuni">Personale Amministraivo</label><br />
		</div>
	</div>
</div>