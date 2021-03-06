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
    $wpdb->prepare("select DISTINCT denominazione_regione from wp_elenco_comuni_istat ORDER BY denominazione_regione ASC", ARRAY_A));

    foreach($localizzazione_regione as $chiave => $valore)
    {
        $regione_val = $valore -> denominazione_regione;

        $vowels = array("*");
        $regione = str_replace($vowels, "'", $regione_val);

        echo "<li id='facet-value' class='facet-valueR'><input id='regione' class='regioneR' type='radio' name='regione' value=\"$regione\" />";
        echo "<label id='regione_label' class='facet-labelR'>$regione</label>";
        echo "</li>";
    }

}

if(isset($localizzazione_prov)){


    $vowels = array("\'");
    $localizzazione_prov_val = str_replace($vowels, "*", $localizzazione_prov);

    $localizzazione_provincia = $wpdb->get_results(
    //$wpdb->prepare("select DISTINCT voce_qualifiche,titolo_qualifiche,nome_ente,numero_filtri from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
        $wpdb->prepare("select DISTINCT denominazione_provincia from wp_elenco_comuni_istat WHERE denominazione_regione = %s ORDER BY denominazione_provincia ASC",trim($localizzazione_prov_val) ,ARRAY_A)
    );

    foreach($localizzazione_provincia as $chiave => $valore)
    {
        $provincia_val = $valore -> denominazione_provincia;

        $vowels = array("*");
        $provincia = str_replace($vowels, "'", $provincia_val);
        echo "<li id='facet-value' class='facet-valueR'><input id='provincia' class='provinciaR' type='radio' name='provincia' value=\"$provincia\" />";
        echo "<label id='provincia_labl' class='facet-labelR'>$provincia</label>";
        echo "</li>";

    }
}

if(isset($localizzazione_com)){

    $vowels = array("\'");
    $localizzazione_com_val = str_replace($vowels, "*", $localizzazione_com);

    $localizzazione_comune = $wpdb->get_results(
    //$wpdb->prepare("select DISTINCT voce_qualifiche,titolo_qualifiche,nome_ente,numero_filtri from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
        $wpdb->prepare("select DISTINCT denominazione_comune_italiano from wp_elenco_comuni_istat WHERE denominazione_provincia = %s ORDER BY denominazione_comune_italiano ASC",trim($localizzazione_com_val) ,ARRAY_A)
    );
    foreach($localizzazione_comune as $chiave => $valore)
    {
        $comune_val = $valore -> denominazione_comune_italiano;

        $vowels = array("*");
        $comune = str_replace($vowels, "'", $comune_val);

        echo "<li class='facet-valueR'><input class='comuneR' type='checkbox' name='comune[]' value=\"$comune\" />";
        echo "<label id='comune_labl' class='facet-labelR'>$comune</label>";
        echo "</li>";
    }
}

?>