<?Php
/*
Plugin Name: Widget ricerca Mess File
Plugin Script: wp-wg-ricerca-Mess-File.php
Description: Grazie a questo wg sarà possibile effettuare la ricerca file
Version: 1.0
License: GPL 2.0
Author: Fabrizio Fatelli
*/

class wg_ricerca_mess_file extends WP_Widget
{
    public function __construct()
    {
        parent::WP_Widget( 'ricerca-mess-file', 'RICERCA MESS FILE', array('description' => 'Grazie a questo wg sarà possibile effettuare la ricerca file '));
    }

    public function form( $instance ){?>

    <?php
    }

    public function widget( $args, $instance )
    {
        global $wpdb;
        extract( $args );


        //$title = apply_filters('widget_title', 'Ricerca Profilo' );

        $nomeUtente = $_POST['nomeUtente'];
        $organoFiltro = $_POST['organoFiltro'];
        $qualificaFiltro = $_POST['qualificaFiltro'];
        $settoreAreaFiltro = $_POST['settoreAreaFiltro'];
        $ufficioFiltro = $_POST['ufficioFiltro'];
        $dipartimentoFiltro = $_POST['dipartimentoFiltro'];
        $servizioFiltro = $_POST['servizioFiltro'];
        $paeseFiltro = $_POST['paeseFiltro'];
        $regioneFiltro = $_POST['regioneFiltro'];
        $provinciaFiltro = $_POST['provinciaFiltro'];
        $comuneFiltro = $_POST['comuneFiltro'];
        $pubblicaAmministrazione = $_POST['pubblicaAmministrazione'];
        $tipologiaEnte = $_POST['tipologiaEnte'];

        if(isset($nomeUtente)){
            $query = $wpdb->get_row(
                $wpdb->prepare("SELECT * FROM $wpdb->users WHERE user_login = %s", $nomeUtente, ARRAY_A)
            );


        }
        $userId = $query->ID;
        $display_name = $query->display_name;
        $user_url = $query->user_url;
        $user_email = $query->user_email;
        $user_login = $query->user_login;

                $querymeta = $wpdb->get_results(
                    $wpdb->prepare("SELECT * FROM $wpdb->usermeta WHERE user_id = %d", $userId, ARRAY_A)
                );


        echo $before_widget;
        echo $before_title . $title . $after_title;
        ?>
        <form action="<?php echo home_url( 'ricerca-utente' ); ?>" method="post">
        <div class="filtriRicercaUtente">
            <table id="filtri">
                <tr><td>
                    <select id="pubblicaAmministrazione" name="pubblicaAmministrazione">
                        <option value="vuoto">Pubblica Amministrazione</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </td></tr>
                <tr><td><hr></td></tr>
                <tr><td>Filtra per Tipologia</td></tr>
                <tr><td><input type="text" name="nomeCognome" id="nomeCognome" placeholder="Svrivi il tuo Nome e Cognome"></td></tr>
                <tr><td>
                        <select name="tipologiaEnte" id="tipologiaEnte">
                            <option value="vuoto">Topologia Ente</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                </td></tr>
                <tr><td><input type="text" name="nomeUtente" id="nomeUtente" placeholder="Svrivi Nome Utente"></td></tr>
                <tr><td><input type="text" name="organoFiltro" id="organoFiltro" placeholder="Organo"></td></tr>
                <tr><td><input type="text" name="qualificaFiltro" id="qualificaFiltro" placeholder="Qualifica"></td></tr>
                <tr><td><input type="text" name="settoreAreaFiltro" id="settoreAreaFiltro" placeholder="Area/Settore"></td></tr>
                <tr><td><input type="text" name="ufficioFiltro" id="ufficioFiltro" placeholder="Ufficio"></td></tr>
                <tr><td><input type="text" name="dipartimentoFiltro" id="dipartimentoFiltro" placeholder="Dipartimento"></td></tr>
                <tr><td><input type="text" name="servizioFiltro" id="servizioFiltro" placeholder="Servizio"></td></tr>
                <tr><td><hr></td></tr>
                <tr><td>Filtra per Area Geografica</td></tr>
                <tr><td><input type="text" name="paeseFiltro" id="paeseFiltro" placeholder="Paese"></td></tr>
                <tr><td><input type="text" name="regioneFiltro" id="regioneFiltro" placeholder="Regione"></td></tr>
                <tr><td><input type="text" name="provinciaFiltro" id="provinciaFiltro" placeholder="Provincia"></td></tr>
                <tr><td><input type="text" name="comuneFiltro" id="comuneFiltro" placeholder="Comune"></td></tr>
                <tr><td><input type="submit" name="cerca" id="cerca" value="Inizia Ricerca" </td></tr>
            </table>

        </div>
        </form>
        <div id="risultatoRicercaUtente" class="risultatoRicercaUtente">
<?php
//
//            echo $userId;
//            echo $display_name;
//            echo $user_url;
//            echo $user_email;
//            echo $user_login;


            foreach ($querymeta as $v1) {
                foreach ($v1 as $v2) {
                    echo "$v2\n";
                }
            }


           ?>

            <table>
                <tr><td><?php echo $userId;?></td></tr>
                <tr><td><?php echo $display_name;?></td></tr>
                <tr><td><?php echo $user_url;?></td></tr>
                <tr><td><?php echo $user_email;?></td></tr>
                <tr><td><?php echo $user_login;?></td></tr>
            </table>



        </div>

        <?php
        echo $after_widget;
    }

}

function wg_ricerca_mess_file()
{
    register_widget( 'wg_ricerca_mess_file' );
}

add_action( 'widgets_init', 'wg_ricerca_mess_file' );
?>