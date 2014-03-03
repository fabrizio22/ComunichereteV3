<div id="containerDimensioniAziendaSedeAzienda" class="containerDimensioniAziendaSedeAzienda">
<!-- <label class="titoloGruppo">bbbbbbbbb</label> -->
     <label class="labelBusinessTitoli">Dimensione Azienda</label><br />
	 <input id="microImpresa" type="radio" class="imputCK" name="sezImpresa" value="Micro Impresa" />
	 <label class="labelBus">Micro Impresa (meno di 10 addetti)</label><br />
	 <input id="piccolaImpresa" type="radio" class="imputCK" name="sezImpresa" value="Piccola Impresa" />
	 <label class="labelBus">Piccola Impresa (meno di 50 addetti)</label><br />
	 <input id="mediaImpresa" type="radio" class="imputCK" name="sezImpresa" value="Media Impresa" />
	 <label class="labelBus">Media Impresa (meno di 250 addetti)</label><br /><br />


	 
	 <div id="containerDatiBus" class="containerDatiBus">
	 <label class="labelBusinessTitoli">Società a partecipazione pubblica</label><br />
	 <input id="societaPartecipazionePubblicaSI" type="radio" class="imputCK" name="societaPartecipazionePubblica" value="SI" />
	 <label class="labelBus">Si</label><br />
	 <input id="societaPartecipazionePubblicaNO" type="radio" class="imputCK" name="societaPartecipazionePubblica" value="NO" />
	 <label class="labelBus">No</label><br /><br />


	<input type="text" id="entePrincipale" class="entePrincipale" name="entePrincipale" placeholder="inserisci Ente Principale" value""><br />

	 
	<div id="containerLavorativaPrincipale" class="containerLavorativaPrincipale">
	  <label class="labelBusinessTitoli">Sede lavorativa principale</label><br />
	  <div id="luogoLavoro" class="luogoLavoro">
	  	  <select class="selectGenerica" id="regioneNascita" name="regioneNascita">
		   	<option value="-" selected="selected">Seleziona la tua Provincia</option>
		   	<option value="lazio">Lazio</option>
		  </select><br />
		  <select class="selectGenerica" id="provinciaNascita" name="provinciaNascita">
		   	<option value="-" selected="selected">Seleziona la tua Provincia</option>
		   	<option value="lazio">Lazio</option>
		  </select><br />
		  <select class="selectGenerica" id="comuneLavoro" name="comuneLavoro">
		   	<option value="-" selected="selected">Seleziona il tuo Comune</option>
		   	<option value="roma" >Roma</option>
		   	<option value="latina">LATINA</option>
		   	<option value="viterbo">VITERBO</option>
		   	<option value="rieti">RIETI</option>
		   	<option value="frosinone">FROSINONE</option>
		  </select>	
	 </div>	 
	 </div>
	  
</div><br />

</div><br />