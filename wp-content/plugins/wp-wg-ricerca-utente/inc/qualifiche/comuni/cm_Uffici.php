<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 28/03/14
 * Time: 00:18
 */
global $wpdb;


$uffici = $wpdb->get_results(
    $wpdb->prepare("select descrizione from wp_cm_UfficiServizi_Comune", ARRAY_A)
);

?>
<!--Combo uffici-->
<div id="contenitoreSelect" class="contenitoreSelect">

    <a href="#" id="selectComplessaUffici" class="selectComplessa"><div class="divLinkSelectEvoluta" id="divLinkSelectEvoluta" nome="divLinkSelectEvoluta">Uffici</div>
        <div class="contentFrecciaSelect contentFrecciaSelectUffici" id="contentFrecciaSelect" nome="contentFrecciaSelect"><img src="http://localhost/ComunichereteV3/wp-content/plugins/wp-wg-ricerca-utente/img/freccia.png" class="freccia"></div></a>

<div class="cm_uffici" id="cm_uffici" name="cm_uffici">
    <div id="cm_apriDelegheGov" class="cm_apriDelegheGov">
        <ol class="facet-valuesUffici">
            <?php foreach ( $uffici as $chiave => $valore) : ?>
                <li class="facet-value"><input type="checkbox" name="uffici[]" value="<?php echo esc_attr( $valore -> descrizione ); ?>" />
                    <div class="label-container">
                        <label class="facet-label" title="<?php echo esc_attr( $valore-> descrizione ); ?>" ><?php echo esc_attr( $valore-> descrizione ); ?></label>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
    <div class="footerComboUffici" id="footerComboUff"><a href="#" id="avviaRicercaDiv" class="avviaRicercaDiv">Affina Ricerca </a></div>
</div>
</div>
