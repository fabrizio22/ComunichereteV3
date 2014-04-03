    jQuery(document).ready(function(){

        jQuery.noConflict();
    //    sezione per il wg ricerca

            ind = 0;
            indP = 0;
            indQ = 0;
            indR = 0;
            indS = 0;
            indSet = 0;
            indUffGov =0;
            indSUD = 0;
            indGeo = 0;
            indDel = 0;
            indUff = 0;
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

            jQuery(".entry-header").addClass('Wrentry-title');


            //    jQuery("#pubblicaAmministrazioneRicerca").click(function(){
            //        var el = jQuery("#qualificheProvincie");
            //        if (el){
            //            el.prop('disabled', false);
            //            jQuery("#labelRicerca").removeClass('intestazioneDisable');
            //            if (this.checked){
            //                el.attr("disabled", "disabled");
            //            }
            //        }
            //    });
            //
                jQuery('#pubblicaAmministrazioneRicerca').click(function(){
                    var el1 =  jQuery('#pubblicaAmministrazioneRicerca option:selected').text();
                    if (el1 === 'Ente Comune'){
                        jQuery('#labelRicercaDel').removeClass('intestazioneDisableDel');
                        jQuery('#labelRicercaUff').addClass('intestazioneDisableUff');
                        jQuery('#comuneMontano').attr('disabled');
                        jQuery('#nazione').removeAttr('disabled');
                        jQuery('#qualifiche').removeAttr('disabled');
                        //var elem = jQuery(this).val();
                        var elem = '1';
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

                jQuery("#cercaEnte").click(function() {
                    if( jQuery(this).is(':checked') ) {
                        jQuery("#inputNomeEnte").prop('disabled', false);
                    }else{
                        jQuery("#inputNomeEnte").prop('disabled', true);
                    }

                });


//                jQuery('#qualifiche').change(function() {
//                    var qualifica =  jQuery( "#qualifiche option:selected" ).val();
//                    if (qualifica === 'organi politico amministrativi-comune'){
//
//                                jQuery("#linkDelegheAreeSettoriUffici").removeClass("disabilitato").removeAttr("onclick");
//                                jQuery("#linkZonaGeografica").removeClass("disabilitato").removeAttr("onclick");
//
//                                jQuery("#CMdeleghe").css('display','block');
//                                jQuery("#notifiche1").css('display','block');
//
//                                jQuery("#CMUfficiSettori").css('display','none');
//                                jQuery("#CMPoliziaMunicipale").css('display','none');
//                                jQuery("#divDelegheAreeSettoriUffici").css('display','none');
//
//                    }else if (qualifica === 'Organi di Assistenza e Controllo-comune'){
//
//                                jQuery("#divDelegheAreeSettoriUffici").css('display','none');
//                                jQuery("#CMUfficiSettori").css('display','none');
//                                jQuery("#CMdeleghe").css('display','none');
//                                jQuery("#CMPoliziaMunicipale").css('display','none');
//                                jQuery("#notifiche1").css('display','none');
//
//                    }else if (qualifica === 'Personale Dirigente e Amministrativo-comune'){
//                                jQuery("#linkDelegheAreeSettoriUffici").removeClass("disabilitato").removeAttr("onclick");
//                                jQuery("#linkZonaGeografica").removeClass("disabilitato").removeAttr("onclick");
//
//                                jQuery("#divDelegheAreeSettoriUffici").css('display','none');
//                                jQuery("#CMdeleghe").css('display','none');
//                                jQuery("#CMPoliziaMunicipale").css('display','none');
//
//                                jQuery("#CMUfficiSettori").css('display','block');
//                                jQuery("#notifiche1").css('display','block');
//
//
//                    }else if (qualifica === 'Polizia Municipale-comune'){
//
//                                jQuery("#linkDelegheAreeSettoriUffici").removeClass("disabilitato").removeAttr("onclick");
//                                jQuery("#linkZonaGeografica").removeClass("disabilitato").removeAttr("onclick");
//
//                                jQuery("#divDelegheAreeSettoriUffici").css('display','none');
//                                jQuery("#CMUfficiSettori").css('display','none');
//                                jQuery("#CMdeleghe").css('display','none');
//
//                                jQuery("#CMPoliziaMunicipale").css('display','block');
//                                jQuery("#notifiche1").css('display','block');
//                    }
//
//                });

//                jQuery("#linkDelegheAreeSettoriUffici").click( function(){
//                   // jQuery("#CMdeleghe").css('display','block !important');
//                    if(indSUD === 0){
//                        jQuery("#divDelegheAreeSettoriUffici").fadeIn("slow");
//                        jQuery("#notifiche1").css('display','none');
//                        indSUD =1;
//                    }else{
//                        jQuery("#divDelegheAreeSettoriUffici").fadeOut(30);
//                        jQuery("#notifiche1").css('display','block');
//                        indSUD = 0;
//                    }
//                });


                jQuery('#qualifiche').change(function() {
                    jQuery('#zonaGeografica_regione').removeAttr('disabled');
                    jQuery("#linkZonaGeografica").removeClass("disabilitato").removeAttr("onclick");
                    var elem = '';
                    jQuery.ajax({
                        url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/localizzazione.php",
                        type: 'POST',
                        data: {'localizzazione':elem},
                        dataType: "html",
                        success: function(msg)
                        {
                            jQuery("#zonaGeografica_regione").html(msg);
                        },
                        error: function()
                        {
                            alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                        }
                    });
                });


//                jQuery("#linkZonaGeografica").click( function(){
//                    jQuery("#divZonaGeografica").css('display','block');
//                    var elem = '';
//                    jQuery.ajax({
//                        url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/localizzazione.php",
//                        type: 'POST',
//                        data: {'localizzazione':elem},
//                        dataType: "html",
//                        success: function(msg)
//                        {
//                            jQuery("#zonaGeografica_regione").html(msg);
//                        },
//                        error: function()
//                        {
//                            alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
//                        }
//                    });
//                    if(indGeo === 0){
//                        jQuery("#divZonaGeografica").fadeIn("slow");
//                        indGeo =1;
//                    }else{
//                        jQuery("#divZonaGeografica").fadeOut(30);
//                        indGeo = 0;
//                    }
//                });

                jQuery("#zonaGeografica_regione").click( function(){
                    jQuery('#zonaGeografica_provincia').removeAttr('disabled');
                    jQuery('#avviaRicerca').removeClass('disabilitato');
                    var el1 =  jQuery('#zonaGeografica_regione option:selected').val();
                    var elemento =  jQuery('#zonaGeografica_regione option:selected').text();
                    if (el1 === 'regione'){
                        var elem = elemento;
                        jQuery.ajax({
                            url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/localizzazione.php",
                            type: 'POST',
                            data: {'localizzazione_prov':elem},
                            dataType: "html",
                            success: function(msg)
                            {
                                jQuery("#zonaGeografica_provincia").html(msg);
                            },
                            error: function()
                            {
                                alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                            }
                        });
                    }
                });

                jQuery("#zonaGeografica_provincia").click( function(){
                    jQuery('#zonaGeografica_comune').removeAttr('disabled');
                    var el1 =  jQuery('#zonaGeografica_provincia option:selected').val();
                    var elemento =  jQuery('#zonaGeografica_provincia option:selected').text();
                    if (el1 === 'provincia'){
                        var elem = elemento;
                        jQuery.ajax({
                            url:"../wp-content/plugins/wp-wg-ricerca-utente/inc/query_ricerca/localizzazione.php",
                            type: 'POST',
                            data: {'localizzazione_com':elem},
                            dataType: "html",
                            success: function(msg)
                            {
                                jQuery("#zonaGeografica_comune").html(msg);
                            },
                            error: function()
                            {
                                alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                            }
                        });
                    }


                });



//                jQuery("#selectComplessa").click( function(){
//                    if(indDel === 0){
//                        jQuery("#cm_deleghe").fadeIn("slow");
//                        indDel =1;
//                    }else{
//                        jQuery("#cm_deleghe").fadeOut(30);
//                        indDel = 0;
//                    }
//                });

//                jQuery("#selectComplessaUffici").click( function(){
//                    if(indUff === 0){
//                        jQuery("#cm_uffici").fadeIn("slow");
//                        indUff =1;
//                    }else{
//                        jQuery("#cm_uffici").fadeOut(30);
//                        indUff = 0;
//                    }
//                });

//                jQuery("#selectComplessaUfficiPM").click( function(){
//                    if(indUffPM === 0){
//                        jQuery("#cm_ufficiPM").fadeIn("slow");
//                        indUffPM =1;
//                    }else{
//                        jQuery("#cm_ufficiPM").fadeOut(30);
//                        indUffPM = 0;
//                    }
//                });
//
//                jQuery("#selectComplessaSettori").click( function(){
//                    if(indSett === 0){
//                        jQuery("#cm_settori").fadeIn("slow");
//                        indSett =1;
//                    }else{
//                        jQuery("#cm_settori").fadeOut(30);
//                        indSett = 0;
//                    }
//                });
//
//                jQuery("#selectComplessaNuclei").click( function(){
//                    if(indNuc === 0){
//                        jQuery("#cm_nuclei").fadeIn("slow");
//                        indNuc =1;
//                    }else{
//                        jQuery("#cm_nuclei").fadeOut(30);
//                        indNuc = 0;
//                    }
//                });



                 jQuery('#cercaEnte').change(function() {

                    var $check = jQuery(this);
                    if ($check.prop('checked')) {
                        jQuery('#avviaRicerca').removeClass('disabilitato');
                        jQuery('#inputNomeEnte').css('display','block');
                    } else {
                        jQuery('#avviaRicerca').addClass('disabilitato');
                        jQuery('#inputNomeEnte').css('display','none');
                    }

                 });


    });