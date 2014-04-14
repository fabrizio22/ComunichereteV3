<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 28/03/14
 * Time: 00:18
 */
global $wpdb;

$settori = $wpdb->get_results(
    $wpdb->prepare("select descrizione from wp_cm_ServiziSettori_Comune", ARRAY_A)
);


?>
<!--Combo settori-->
<div id="contenitoreSelect" class="contenitoreSelect">

    <a href="#" id="selectComplessaSettori" class="selectComplessa"><div class="divLinkSelectEvoluta" id="divLinkSelectEvoluta" nome="divLinkSelectEvoluta">Settori</div>
        <div class="contentFrecciaSelect" id="contentFrecciaSelect" nome="contentFrecciaSelect"><img src="http://localhost/ComunichereteV3/wp-content/plugins/wp-wg-ricerca-utente/img/freccia.png" class="freccia"></div></a>

<div class="cm_settori" id="cm_settori" name="cm_settori">
    <div id="cm_apriDelegheGov" class="cm_apriDelegheGov">
        <ol class="facet-values">
            <?php foreach ( $settori as $chiave => $valore) : ?>
                <li class="facet-value"><input type="checkbox" name="deleghe[]" value="<?php echo esc_attr( $valore -> descrizione ); ?>" />
                    <div class="label-container">
                        <label class="facet-label" title="<?php echo esc_attr( $valore-> descrizione ); ?>" ><?php echo esc_attr( $valore-> descrizione ); ?></label>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
    <div class="footerCombo" id="footerCombo"><a href="#" id="avviaRicercaDiv" class="avviaRicercaDiv">Affina Ricerca </a></div>
</div>
</div>