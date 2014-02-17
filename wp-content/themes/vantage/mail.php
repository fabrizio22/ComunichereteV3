<?php
require( '../../../wp-load.php' );


$ente=$_POST['mailAccount'];
global $wpdb;

$query = $wpdb->get_var("SELECT email FROM wp_elenco_comuni_istat WHERE denominazione_italiano = '".$ente."'");
return $query;

/*if(isset($query))
{
    foreach($query as &$row ){
        return $row[email]."\n";
    }

}*/
?>