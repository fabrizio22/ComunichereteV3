<?php

$uffici = $wpdb->get_results(
    $wpdb->prepare("select descrizione from wp_cm_UfficiServizi_Comune", ARRAY_A)
);

$nuclei = $wpdb->get_results(
    $wpdb->prepare("select descrizione from wp_cm_Polizia_NucleiOperativi", ARRAY_A)
);


?>

<!--Combo uffici-->
<div id="contenitoreSelect" class="contenitoreSelect">

    <a href="#" id="selectComplessaUfficiPM" class="selectComplessa"><div class="divLinkSelectEvoluta" id="divLinkSelectEvoluta" nome="divLinkSelectEvoluta">Uffici</div>
        <div class="contentFrecciaSelect" id="contentFrecciaSelect" nome="contentFrecciaSelect"><img src="http://localhost/ComunichereteV3/wp-content/plugins/wp-wg-ricerca-utente/img/freccia.png" class="freccia"></div></a>

    <div class="cm_ufficiPM" id="cm_ufficiPM" name="cm_ufficiPM">
        <div id="cm_apriDelegheGov" class="cm_apriDelegheGov">
            <ol class="facet-values">
                <?php foreach ( $uffici as $chiave => $valore) : ?>
                    <li class="facet-value"><input type="checkbox" name="uffici[]" value="<?php echo esc_attr( $valore -> descrizione ); ?>" />
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

<!--Combo nuclei-->
<div id="contenitoreSelect" class="contenitoreSelect">

    <a href="#" id="selectComplessaNuclei" class="selectComplessa"><div class="divLinkSelectEvoluta" id="divLinkSelectEvoluta" nome="divLinkSelectEvoluta">Nuclei</div>
        <div class="contentFrecciaSelect" id="contentFrecciaSelect" nome="contentFrecciaSelect"><img src="http://localhost/ComunichereteV3/wp-content/plugins/wp-wg-ricerca-utente/img/freccia.png" class="freccia"></div></a>

    <div class="cm_nuclei" id="cm_nuclei" name="cm_nuclei">
        <div id="cm_apriDelegheGov" class="cm_apriDelegheGov">
            <ol class="facet-values">
                <?php foreach ( $nuclei as $chiave => $valore) : ?>
                    <li class="facet-value"><input type="checkbox" name="uffici[]" value="<?php echo esc_attr( $valore -> descrizione ); ?>" />
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