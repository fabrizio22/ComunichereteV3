<?php
require( '../../../wp-load.php' );


$ente=$_POST['mailAccount'];
global $wpdb;

$query = $wpdb->get_results("SELECT email FROM wp_elenco_comuni_istat WHERE denominazione_comune_italiano = "."'". $ente ."'", ARRAY_A);

if(isset($query))
{

    foreach($query as &$row ){
        echo $row[email]."\n";

    }

}
?>