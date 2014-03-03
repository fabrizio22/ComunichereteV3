<!--<div id="containerUffici" class="containerUffici">-->
<!--	<label class="titoloGruppoComuni">Uffici</label><br /><hr class="gruppoComuneRegioneHr">-->
<!--		<div class="Uffici">-->
<!--			<input id="suap" type="checkbox" class="suap" name="uffici[]" value="S.U.A.P." />-->
<!--		    <label class="labelQualifica">S.U.A.P.</label><br />-->
<!--			<input id="ufficioAnagrafe" type="checkbox" class="ufficioAnagrafe" name="uffici[]" value="Ufficio Anagrafe" />-->
<!--		    <label class="labelQualifica">Ufficio Anagrafe</label><br />-->
<!--			<input id="culturaSportTurismo" type="checkbox" class="culturaSportTurismo" name="uffici[]" value="Ufficio Cultura, Sport e Turismo" />-->
<!--		    <label class="labelQualifica">Ufficio Cultura, Sport e Turismo</label><br >-->
<!--			<input id="economato" type="checkbox" class="economato" name="uffici[]" value="Ufficio Economato" />-->
<!--		    <label class="labelQualifica">Ufficio Economato</label><br />-->
<!--			<input id="ufficioElettorale" type="checkbox" class="ufficioElettorale" name="uffici[]" value="Ufficio Elettorale" />-->
<!--		    <label class="labelQualifica">Ufficio Elettorale</label><br />-->
<!--			<input id="ufficioGiuntaComunale" type="checkbox" class="ufficioGiuntaComunale" name="uffici[]" value="Ufficio Giunta Comunale" />-->
<!--		    <label class="labelQualifica">Ufficio Giunta Comunale</label><br />-->
<!--			<input id="ufficioLavoriPubblici" type="checkbox" class="ufficioLavoriPubblici" name="uffici[]" value="Ufficio Lavori Pubblici" />-->
<!--		    <label class="labelQualifica">Ufficio Lavori Pubblici</label><br >-->
<!--			<input id="ufficioProtocollo" type="checkbox" class="ufficioProtocollo" name="uffici[]" value="Ufficio Protocollo" />-->
<!--		    <label class="labelQualifica">Ufficio Protocollo</label><br />-->
<!--			<input id="ufficioRelazioniPubblico" type="checkbox" class="ufficioRelazioniPubblico" name="uffici[]" value="Ufficio Relazioni con il pubblico" />-->
<!--		    <label class="labelQualifica">Ufficio Relazioni con il pubblico</label><br />-->
<!--			<input id="ufficioSegreteriaGenerale" type="checkbox" class="ufficioSegreteriaGenerale" name="uffici[]" value="Ufficio Segreteria Generale" />-->
<!--		    <label class="labelQualifica">Ufficio Segreteria Generale</label><br />-->
<!--			<input id="ufficioServiziDemografici" type="checkbox" class="ufficioServiziDemografici" name="uffici[]" value="Ufficio Servizi Demografici" />-->
<!--		    <label class="labelQualifica">Ufficio Servizi Demografici</label><br />-->
<!--			<input id="ufficioServiziSociali" type="checkbox" class="ufficioServiziSociali" name="uffici[]" value="Ufficio Servizi Sociali" />-->
<!--		    <label class="labelQualifica">Ufficio Servizi Sociali</label><br />-->
<!--            <input type="hidden" name="ufficiH" value="Ufficio">-->
<!--	    </div>-->
<!--</div>-->
<?php
$ufficio = array("S.U.A.P.",
"Ufficio Anagrafe",
"Ufficio Cultura, Sport e Turismo",
"Ufficio Economato",
"Ufficio Elettorale",
"Ufficio Giunta Comunale",
"Ufficio Lavori Pubblici",
"Ufficio Protocollo",
"Ufficio Relazioni con il pubblico",
"Ufficio Segreteria Generale",
"Ufficio Servizi Demografici",
"Ufficio Servizi Sociali");
?>

<div id="containerUffici" class="containerUffici">
    <label class="titoloSottoSezione">Uffici</label>
    <div id="divUfficiGov" class="apriUfficiGov">
        <ol class="facet-values">
            <?php foreach ( $ufficio as $status ) : ?>
                <li class="facet-value"><input type="checkbox" name="uffici[]" value="<?php echo esc_attr( $status ); ?>" />
                    <div class="label-container">
                        <label class="facet-label" title="<?php echo esc_attr( $status ); ?>" ><?php echo esc_attr( $status ); ?></label>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    <input type="hidden" name="ufficiH" value="Ufficio">
</div>
</div>


