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
    //$wpdb->prepare("select DISTINCT voce_qualifiche,titolo_qualifiche,nome_ente,numero_filtri from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
        $wpdb->prepare("select DISTINCT denominazione_regione from wp_elenco_comuni_istat", ARRAY_A));

    echo "<option>Scegli Regione</option>";

    foreach($localizzazione_regione as $chiave => $valore)
    {
        $regione = $valore -> denominazione_regione;

        echo "<div class='label-container'><option value='regione'>$regione</option></div>";
    }
}

if(isset($localizzazione_prov)){

    $localizzazione_provincia = $wpdb->get_results(
    //$wpdb->prepare("select DISTINCT voce_qualifiche,titolo_qualifiche,nome_ente,numero_filtri from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
        $wpdb->prepare("select DISTINCT denominazione_provincia from wp_elenco_comuni_istat WHERE denominazione_regione = %s",$localizzazione_prov ,ARRAY_A)
    );

    echo "<option>Scegli Provincia</option>";

    foreach($localizzazione_provincia as $chiave => $valore)
    {
        $provincia = $valore -> denominazione_provincia;

        echo "<option value='provincia'>$provincia</option>";
    }
}

if(isset($localizzazione_com)){

    $localizzazione_comune = $wpdb->get_results(
    //$wpdb->prepare("select DISTINCT voce_qualifiche,titolo_qualifiche,nome_ente,numero_filtri from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
        $wpdb->prepare("select DISTINCT denominazione_italiano from wp_elenco_comuni_istat WHERE denominazione_provincia = %s",$localizzazione_com ,ARRAY_A)
    );

    echo "<option>Scegli un Comune</option>";

    foreach($localizzazione_comune as $chiave => $valore)
    {
        $comune = $valore -> denominazione_italiano;

        echo "<option value='$comune'>$comune</option>";
    }
}

?>