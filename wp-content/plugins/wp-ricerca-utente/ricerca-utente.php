<?php
/**
Plugin Name: Ricerca Utente
Plugin URI:
Description: ci permetterà di cercare gli utenti registrati su nostro sito
Version: 1.0
Author: Fabrizio Fatelli
Author URI:
*/

            function search_filter_user() {
                if ( !is_admin() && $query->is_main_query() ) {
                    global $wpdb;



                    $nome =$_GET['s'];


                    // $query = $wpdb->get_var ("SELECT * FROM wp_users WHERE user_login = ".$nome );

                    $query = $wpdb->get_row(
                        $wpdb->prepare(
                            "SELECT * FROM $wpdb->users WHERE user_login = %s", $nome
                        )
                    );




                   foreach ($query as $risultati) {
                        //$return .= "<p>" . $risultati. "</p>";
                        echo "<p>" . $risultati. "</p>";

                    }

                }
            }

                //add_action('wp_head','search_filter_user');
