<label class="titoloGruppoComuni">Password e Sicurezza</label><br /><hr class="gruppoComuneRegioneHr">
<div id="ContainerPassword" class="ContainerPassword">
    <input type="password" name="password1" id="password" class="password"  placeholder="inserisci un Password" ><br/>
    <input type="password" name="passwordConf1" id="confPassword" class="confPassword"  placeholder="conferma password" >
</div><br/>
<div id="Containercapch" class="Containercapch">

<img id="captcha" src="<?php echo content_url() ?>./uploads/securimage/securimage_show.php" alt="CAPTCHA Image" />

<input type="text" name="captcha_code" size="10" maxlength="6" />
<a href="#" onclick="document.getElementById('captcha').src ='./wp-content/uploads/securimage/securimage_show.php?'
 + Math.random(); return false">[ Cambia Immagine ]</a><br/>
</div>
<div id="dati_privacy" class="dati_privacy">
	<label class="titoloGruppo">Privacy / Condizioni</label><br /><hr>
	<input id="Privacy" type="checkbox" class="Privacy" name="Privacy" value="Privacy" />
	<input id="PrivacyText" type="text" class="PrivacyText" name="PrivacyText" value="Privacy" />

</div>