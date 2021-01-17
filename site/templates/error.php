<?php snippet('head') ?>
<?php snippet('header') ?>
<main> 
    <div class="container">
        <div class="row titre mt-5">
            <h1><?= $page->title() ?></h1>
        </div>
        <div class="row mt-5 errorText">
            <h2> <?= $page->msg() ?></h2>
            <a href="/LBG"><h2><?= $page->homepage() ?></h2></a>
        </div>
    </div>
    <script>

</script>
</main>
<?php snippet('footer') ?>