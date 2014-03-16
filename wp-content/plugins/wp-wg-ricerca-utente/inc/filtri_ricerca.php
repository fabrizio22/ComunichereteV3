<?php
/**
 * Created by PhpStorm.
 * User: Master
 * Date: 14/03/14
 * Time: 16:36
 */
?>
<form action="<?php echo home_url( 'ricerca-utente' ); ?>" method="post">
            <div class="filtriRicercaUtente">
                <div class="divNomeUtente" name="divNomeUtente">
                    <label class="intestazione">Nome</label>
                    <input type="text" class="inputUtente" name="nomeUtente" id="nomeUtente">
                </div>
            </div>
</form>