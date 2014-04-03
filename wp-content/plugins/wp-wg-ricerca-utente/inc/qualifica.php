<?php

$qualificaSel = $_POST['qualifica'];
//$qualificaSel = "1";


isset($_POST["qualifica"]);

if (!empty($_POST)){

    $qualifiche = $wpdb->get_results(
        $wpdb->prepare("select DISTINCT voce_qualifiche from wp_cm_qualifiche WHERE id_ente = %s", $qualificaSel, ARRAY_A)
    );



echo"<select class=\"selectCerca\" id=\"qualifiche\" name=\"qualifiche\">";
foreach($qualifiche as $chiave => $valore)
{
?>
    <option value="<?php echo $valore -> voce_qualifiche ?>"><?php echo $valore -> voce_qualifiche ?></option>
<?php
}
echo"</select>";

}




