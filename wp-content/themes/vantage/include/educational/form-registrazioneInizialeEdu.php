<div id="dati_registrazioneInizialeEdu" class="dati_registrazioneInizialeEdu">
	 <div class="div_form" id="div_form">
		<div class="nome_cognome" id="nome_cognome">
			<input type="text" name="nome" value="" placeholder="inserisci il tuo Nome" >
            <input type="hidden" name="nomeH" value="Nome">
            <br />

			<input type="text" name="cognome" value=""  placeholder="inserisci il tuo Cognome">
            <input type="hidden" name="cognomeH" value="Cognome"><br />
<br/>
            <label class="titoloGruppo">Inserisci dati instituto</label><br /><hr>
            <input id="mailIns" placeholder="Inserisci la tua Mail" class="mailIns" type="text"  name="mailIns">
            <input type="hidden" id="comune" name="mailInsH" value="Mail Ente">
            <input id="mailComune" class="mailComune" type="text" name="indirizzoMail" value=""><br />
            <input id="confMail" placeholder="Reinserisci la Mail" class="confMail" type="text" name="confMail">
            <input id="mailComuneConf" class="mailComune" type="text" name="indirizzoMail" value=""><br />
        </div>

         <div id="figuraProfessionale" class="figuraProfessionale">
             <select class="selectGenerica" id="figuraProfessionale" name="figuraProfessionale">
                 <option value="inserisci1" selected="selected">Scegli la tua Figura Professionale</option>
                 <option value="Dirigente Scolastico">Dirigente Scolastico</option>
                 <option value="Docente">Docente</option>
                 <option value="Personale ATA">Personale ATA</option>
             </select>	<br/>
             <input type="hidden" name="selectFiguraProfessionale" value="Figura Professionale">
         </div><br/><br />

         <label class="titoloGruppo">Indica denominazione della Scuola e area geografica</label><br /><hr>
         <input id="denominazioneScuola" placeholder="Scrivi denominazione Scuola" class="denominazioneScuola" type="text"  name="denominazioneScuola">
         <input type="hidden" name="denominazioneScuolaH" value="Denominazione Squola"><br />

         <div id="scuolaTipologia" class="scuolaTipologia">
             <select class="selectGenerica" id="tipologiaScuola" name="tipologiaScuola">
                 <option value="inserisci1" selected="selected">Scegli la Tipologia Scuola</option>
                 <option value="Infanzia">Infanzia</option>
                 <option value="Primaria">Primaria</option>
                 <option value="I grado">I grado</option>
                 <option value="II grado">II grado</option>
             </select>	<br/>
             <input type="hidden" name="selectFiguraProfessionale" value="Figura Professionale">
         </div>

         <input id="ubicazioneScuola" placeholder="Scrivi Comune di ubicazione della scuola" class="ubicazioneScuola" type="text"  name="ubicazioneScuola">
         <input type="hidden" name="ubicazioneScuolaH" value="Ubicazione Squola">

	  </div>
</div>
