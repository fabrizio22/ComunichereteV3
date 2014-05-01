    jQuery(document).ready(function(){

        jQuery.noConflict();
    //    sezione per il wg ricerca

            ind = 0;
            indP = 0;
            indQ = 0;
            indR = 0;
            indS = 0;
            indSet = 0;
            indUffGov = 0;
            indSUD = 0;
            indGeo = 0;
            indDel = 0;
            indReg = 0;
            indDelFiltro = 0;
            indPr = 0;
            indContFiltri = 0;
            indUffPM = 0;
            indSett = 0;
            indNuc = 0;

            jQuery("#ente").change(function() {
                var valoreOrganoAppartenenza = jQuery('#organoAppartenenza :selected').text();
                if (valoreOrganoAppartenenza === 'Organi di Governo') {
                    containerOrganoGoverno.css('display','block');
                    containerpoliziaMunicipale.css('display','none');
                    containerOrganoControllo.css('display','none');
                    containerPersonaleAmministrativo.css('display','none');
                }
            });

            jQuery('#ente').change(function() {
                var valEnte = jQuery( "#ente option:selected" ).text();
                if(valEnte === 'Ente Comune'){
                    jQuery('#nomeEnte').css('display','block');
                    jQuery('#popolazione').css('display','block');
                    jQuery('#ripartizioneGeo').css('display','block');
                    jQuery('#opzioniGeografiche').css('display','block');
                }
            });

            jQuery('#ente').change(function() {
                var valEnte = jQuery( "#ente option:selected" ).text();
                if(valEnte === 'Ente Provincia'){
                    jQuery('#nomeEnte').css('display','block');
                    jQuery('#popolazione').css('display','block');
                    jQuery('#ripartizioneGeo').css('display','block');
                    jQuery('#opzioniGeografiche').css('display','none');
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

            jQuery("#aprideleghe").click( function(){
                if(indD === 0){
                    jQuery("#deleghe").fadeIn("slow");
                    indD =1;
                }else{
                    jQuery("#deleghe").fadeOut(30);
                    indD = 0;
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

            jQuery("#contenitoreSelectQulifica").click( function(){
                if(indQ === 0){
                    jQuery("#cm_apriQualificaRicerca").fadeIn("slow");
                    jQuery('#footerComboQual').css('display','block');
                    indQ =1;
                }else{
                    jQuery("#cm_apriQualificaRicerca").fadeOut(30);
                    jQuery('#footerComboQual').css('display','none');
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

            jQuery(".entry-header").addClass('Wrentry-title');

                jQuery('#pubblicaAmministrazioneRicerca').click(function(){
                    var el1 =  jQuery('#pubblicaAmministrazioneRicerca option:selected').text();
                    if (el1 === 'Ente Comune'){
                        jQuery('#labelRicercaDel').removeClass('intestazioneDisableDel');
                        jQuery('#labelRicercaUff').addClass('intestazioneDisableUff');
                        jQuery('#comuneMontano').attr('disabled');
                        jQuery('#nazione').removeAttr('disabled');
                        jQuery('#qulifica').removeClass('disabilitato');
                        //var elem = jQuery(this).val();
                        var elem = '1';
                        jQuery.ajax({
                            url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/query_qualifiche.php",
                            type: 'POST',
                            data: {'qualificaVal':elem},
                            dataType: "html",
                            success: function(msg)
                            {
                                jQuery("#label_qualifica").html(msg);
                            },
                            error: function()
                            {
                                alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                            }
                        });
                    }else if (el1 === 'Ente Provincia'){
                        jQuery("#nazione").prop('disabled', true);
                        jQuery("#comuneMontano").prop('disabled', false);
                        jQuery("#labelRicercaUff").removeClass("intestazioneDisableUff");
                        jQuery("#labelRicercaDel").addClass("intestazioneDisableDel");
                        var elem = '2';
                        jQuery.ajax({
                            url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/query_qualifiche.php",
                            type: 'POST',
                            data: {'qualificaVal':elem},
                            dataType: "html",
                            success: function(msg)
                            {
                                jQuery("#qualifiche").html(msg);
                            },
                            error: function()
                            {
                                alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                            }
                        });
                    }else if (el1 === 'Ente Regione'){
                        jQuery("#nazione").prop('disabled', true);
                        jQuery("#comuneMontano").prop('disabled', false);
                        jQuery("#labelRicercaUff").removeClass("intestazioneDisableUff");
                        jQuery("#labelRicercaDel").addClass("intestazioneDisableDel");
                        var elem = '3';
                        jQuery.ajax({
                            url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/query_qualifiche.php",
                            type: 'POST',
                            data: {'qualificaVal':elem},
                            dataType: "html",
                            success: function(msg)
                            {
                                jQuery("#qualifiche").html(msg);
                            },
                            error: function()
                            {
                                alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                            }
                        });
                    }

                    jQuery("#cercaEnte").prop('disabled', false);
                    jQuery(".intestazione").removeClass("disabilitato");
                });




                jQuery('#cercaEnte').change(function() {
                    var $check = jQuery(this);
                    if ($check.prop('checked')) {
                        var data = jQuery('#pubblicaAmministrazioneRicerca').val();
                        //var arr = data.split(' ');
                        jQuery('#nomeEnte').html(data).css('display','block');
                        jQuery('#zonaGeografica_Regione').addClass('disabilitato');
                        jQuery('#zonaGeografica_Provincia').addClass('disabilitato');
                        jQuery('#zonaGeografica_Comune').addClass('disabilitato');
                        jQuery('#pubblicaAmministrazioneRicerca').val();
                        jQuery('#avviaRicerca').removeClass('disabilitato');
                        jQuery('#inputNomeEnte').css('display','block');
                        jQuery('#inputNomeEnte').removeAttr('disabled');
                    } else {
                        jQuery('#avviaRicerca').addClass('disabilitato');
                        jQuery('#zonaGeografica_Regione').removeClass('disabilitato');
                        jQuery('#zonaGeografica_Provincia').removeClass('disabilitato');
                        jQuery('#zonaGeografica_Comune').removeClass('disabilitato');
                        jQuery('#inputNomeEnte').css('display','none');
                        jQuery('#nomeEnte').css('display','none');
                    }
                });


                //se seleziono una qualifica come elementi li
                jQuery('#confermaFiltriQual').click(function() {
                    var elem = jQuery('[name="qualifiche[]"]:checked').val();
                    //alert($(this).val());
                    jQuery('#zonaGeografica_regione').removeClass('disabilitato');
                    jQuery('#cm_apriQualificaRicerca').css('display','block');
//                    jQuery('#footerCombo').css('display','block');
                    jQuery('#selectComplessaRegRicerca').removeClass('disabilitato');
                    jQuery("#linkZonaGeografica").removeClass("disabilitato").removeAttr("onclick");
                    var elem = '';
                    jQuery.ajax({
                        url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/localizzazione.php",
                        type: 'POST',
                        data: {'localizzazione':elem},
                        dataType: "html",
                        success: function(msg)
                        {
                            //jQuery("#zonaGeografica_regione").html(msg);
                            jQuery("#label_reg").html(msg);
                        },
                        error: function()
                        {
                            alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                        }
                    });

                    jQuery('#divLinkSelectEvolutaQual').html(elem+" .....");
                });

                    jQuery( "#divLinkSelectEvolutaReg" ).click(function() {
                        if(indReg === 0){
                            jQuery("#cm_apriRegioniRicerca").fadeIn(1);
                            jQuery("#cm_apriProvinciaRicerca").fadeOut(30);
                            jQuery("#cm_apriComuneRicerca").fadeOut(30);
                            jQuery('#avviaRicerca').removeClass('disabilitato');
                            jQuery('#footerCombo').css('display','none');
                            indReg = 1;
                        }else{
                            jQuery("#cm_apriRegioniRicerca").fadeOut(30);
                            indReg = 0;
                        }
                    });

                    jQuery( "#divLinkSelectEvolutaProv" ).click(function() {
                        if(indPr === 0){
                            jQuery("#cm_apriProvinciaRicerca").fadeIn(1);
                            jQuery("#cm_apriRegioniRicerca").fadeOut(30);
                            jQuery("#cm_apriComuneRicerca").fadeOut(30);
                            jQuery('#footerCombo').css('display','none');
                            indPr = 1;
                        }else{
                            jQuery("#cm_apriProvinciaRicerca").fadeOut(30);
                            indPr = 0;
                        }
                    });

                    jQuery( "#divLinkSelectEvolutaCom" ).click(function() {
                        if(indPr === 0){
                            jQuery("#cm_apriComuneRicerca").fadeIn(1);
                            jQuery("#cm_apriProvinciaRicerca").fadeOut(30);
                            jQuery("#cm_apriRegioniRicerca").fadeOut(30);
                            jQuery('#footerCombo').css('display','block');
                            indPr = 1;
                        }else{
                            jQuery("#cm_apriComuneRicerca").fadeOut(30);
                            var elem = jQuery('[name="comune[]"]:checked').val();

//                            var selected = [];
//                            jQuery('[name="comune[]"]:checked').each(function() {
//                                selected.push(jQuery('[name="comune[]"]:checked').val());
//                                //selected.push('; ');
//                            });

                            jQuery('#divLinkSelectEvolutaCom').html(elem+" .....");
                            jQuery('#footerCombo').css('display','none');
                            indPr = 0;
                        }
                    });

                    jQuery( "#confermaFiltriQual" ).click(function() {
                        jQuery("#cm_apriQualificaRicerca").fadeOut(30);
                        jQuery('#footerComboQual').css('display','none');
                        var elem = jQuery('[name="qualifiche[]"]:checked').val();
                        jQuery('#divLinkSelectEvolutaQual').html(elem+" .....");
                        indPr = 0;
                    });

                    jQuery( "#confermaFiltri" ).click(function() {
                        jQuery("#cm_apriComuneRicerca").fadeOut(30);
                        jQuery('#footerCombo').css('display','none');
                        var elem = jQuery('[name="comune[]"]:checked').val();
                        jQuery('#divLinkSelectEvolutaCom').html(elem+" .....");
                        indPr = 0;
                    });

                jQuery( "#affinaRicercaFiltro" ).click(function() {
                    if(indDelFiltro === 0){
                        jQuery("#cm_deleghe").css('display','block');
                        jQuery("#cm_apriDelegheGov").css('display','block');
                        jQuery('#footerComboFiltro').css('display','block');
                        indDelFiltro = 1;
                    }else{
                        jQuery("#cm_apriDelegheGov").fadeOut(30);
                        jQuery('#footerComboFiltro').css('display','none');
                        indDelFiltro = 0;
                    }
                });


                jQuery('#label_reg').click(function(){
                    jQuery('#selectComplessaProvRicerca').removeClass('disabilitato');
                    //var elem = jQuery('#regione_label').text();
                    var elem = jQuery('[name="regione"]:checked').val();
                    jQuery('#divLinkSelectEvolutaProv').html('Provincia');
                    jQuery('#divLinkSelectEvolutaCom').html('Comune');
                    //alert(elem);
                        jQuery.ajax({
                            url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/localizzazione.php",
                            type: 'POST',
                            data: {'localizzazione_prov':elem},
                            dataType: "html",
                            success: function(msg)
                            {
                                jQuery("#label_pro").html(msg);
                            },
                            error: function()
                            {
                                alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                            }
                        });
                    jQuery("#cm_apriRegioniRicerca").fadeOut(30);
                    indReg = 0;
                    jQuery('#divLinkSelectEvolutaReg').html(jQuery('[name="regione"]:checked').val());
                    jQuery('#valoreSelectReg').val(jQuery('[name="regione"]:checked').val());
                });

                jQuery('#label_pro').click(function(){
                    jQuery('#selectComplessaComRicerca').removeClass('disabilitato');
                    var elem = jQuery('[name="provincia"]:checked').val();
                    jQuery('#divLinkSelectEvolutaCom').html('Comune');
                    //alert(elem);
                    jQuery.ajax({
                        url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/localizzazione.php",
                        type: 'POST',
                        data: {'localizzazione_com':elem},
                        dataType: "html",
                        success: function(msg)
                        {
                            jQuery("#label_com").html(msg);
                        },
                        error: function()
                        {
                            alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                        }
                    });
                    jQuery('#cm_apriProvinciaRicerca').css('display','none');
                    indPr = 0;
                    jQuery('#divLinkSelectEvolutaProv').html(elem);
                    jQuery('#valoreSelectProv').val(elem);
                });



    });