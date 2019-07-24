<?php
require_once 'include/ServiceFactory.inc.php';

$detail = null;
$list = null;

if ($_GET && $_GET['id'] != null) {
    $detail = $serviceFactory->getSportsRepository()->findSportById($_GET['id']);
}else{
    $list = $serviceFactory->getSportsRepository()->findAllSports();
}

// echo var_dump($list);
?>
<?php
require_once 'include/block/header.inc.php';
if ($detail!= null){

    ?>
    <section >
        <article >
            <div class = "image" >
                <img src = "image/fou-d-l-1.jpg" alt = "" />
            </div >
            <header >
                <h2 >
                    <?=$detail->getNom()?><br>
                </h2>
            </header>
            <p>
                <?=$detail->getDescription()?>
            </p >
            <footer >
                01 / 05 / 2017
            </footer >
        </article >
    </section >
<?php
}else{
    require_once 'include/block/list.inc.php';
}
require_once 'include/block/footer.inc.php';
?>

