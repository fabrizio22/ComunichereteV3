<?php
$deleghe = array(
    "Affari Generali",
"Ambiente",
"Amministrazione Digitale",
"Arredo Urbano",
"Artigianato",
"Asili Nido",
"Attività Produttive",
"Bilancio e Tributi",
"Commercio e Industria",
"Comunicazione",
"Diritto allo Studio",
"Economato",
"Edilizia Privata",
"Energia",
"Guardie Ecologiche",
"Infrastrutture",
"Innovazione",
"Istruzione",
"Lavori Pubblici",
"Legalità Antimafia",
"Manutenzione Gestione Impianti",
"Marketing Territoriale",
"Mobilità",
"Organizzazione e Formazione",
"Parcheggi",
"Pari Opportunità",
"Partecipazione e Consulte di Quartiere",
"Patrimonio",
"Personale",
"Piano Del Traffico e Rete Trasporti",
"Piano Energetico ed Energie Rinnovabili",
"Politiche Abitative",
"Politiche Comunitarie",
"Politiche Culturali",
"Politiche della Famiglia",
"Politiche Giovanili",
"Politiche Migratorie",
"Politiche per il Lavoro",
"Politiche Sociali",
"Polizia",
"Protezione Civile",
"Rapporti Istituzionali",
"Ricerca e Innovazione",
"Scuola, Università, Ricerca, Formazione",
"Semplificazione",
"Servizi al Cittadino",
"Servizi Ambientali",
"Servizi e Manutenzioni Cimiteriali",
"Servizi Sociali",
"Sicurezza",
"Sistema Bibliotecari",
"Sistemi Informativi",
"Smart City",
"Società Partecipate",
"Spending Review",
"Strade",
"Sviluppo Economico",
"Sviluppo Sostenibile",
"Traffico",
"Turismo ed Eventi",
"Urbanistica",
"Verde Pubblico",
"Volontariato",
"Wifi Pubblico");

?>
<div id="containerDelegheRg" class="containerDelegheRg">
    <label class="titoloSottoSezione">Deleghe</label>
    <div id="apriDelegheGov" class="apriDelegheGov">
        <ol class="facet-values">
            <?php foreach ( $deleghe as $status ) : ?>
                <li class="facet-value"><input type="checkbox" name="delegheRG[]" value="<?php echo esc_attr( $status ); ?>" />
                    <div class="label-container">
                        <label class="facet-label" title="<?php echo esc_attr( $status ); ?>" ><?php echo esc_attr( $status ); ?></label>
                    </div>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
<input type="hidden" id="comune" name="delegheH" value="Deleghe">

</div>