jQuery(document).ready(function(){

	jQuery.noConflict();

/* 	var dati_registrazioneIniziale = jQuery('#dati_registrazioneIniziale'); */
	var comune_reg = jQuery('#comune_reg');
	var dati_registazione = jQuery('#dati_registazione');
	var dati_tipologiaEnte = jQuery('#dati_tipologiaEnte');
	var dati_registrazioneIniziale = jQuery('#dati_organoPolitico');
	var procedi_registrazione = jQuery('#procedi_registrazione');
	var form_organoPolitico = jQuery('#form_organoPolitico');
    var containerPersonaleAmministrativo = jQuery('#containerPersonaleAmministrativo');
    var containerUffici = jQuery('#containerUffici');
    var containerSettori = jQuery('#containerSettori');
    var dati_privacy = jQuery('#dati_privacy');
    var settoriSecondarigha = jQuery('.settoriSecondaRigha');
    var containerDomandeSicurezza = jQuery('.containerDomandeSicurezza');
    var containerOrganoGoverno = jQuery('.containerOrganoGoverno');
    var containerDeleghe = jQuery('.containerDeleghe');
    var containerOrganoControllo = jQuery('.containerOrganoControllo');
	var containerQuailificheMansioniBus = jQuery('.containerQuailificheMansioniBus');
	var containerQualificheTitolareBus = jQuery('.containerQualificheTitolareBus');
	var containerQualificheAltriBus = jQuery('.containerQualificheAltriBus');
	var containercategoriaMerceologica = jQuery('.containercategoriaMerceologica');
	var containerAbbigliamentoBus = jQuery('.containerAbbigliamentoBus');
	var containerDimensioniAziendaSedeAzienda = jQuery('.containerDimensioniAziendaSedeAzienda');
	var entePrincipale = jQuery('.entePrincipale');
	var containerLiberoProfessionista = jQuery('.containerLiberoProfessionista');

	var salva = jQuery('#salvaButton');

	var dati_personaleDipendente = jQuery('#dati_personaleDipendente');
	var dati_organoPolitico = jQuery('#dati_organoPolitico');

	comune_reg.css('display','none');
	dati_registazione.css('display','none');
	dati_tipologiaEnte.css('display','none');
	salva.css('display','none');
	//form_organoPolitico.css('display','none');
	dati_personaleDipendente.css('display','none');
	dati_organoPolitico.css('display','none');
    containerPersonaleAmministrativo.css('display','none');
    containerUffici.css('display','none');
	containerSettori.css('display','none');
	dati_privacy.css('display','none');
	settoriSecondarigha.css('display','none');
	containerDomandeSicurezza.css('display','none');
	containerOrganoGoverno.css('display','none');
	containerDeleghe.css('display','none');
	containerOrganoControllo.css('display','none');
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
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'comune')) {
        	// jQuery('#dati_registrazioneIniziale').css('display','none');
        	form_organoPolitico.css('display','block');
			jQuery('#comune_reg').css('display','block');
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

    jQuery('input:radio[value="comune"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'comune')) {
        	// jQuery('#dati_registrazioneIniziale').css('display','none');
        	form_organoPolitico.css('display','block');
			jQuery('#comune_reg').css('display','block');
        }
	});


	//ATTIVO LA SEZIONE Organi di Governo
    jQuery('input:radio[value="Organi di Governo"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'Organi di Governo')) {
            containerOrganoGoverno.css('display','block');
            form_organoPolitico.css('display','block');
            containerOrganoControllo.css('display','none');
            containerPersonaleAmministrativo.css('display','none');
            containerDomandeSicurezza.css('display','none');
            dati_privacy.css('display','none');
            salva.css('display','none');
        }
    });

	//ATTIVO LA SEZIONE Organo di Controllo
    jQuery('input:radio[value="Organi di Controllo"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'Organi di Controllo')) {
            containerOrganoGoverno.css('display','none');
            form_organoPolitico.css('display','block');
            containerOrganoControllo.css('display','block');
            containerDomandeSicurezza.css('display','block');
            dati_privacy.css('display','block');
            salva.css('display','block');
            containerPersonaleAmministrativo.css('display','none');
        }
    });

    jQuery('input:radio[value="Personale Amministraivo"]').change(function() {
        if ((jQuery(this).is(':checked')) && (jQuery(this).val() == 'Personale Amministraivo')) {
            containerOrganoGoverno.css('display','none');
            form_organoPolitico.css('display','block');
            containerOrganoControllo.css('display','none');
            containerDomandeSicurezza.css('display','none');
            dati_privacy.css('display','none');
            salva.css('display','none');
            containerPersonaleAmministrativo.css('display','block');
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
             settoriSecondarigha.css('display','none');
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
             settoriSecondarigha.css('display','none');
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
             settoriSecondarigha.css('display','none');
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
             settoriSecondarigha.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    //settori
    jQuery('[value="Presidente"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerSettori.css('display','block');
             settoriSecondarigha.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerUffici.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    jQuery('[value="Direttore Generale"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerSettori.css('display','block');
             settoriSecondarigha.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerUffici.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    jQuery('[value="Responsabile del Settore"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerSettori.css('display','block');
             settoriSecondarigha.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerUffici.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    jQuery('[value="Dirigente del Settore"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerSettori.css('display','block');
             settoriSecondarigha.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerUffici.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    jQuery('[value="Segretario Generale"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerSettori.css('display','block');
             settoriSecondarigha.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerUffici.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    jQuery('[value="Capo Servizio"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerSettori.css('display','block');
             settoriSecondarigha.css('display','block');
             containerDomandeSicurezza.css('display','block');
             containerUffici.css('display','none');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#organiGoverno').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
            containerPersonaleAmministrativo.css('display','block');
        }
    });

    //deleghe
    jQuery('[value="Sindaco"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerDeleghe.css('display','block');
             containerDomandeSicurezza.css('display','block');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#personaleAmministrativo').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
        }
    });

    jQuery('[value="Vicesindaco"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerDeleghe.css('display','block');
             containerDomandeSicurezza.css('display','block');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#personaleAmministrativo').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
        }
    });

    jQuery('[value="Assessore"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerDeleghe.css('display','block');
             containerDomandeSicurezza.css('display','block');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#personaleAmministrativo').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
        }
    });

    jQuery('[value="Assessore non di origine elettiva"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerDeleghe.css('display','block');
             containerDomandeSicurezza.css('display','block');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#personaleAmministrativo').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
        }
    });

    jQuery('[value="Capogruppo di maggioranza"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerDeleghe.css('display','block');
             containerDomandeSicurezza.css('display','block');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#personaleAmministrativo').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
        }
    });

    jQuery('[value="Capogruppo di minoranza"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerDeleghe.css('display','block');
             containerDomandeSicurezza.css('display','block');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#personaleAmministrativo').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
        }
    });

    jQuery('[value="Consigliere"]').click(function() {
        if (jQuery(this).is(':checked')) {
             containerDeleghe.css('display','block');
             containerDomandeSicurezza.css('display','block');
             dati_privacy.css('display','block');
             salva.css('display','block');
             jQuery('#personaleAmministrativo').attr("disabled", 'true');
             jQuery('#organiControllo').attr("disabled", 'true');
        }
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

});



