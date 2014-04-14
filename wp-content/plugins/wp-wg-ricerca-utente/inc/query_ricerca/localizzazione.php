<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 31/03/14
 * Time: 16:42
 */

global $wpdb;
require( '../../../../../wp-load.php' );

$localizzazione = $_POST['localizzazione'];
$localizzazione_prov = $_POST['localizzazione_prov'];
$localizzazione_com = $_POST['localizzazione_com'];

if(isset($localizzazione)){

    $localizzazione_regione = $wpdb->get_results(
    $wpdb->prepare("select DISTINCT denominazione_regione from wp_elenco_comuni_istat", ARRAY_A));

    foreach($localizzazione_regione as $chiave => $valore)
    {
        $regione_val = $valore -> denominazione_regione;

        $vowels = array("*");
        $regione = str_replace($vowels, "'", $regione_val);

        echo "<li id='facet-value' class='facet-value'>";
        echo "<label id='regione_label' class='facet-label'>$regione</label>";
        echo "</li>";
    }

}

if(isset($localizzazione_prov)){


    $vowels = array("\'");
    $localizzazione_prov_val = str_replace($vowels, "*", $localizzazione_prov);

    $localizzazione_provincia = $wpdb->get_results(
    //$wpdb->prepare("select DISTINCT voce_qualifiche,titolo_qualifiche,nome_ente,numero_filtri from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
        $wpdb->prepare("select DISTINCT denominazione_provincia from wp_elenco_comuni_istat WHERE denominazione_regione = %s",trim($localizzazione_prov_val) ,ARRAY_A)
    );

    foreach($localizzazione_provincia as $chiave => $valore)
    {
        $provincia_val = $valore -> denominazione_provincia;

        $vowels = array("*");
        $provincia = str_replace($vowels, "'", $provincia_val);
        echo "<li id='facet-value' class='facet-value'>";
        echo "<label id='provincia_labl' class='facet-label'>$provincia</label>";
        echo "</li>";

    }
}

if(isset($localizzazione_com)){

    $vowels = array("\'");
    $localizzazione_com_val = str_replace($vowels, "*", $localizzazione_com);

    $localizzazione_comune = $wpdb->get_results(
    //$wpdb->prepare("select DISTINCT voce_qualifiche,titolo_qualifiche,nome_ente,numero_filtri from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
        $wpdb->prepare("select DISTINCT denominazione_italiano from wp_elenco_comuni_istat WHERE denominazione_provincia = %s",trim($localizzazione_com_val) ,ARRAY_A)
    );
    foreach($localizzazione_comune as $chiave => $valore)
    {
        $comune_val = $valore -> denominazione_italiano;

        $vowels = array("*");
        $comune = str_replace($vowels, "'", $comune_val);

        echo "<li class='facet-value'><input class='comuneR' type='checkbox' name='comune[]' value='$comune' />";
        echo "<label id='comune_labl' class='facet-label'>$comune</label>";
        echo "</li>";
    }
}

?>