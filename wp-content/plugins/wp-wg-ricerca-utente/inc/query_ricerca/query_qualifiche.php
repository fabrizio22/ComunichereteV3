<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 16/03/14
 * Time: 12:29
 */
global $wpdb;
require( '../../../../../wp-load.php' );

/**
 * carico i valori della qualifica asseconda della selezione della regione.
 */
$qualificaVal = $_POST['qualificaVal'];

if(isset($qualificaVal)){

    $qualifiche = $wpdb->get_results(
        //$wpdb->prepare("select DISTINCT voce_qualifiche,titolo_qualifiche,nome_ente,numero_filtri from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
        $wpdb->prepare("select DISTINCT * from wp_cm_qualifiche WHERE id_ente = %s",$qualificaVal , ARRAY_A)
    );


    echo "<div class='ContentOptQualifiche'>";
    //echo "<div class='optGroupQualifiche2'>$qualifiche -> tipologia_qualifica";
    foreach($qualifiche as $chiave => $valore)
    {
        $voce_qualifiche = $valore -> voce_qualifiche;
        $tipologia_qualifica = $valore -> tipologia_qualifica;
        $nome_ente = $valore -> nome_ente;
        $titolo_qualifica_nome_ente = $tipologia_qualifica."-".$nome_ente;
        $numero_filtri = $valore -> numero_filtri;
        //echo "<option value='$titolo_qualifica_nome_ente'>$voce_qualifiche</option>";


        if($tipologia_qualifica != $appo){
            //echo "</div>";
            echo "<div class='optGroupQualifiche'>$tipologia_qualifica</div>";
            $appo = $tipologia_qualifica;
        }
        echo "<div id='voce_qualifica' class='voce_qualifica' ><input class='qulificheCK' type='checkbox' name='comune[]' value='$comune' />$voce_qualifiche</div>";

        if($tipologia_qualifica != $appo){
            echo "</div>";
        }

    }
    echo "</div>";

//    $employees = $wpdb->GetAll($qualifiche);
//    $groups = array();
//
//    while ($qa = $employees->GetRows()) {
//        $groups[$qa['tipologia_qualifica']];
//    }
//    foreach ($groups as $label => $opt) {
//        echo "<optgroup label='$label'>";
//    }
//    foreach ($groups[$label] as $id => $name) {
//        echo "<option value='$id'>$name</option>";
//    }
//    echo "</optgroup>";
}
?>