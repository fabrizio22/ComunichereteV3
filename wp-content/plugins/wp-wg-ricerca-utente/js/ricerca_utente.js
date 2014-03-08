
ind = 0;
indP = 0;
indQ = 0;
indR = 0;
indS = 0;
indSet = 0;
indUffGov =0;

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