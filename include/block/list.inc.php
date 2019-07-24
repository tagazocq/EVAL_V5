<?php
/**
 * ce block corespond a une liste d'élement.
 *  il attend qu'une variable $list exciste dans la page appelant le block
 */
foreach ($list as $article) {
    ?>
    <section >
        <article >
            <div class = "image" >
                <img src = "image/fou-d-l-1.jpg" alt = "" />
            </div >
            <header >
                <h2 >
                    <a href = <?=$_SERVER['PHP_SELF'].'/..'.$article->getDetailUrl()?> > <?=$article->getNom()?></a><br>
                </h2>
            </header>
            <p>
                <?=$article->getDescription()?>
            </p >
            <footer >
                01 / 05 / 2017
            </footer >
        </article >
    </section >
    <?php
}
?>