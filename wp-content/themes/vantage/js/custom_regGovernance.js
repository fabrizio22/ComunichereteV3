jQuery(document).ready(function(){

	jQuery.noConflict();

    ind = 0;
    indP = 0;
    indQ = 0;
    indR = 0;
    indS = 0;
    indSet = 0;
    indUffGov =0;

/* 	var dati_registrazioneIniziale = jQuery('#dati_registrazioneIniziale'); */
	var comune_reg = jQuery('#comune_reg');
    var regione_reg = jQuery('#regione_reg');
    var provincia_reg = jQuery('#provincia_reg');
	var dati_registazione = jQuery('#dati_registazione');
	var dati_tipologiaEnte = jQuery('#dati_tipologiaEnte');
	var dati_registrazioneIniziale = jQuery('#dati_organoPolitico');
	var procedi_registrazione = jQuery('#procedi_registrazione');
	var form_organoPolitico = jQuery('#form_organoPolitico');
    var containerPersonaleAmministrativo = jQuery('#containerPersonaleAmministrativo');
    var containerPersonaleAmministrativoPr = jQuery('#containerPersonaleAmministrativoPr');
    var containerPersonaleAmministrativoRg = jQuery('#containerPersonaleAmministrativoRg');
    var containerUffici = jQuery('#containerUffici');
    var containerSettori = jQuery('#containerSettori');
    var dati_privacy = jQuery('#dati_privacy');
    var dati_privacyPr = jQuery('#dati_privacyPr');
    var dati_privacyRg = jQuery('#dati_privacyRg');
    //var settoriSecondarigha = jQuery('.settoriSecondaRigha');
    var containerDomandeSicurezza = jQuery('.containerDomandeSicurezza');
    var containerDomandeSicurezzaPr = jQuery('.containerDomandeSicurezzaPr');
    var containerDomandeSicurezzaRg = jQuery('.containerDomandeSicurezzaRg');
    var containerOrganoGoverno = jQuery('.containerOrganoGoverno');
    var containerDeleghe = jQuery('.containerDeleghe');
    var containerDeleghePr = jQuery('.containerDeleghePr');
    var containerDelegheRg = jQuery('.containerDelegheRg');
    var containerOrganoControllo = jQuery('.containerOrganoControllo');
    var containerOrganoControlloPr = jQuery('.containerOrganoControlloPr');
	var containerQuailificheMansioniBus = jQuery('.containerQuailificheMansioniBus');
	var containerQualificheTitolareBus = jQuery('.containerQualificheTitolareBus');
	var containerQualificheAltriBus = jQuery('.containerQualificheAltriBus');
	var containercategoriaMerceologica = jQuery('.containercategoriaMerceologica');
	var containerAbbigliamentoBus = jQuery('.containerAbbigliamentoBus');
	var containerDimensioniAziendaSedeAzienda = jQuery('.containerDimensioniAziendaSedeAzienda');
	var entePrincipale = jQuery('.entePrincipale');
	var containerLiberoProfessionista = jQuery('.containerLiberoProfessionista');
    var containerpoliziaMunicipale = jQuery('.containerpoliziaMunicipale');
    var containerpoliziaMunicipalePr = jQuery('.containerpoliziaMunicipalePr');
    var containerOrganoGovernoProv = jQuery('.containerOrganoGovernoProv');
    var containerOrganoGovernoReg = jQuery('.containerOrganoGovernoReg');


	var salva = jQuery('#salvaButton');

	var dati_personaleDipendente = jQuery('#dati_personaleDipendente');
	var dati_organoPolitico = jQuery('#dati_organoPolitico');

	comune_reg.css('display','none');
    regione_reg.css('display','none');
    provincia_reg.css('display','none');
	dati_registazione.css('display','none');
	dati_tipologiaEnte.css('display','none');
	salva.css('display','none');
	//form_organoPolitico.css('display','none');
	dati_personaleDipendente.css('display','none');
	dati_organoPolitico.css('display','none');
    containerPersonaleAmministrativo.css('display','none');
    containerPersonaleAmministrativoPr.css('display','none');
    containerPersonaleAmministrativoRg.css('display','none');
    containerpoliziaMunicipale.css('display','none');
    containerpoliziaMunicipalePr.css('display','none');
    containerUffici.css('display','none');
	containerSettori.css('display','none');
	dati_privacy.css('display','none');
    dati_privacyPr.css('display','none');
    dati_privacyRg.css('display','none');
	//settoriSecondarigha.css('display','none');
	containerDomandeSicurezza.css('display','none');
    containerDomandeSicurezzaPr.css('display','none');
    containerDomandeSicurezzaRg.css('display','none');
	containerOrganoGoverno.css('display','none');
    containerOrganoGovernoProv.css('display','none');
    containerOrganoGovernoReg.css('display','none');
	containerDeleghe.css('display','none');
    containerDeleghePr.css('display','none');
    containerDelegheRg.css('display','none');
	containerOrganoControllo.css('display','none');
    containerOrganoControlloPr.css('display','none');
	containerQuailificheMansioniBus.css('display','none');
	containerQualificheTitolareBus.css('display','none');
	containerQualificheAltriBus.css('display','none');
	containercategoriaMerceologica.css('display','none');
	containerAbbigliamentoBus.css('display','none');
	containerDimensioniAziendaSedeAzienda.css('display','none');
	entePrincipale.css('display','none');
	containerLiberoProfessionista.css('display','none');

	jQuery("#form_organoPolitico").validate(
	    {
	        rules:
	        {
	            nome: "required",
	            secondoNome: "required",
	            cognome: "required",
	            password:{
		            required: "required",
					minlength: "6"
	            }

	        },
	        passwordConf:{
		        required: "required",
				minlength: "6"
	        },
            mailIns: {
                required: "required",
                email: true
            },
            confMail: {
                required: "required",
                email: true
            },
	        messages:
	        {
	            nome: " Inserisci il tuo nome!",
	            cognome: " Inserisci il tuo cognome!",
	            secondoNome: " Scegli un nickname!",
	            password:{
		            required: "Inserisci la password",
					minlength: "la lunghezza minima della password e di 6 caratteri"
		        },
		 	    passwordConf:{
			            required: "Inserisci la password",
						minlength: "la lunghezza minima della password e di 6 caratteri"
		         },
		         mailIns: {
	                 required: "inserisci la tua Mail",
	                 email: true
	            },
	            confMail: {
	                required: "devi confermare la mail",
	                email: true
	            }
	        }
	    });
	        jQuery('#info').hover(function() {
				jQuery( '#pop-up' ).tooltip();
	});

    //fa apparire al clik del ck la sezione
    jQuery('input:radio[value="comune"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'comune'))  {
        	form_organoPolitico.css('display','block');
            regione_reg.css('display','none');
            jQuery('#provincia_reg').css('display','none');
			jQuery('#comune_reg').css('display','block');
        }
	});

    jQuery('input:radio[value="provincia"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'provincia')) {
            form_organoPolitico.css('display','block');
            regione_reg.css('display','none');
            jQuery('#comune_reg').css('display','none');
            jQuery('#provincia_reg').css('display','block');
        }
    });

    jQuery('input:radio[value="regione"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'regione')) {
            form_organoPolitico.css('display','block');
            regione_reg.css('display','block');
            jQuery('#comune_reg').css('display','none');
            jQuery('#provincia_reg').css('display','none');
        }
    });

    jQuery('input:radio[value="SI"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'SI')) {
			entePrincipale.css('display','block');
        }
    });

    jQuery('input:radio[value="NO"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'NO')) {
			entePrincipale.css('display','none');
        }
    });


    jQuery("#organoAppartenenza").change(function() {
        var valoreOrganoAppartenenza = jQuery('#organoAppartenenza :selected').text();
        if (valoreOrganoAppartenenza === 'Organi di Governo') {
            containerOrganoGoverno.css('display','block');
            containerpoliziaMunicipale.css('display','none');
            containerOrganoControllo.css('display','none');
            containerPersonaleAmministrativo.css('display','none');
        }else if (valoreOrganoAppartenenza === 'Personale Amministraivo') {
            containerOrganoGoverno.css('display','none');
            containerpoliziaMunicipale.css('display','none');
            containerOrganoControllo.css('display','none');
            containerPersonaleAmministrativo.css('display','block');
        }else if (valoreOrganoAppartenenza === 'Organi di Controllo') {
            containerOrganoGoverno.css('display','none');
            containerpoliziaMunicipale.css('display','none');
            containerOrganoControllo.css('display','block');
            containerPersonaleAmministrativo.css('display','none');
        }else if (valoreOrganoAppartenenza === 'Polizia Municipale') {
            containerOrganoGoverno.css('display','none');
            containerOrganoControllo.css('display','none');
            containerPersonaleAmministrativo.css('display','none');
            containerSettori.css('display','none');
            containerUffici.css('display','none');
            containerpoliziaMunicipale.css('display','block');
        }
        jQuery('#comune').attr("disabled", 'true');
        jQuery('#provincia').attr("disabled", 'true');
        jQuery('#regione').attr("disabled", 'true');
        form_organoPolitico.css('display','block');
        containerDomandeSicurezza.css('display','block');
        dati_privacy.css('display','block');
        salva.css('display','block');
    });



    //provincia
    jQuery("#organoAppartenenzaPr").change(function() {
        var orgAppartenenzaPr = jQuery('#organoAppartenenzaPr :selected').text();
        if (orgAppartenenzaPr === 'Organi di Governo') {
            containerOrganoGovernoProv.css('display','block');
        }else if (orgAppartenenzaPr === 'Organi di Controllo') {
            containerOrganoControlloPr.css('display','block');
            containerDomandeSicurezzaPr.css('display','block');
            dati_privacyPr.css('display','block');
            salva.css('display','block');
        }else if (orgAppartenenzaPr === 'Personale Amministraivo') {
            containerPersonaleAmministrativoPr.css('display','block');
            containerDomandeSicurezzaPr.css('display','block');
            dati_privacyPr.css('display','block');
            salva.css('display','block');
        }else if (orgAppartenenzaPr === 'Polizia Municipale') {
            containerpoliziaMunicipalePr.css('display','block');
            containerDomandeSicurezzaPr.css('display','block');
            dati_privacyPr.css('display','block');
            salva.css('display','block');
        }
        jQuery('#comune').attr("disabled", 'true');
        jQuery('#provincia').attr("disabled", 'true');
        jQuery('#regione').attr("disabled", 'true');

    });

    //regione
    jQuery("#organoAppartenenzaRg").change(function() {
        var organoGovernoRg = jQuery('#organoAppartenenzaRg :selected').text();
        if (organoGovernoRg === 'Organi di Governo') {
            containerOrganoGovernoReg.css('display','block');
            containerDelegheRg.css('display','block');
        }else if (organoGovernoRg === 'Personale Amministraivo') {
            containerPersonaleAmministrativoRg.css('display','block');
        }
        jQuery('#comune').attr("disabled", 'true');
        jQuery('#provincia').attr("disabled", 'true');
        jQuery('#regione').attr("disabled", 'true');
        containerDomandeSicurezzaRg.css('display','block');
        dati_privacyRg.css('display','block');
        salva.css('display','block');
    });



    //qualifica provincie
    jQuery("#organoGovernoPr").change(function() {
        var organoGovernoPr = jQuery('#organoGovernoPr :selected').text();
        if ((organoGovernoPr === 'Presidente') || (organoGovernoPr === 'Vice Presidente') || (organoGovernoPr === 'AssessorePr')) {
            containerDeleghePr.css('display','block');
            containerDomandeSicurezzaPr.css('display','block');
            dati_privacyPr.css('display','block');
            salva.css('display','block');
        }
    });

    jQuery('[name="sezOganoControllo"]').click(function() {
        if (jQuery(this).is(':checked')) {
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#personaleAmministrativo').attr("disabled", 'true');
        }
    });



    //inizio gestione uffici
    jQuery('[value="Responsabile Ufficio"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerUffici.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerSettori.css('display','none');
             //settoriSecondarigha.css('display','none');
             dati_privacy.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
             salva.css('display','block');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    jQuery('[value="Capo Ufficio"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerUffici.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerSettori.css('display','none');
             //settoriSecondarigha.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    jQuery('[value="Funzionario"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerUffici.css('display','block');
             containerDomandeSicurezza.css('display','block');
             //settoriSecondarigha.css('display','none');
             containerSettori.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    jQuery('[value="Dipendente del Comune"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerUffici.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerSettori.css('display','none');
             //settoriSecondarigha.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    //settori
    jQuery("#containerPersonaleAmministrativo").change(function() {
        var settori_uffici =  jQuery('#containerPersonaleAmministrativo :selected').parent().attr('id')
        if (settori_uffici === 'Settori') {
            containerSettori.css('display','block');
            containerUffici.css('display','none');
            containerPersonaleAmministrativo.css('display','block');
        }else if (settori_uffici === 'Uffici'){
            containerSettori.css('display','block');
            containerUffici.css('display','block');
            containerPersonaleAmministrativo.css('display','block');
        }else{
            containerSettori.css('display','none');
            containerUffici.css('display','none');
        }
        containerpoliziaMunicipale.css('display','none');
        containerDomandeSicurezza.css('display','block');
        dati_privacy.css('display','block');
        salva.css('display','block');
        jQuery('#organiGoverno').attr("disabled", 'true');
        jQuery('#organiControllo').attr("disabled", 'true');

    });

    //deleghe
    jQuery("#organoGoverno").change(function() {
        var organiGoverno = jQuery('#organoGoverno :selected').text();
        if ((organiGoverno === 'Sindaco') || (organiGoverno === 'Vicesindaco') || (organiGoverno === 'Assessore') || (organiGoverno === 'Assessore non di origine elettiva') || (organiGoverno === 'Delegato del Sindaco')) {
            containerDeleghe.css('display','block');
        }else{
            containerDeleghe.css('display','none');
        }
        containerDomandeSicurezza.css('display','block');
        dati_privacy.css('display','block');
        salva.css('display','block');
        jQuery('#personaleAmministrativo').attr("disabled", 'true');
        jQuery('#organiControllo').attr("disabled", 'true');
    });

    //dati azienda
        jQuery('input:radio[value="Azienda"]').change(function() {
	        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'Azienda')) {
	        	// jQuery('#dati_registrazioneIniziale').css('display','none');
	        	containerLiberoProfessionista.css('display','none');
	        	containerQuailificheMansioniBus.css('display','block');
	        }
		});

        jQuery('input:radio[value="Libero professionista"]').change(function() {
	        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'Libero professionista')) {
	        	// jQuery('#dati_registrazioneIniziale').css('display','none');
	        	containerLiberoProfessionista.css('display','block');
	        	containerQuailificheMansioniBus.css('display','none');
	        	containerDomandeSicurezza.css('display','block');
				dati_privacy.css('display','block');
				salva.css('display','block');
	        }
		});


	jQuery("#qulifiche").change(function() {
        var listaQualifica = jQuery('#qulifiche :selected').text();
		if (listaQualifica == 'Titolare') {
	            containerQualificheTitolareBus.css('display','block');
	            containerQualificheAltriBus.css('display','none');
	        }else{
		        containerQualificheAltriBus.css('display','block');
		        containerQualificheTitolareBus.css('display','none');

	        }
	        containercategoriaMerceologica.css('display','block');
    });

	jQuery("#selectcategoriaGenerica").change(function() {
        var listaCategoriaGenerica = jQuery('#selectcategoriaGenerica :selected').text();
		if (listaCategoriaGenerica == 'ABBIGLIAMENTO') {
				containerDimensioniAziendaSedeAzienda.css('display','block');
	            containerAbbigliamentoBus.css('display','block');
	            containerDomandeSicurezza.css('display','block');
				dati_privacy.css('display','block');
				salva.css('display','block');
	        }
	        jQuery("#qulifiche").prop('disabled', 'disabled');
	        jQuery('#associazione').attr("disabled", 'true');
	        jQuery('#Azienda').attr("disabled", 'true');
	        jQuery('#liberoProfessionista').attr("disabled", 'true');
    });



    jQuery("#comuneApp").autocomplete("../wp-content/themes/vantage/autocomplete.php", { selectFirst: true });


    jQuery('#mailIns').focusin(function() {

        //recupero variabile "discriminante"
        var comuneApp = jQuery("#comuneApp").val();

        //chiamata ajax
        var element = jQuery.ajax({
            type: "POST",
            url: "../wp-content/themes/vantage/mail.php",
            data: "mailAccount=" + comuneApp

        });
        jQuery("#mailComune").attr('value','@gmail.com');//stampa i risultati dentro la seconda select
        jQuery("#mailComuneConf").attr('value','@gmail.com');//stampa i risultati dentro la seconda select

    });

    jQuery('#ente').change(function() {
        var valEnte = jQuery( "#ente option:selected" ).text();
        if(valEnte === 'Ente Comune'){
            jQuery('#nomeEnte').css('display','block');
            jQuery('#comuneCapProvincia').css('display','block');
            jQuery('#comuneLitoraneo').css('display','block');
            jQuery('#comuneMontano').css('display','block');
            jQuery('#popolazione').css('display','block');
            jQuery('#ripartizioneGeo').css('display','block');
            jQuery('#zonaAltimetrica').css('display','block');
        }
    });

    jQuery('#ente').change(function() {
        var valEnte = jQuery( "#ente option:selected" ).text();
        if(valEnte === 'Ente Provincia'){
            jQuery('#nomeEnte').css('display','block');
            jQuery('#popolazione').css('display','block');
            jQuery('#ripartizioneGeo').css('display','block');
            jQuery('#zonaAltimetrica').css('display','block');
        }
    });

    jQuery('#ente').change(function() {
        var valEnte = jQuery( "#ente option:selected" ).text();
        if(valEnte === 'Ente Regione'){
            jQuery('#nomeEnte').css('display','block');
            jQuery('#ripartizioneGeo').css('display','block');
            jQuery('#popolazione').css('display','block');
        }
    });


    jQuery('#pubblicaAmministrazione').change(function() {
        var valUtente = jQuery( "#pubblicaAmministrazione option:selected" ).text();
        if(valUtente === 'Pubblica Amministrazione'){
            jQuery('#nomeUtente').css('display','block');
        }
    });


    jQuery("#apriImg").click( function(){
        if(ind === 0){
            jQuery("#areaGeografica").fadeIn("slow");
            ind =1;
        }else{
            jQuery("#areaGeografica").fadeOut(30);
            ind = 0;
        }
        });

    jQuery("#apriprovince").click( function(){
        if(indP === 0){
            jQuery("#provincia").fadeIn("slow");
            indP =1;
        }else{
            jQuery("#provincia").fadeOut(30);
            indP = 0;
        }
    });

    jQuery("#apriregione").click( function(){
        if(indR === 0){
            jQuery("#regioni").fadeIn("slow");
            indR =1;
        }else{
            jQuery("#regioni").fadeOut(30);
            indR = 0;
        }
    });

    jQuery("#apriqualifica").click( function(){
        if(indQ === 0){
            jQuery("#qualifiche").fadeIn("slow");
            indQ =1;
        }else{
            jQuery("#qualifiche").fadeOut(30);
            indQ = 0;
        }
    });

    jQuery("#apristruttura").click( function(){
        if(indS === 0){
            jQuery("#struttura").fadeIn("slow");
            indS =1;
        }else{
            jQuery("#struttura").fadeOut(30);
            indS = 0;
        }
    });

    jQuery("#aprisettore").click( function(){
        if(indSet === 0){
            jQuery("#strutturaSettoreProvincia").fadeIn("slow");
            indSet =1;
        }else{
            jQuery("#strutturaSettoreProvincia").fadeOut(30);
            indSet = 0;
        }
    });

});



