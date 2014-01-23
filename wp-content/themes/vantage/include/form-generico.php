<div id="dati_registazione" class="dati_registazione">
	<table width="300" border="1">
		<tr><td><label>Titolo accademico</label></td><td><input id="titoloAccademico_valore" type="text" value="<? echo ($titoloAccademico_valore); ?>"></td></tr>
		<tr><td><label>Cognome</label></td><td><input id="cognome_valore" type="text" value="<? echo ($cognome_valore); ?>"></td></tr> 
		<tr><td><label>Nome</label></td><td><input id="nome_valore" type="text" value="<? echo ($nome_valore); ?>"></td></tr>	
		<tr><td><label>Sesso</label></td><td><input id="sesso" type="text" value="<? echo ($sesso); ?>"></td></tr>
		<tr><td><label>Mail</label></td><td><input id="mail_valore" type="text" value="<? echo ($mail_valore); ?>"></td></tr>
		<tr><td><label>Comune di Appartenenza</label></td><td><input type="text"</td></tr>
	</table>	
	<div id="dati_tipologiaEnte" class="dati_tipologiaEnte">
	
	<table id="tipologiaEnte" border="1">
			    <tr>
			    <td><label>Tipologia Ente</label>
			      <select>
			          <option selected="selected" value="1">-- Seleziona un Valore</option>
			          <option value="Amministrazione Comunale">Amministrazione Comunale</option>
			          <option value="Citt&agrave Metropolitana">Citt&agrave Metropolitana</option>
			          <option value="Provincia">Provincia</option>
			          <option value="Regione">Regione</option>
				  </select> 			    
			        </td>
			     </tr>
	</table>	
	</div>
</div>