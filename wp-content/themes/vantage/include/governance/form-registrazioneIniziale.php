<div id="dati_registrazioneIniziale" class="dati_registrazioneIniziale">
	 <div class="div_form" id="div_form">
		<div class="nome_cognome" id="nome_cognome">
			<input type="text" name="nome" value="" placeholder="inserisci il tuo Nome" >
            <input type="hidden" name="nomeH" value="Nome">
            <br />
			<input type="text" name="secondoNome" value="" placeholder="inserisci il tuo Secondo Nome" >
            <input type="hidden" name="secondoNomeH" value="Secondo Nome">
            <br />
			<input type="text" name="cognome" value=""  placeholder="inserisci il tuo Cognome">
            <input type="hidden" name="cognomeH" value="Cognome">
        </div>
			<label class="titoloGruppo">Dati Ente</label><br /><hr>
			<div class="fildRegistrazione" id="fildRegistrazione">
	                     <input class="regione" type="radio" id="regione" name="registrazione1" value="regione"/>
                         <input type="hidden" name="registrazione1H" value="regione">
	                     <label class="regione">Regione</label><br />
	                     <input class="provincia" type="radio" id="provincia" name="registrazione1" value="provincia"/>
                         <input type="hidden" name="registrazione1H" value="provincia">
	                     <label class="provincia">Provincia</label><br />
	                     <input  class="comune"type="radio" id="comune" name="registrazione1" value="comune"/>
                         <input type="hidden" name="registrazione1H" value="comune">
	                     <label class="comune">Comune</label><br />
		    </div>

<!-- 		<tr><td><label>Mail</label></td><td><input type="text" name="mail" value="f.fatelli@gmail.com"></td></tr> -->
<!-- 		<tr><td></td><td><input id="procedi_registrazione" class="procedi_registrazione" type="submit" value="Procedi" name="procedi_registrazione"></td></tr> -->
	  </div>
</div>
<!--
<div class="div_passaggi"> 
in questo contenuto verra messa la spiegazione dei vari passaggi di registrazione

<div class="contenitore">
	<?php
		if (isset($errore)){
	?>
	<div id="errore_mess" style="border:1px solid #000000;">
	<?php	
			echo($errore);
	?>
	</div>
	<?php	
	}else{
		if ((isset($nome_valore)) || (isset($cognome_valore)) || (isset($mail_valore))){
	?>
		<div id="errore_mess" style="border:1px solid #000000;">
	<?php	
			echo('utente inserito con successo');
	?>
	</div>
	<?php
		}		
	}
	?>


</div>
</div>
-->