<?php
require( '../../../wp-load.php' );


$q=$_GET['q'];
global $wpdb;

    $query = $wpdb->get_results("SELECT DISTINCT denominazione_provincia FROM wp_elenco_comuni_istat WHERE denominazione_provincia LIKE "."'". $q. "%'", ARRAY_A);

    if(isset($query))
        {

            foreach($query as &$row ){
                echo $row[denominazione_provincia]."\n";

            }

        }
?>