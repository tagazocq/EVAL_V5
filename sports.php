<?php
require_once 'include/ServiceFactory.inc.php';

$detail = null;
$list = null;
$showEdit = false;

if ($_POST)  {
    $detail = new SportModificationDTO();

    // !!!!! ne pas oublier de sanitizer les valeurs qui entre dans le système
    $detail->setName(htmlspecialchars($_POST['name']));

    $detail = $serviceFactory->getSportsRepository()->createOrUpdate($detail);
} else if ($_GET && $_GET['id'] != null) {
    $detail = $serviceFactory->getSportsRepository()->findSportById($_GET['id']);
    if ($_GET['action'] == 'edit') {
       $showEdit = true;
    }
} else {
    $list = $serviceFactory->getSportsRepository()->findAllSports();
}
require_once 'include/block/header.inc.php';

if ($detail != null) {
    ?>
    <?php if ($showEdit) { ?> <form target="<?='../'.$detail->getDetailUrl()?>"> <?php } ?>
    <section>
        <article>
            <div class="image">
                <img src="image/fou-d-l-1.jpg" alt=""/>
            </div>
            <header>
                <h2>
                    <?php if ($showEdit) {
                        ?><label>xxx</label><input type="text" value="<?= $detail->getNom() ?>"/>
                    <?php }  else { ?>
                        <?= $detail->getNom() ?>
                    <?php } ?>
                </h2>
            </header>
            <p>
                <?= $detail->getDescription() ?>
            </p>
            <footer>
                01 / 05 / 2017
                <a href= <?= $_SERVER['PHP_SELF'] . '/..' . $detail->getDetailUrl() . '&amp;action=edit' ?>>
                    modifier</a>
            </footer>
        </article>
    </section>
    <?php if ($showEdit) { ?> </form> <?php } ?>
    <?php
} else {
    require_once 'include/block/list.inc.php';
}
require_once 'include/block/footer.inc.php';
?>