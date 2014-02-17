<?php
require( '../../../wp-load.php' );


$q=$_GET['q'];
global $wpdb;

    $query = $wpdb->get_results("SELECT * FROM wp_elenco_comuni_istat WHERE denominazione_italiano LIKE "."'%". $q. "%'", ARRAY_A);

    if(isset($query))
        {

            foreach($query as &$row ){
                echo $row[denominazione_italiano]."\n";

            }

        }
?>