<?php 
    $page = 'compte';
    include('inclusions/entete.inc.php'); 
?>
    <section class="principale">
        <form action="javascript: return false">
            <fieldset>
                <legend><?= $coFrmCnxLegende ?></legend>
                <input type="text" placeholder="<?= $coFrmCourrielPlaceholder ?>">
                <input type="password" name="mdp" id="mdp" placeholder="<?= $coFrmMotPassePlaceholder ?>">
                <input type="button" value="<?= $coFrmBtnSubmit ?>">
            </fieldset>
            <div class="actions-compte">
                <a href="#"><?= $coActionCompteMdpOubli ?></a>
                <a href="#"><?= $coActionCompteNouveau ?></a>
            </div>
        </form>
    </section>
<?php include('inclusions/p2p.inc.php'); ?>