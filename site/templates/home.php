<?php snippet('head') ?>
<?php snippet('header') ?>
<main>

  <div class="row banniere">
  <?php if($banniere = $page->banniere()->toFile()) : ?>
  <?php if($banniere->type() === 'image' ){?> 
      <img class="enTete" src="<?= $banniere->crop(1920,300, 'top')->url() ?>" alt="<?= $banniere->alt() ?>">
       <?php }else{?> 
           <video class="video" width="450" height="250" controls>
              <source src="<?= $banniere->url() ?>">
          </video>
           <?php } endif ?>
    <div class="row title">
        <h1><?= $page->title() ?></h1>
  </div>
  </div>
  <div class="row titleTel">
        <h1><?= $page->title() ?></h1>
  </div>
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="SectionTitle"><?= $page->title1()?></h2>
      </div>
      <div class="col-md-7">
        <div class="row mt-2">
          <p class="paraph1"><?= $page->S1paraph1()?></p>
        </div>
        <div class="row mt-2">
          <p class="paraph2"><?= $page->S1paraph2()?></p>
        </div>
        <div class="row mt-2">
          <p class="paraph3"><?= $page->S1paraph3()?></p>
        </div>
      </div>
      <div class="col-md-5 mt-2">
      <?php if($image1 = $page->image1()->toFile()) : ?>
        <?php if($image1->type() === 'image' ){?> 
          <a href="/LBG/game"> <img class="image image1" src="<?= $image1->crop(450,300)->url() ?>" alt="<?= $image1->alt() ?>"></a>
       <?php }else{?> 
           <video class="video" width="450" height="250" controls>
              <source src="<?= $image1->url() ?>">
          </video>
           <?php } endif?>
       
      </div>
    </div>
    <div class="row section2">
      <div class="col-md-12">
        <h2 class="SectionTitle"><?= $page->title2()?></h2>
      </div>
      <div class="col-md-5 mt-4 ">
      <?php if($image2 = $page->image2()->toFile()) : ?> 
      <?php if($image2->type() === 'image' ){?> 
        <a href="/LBG/event">  <img class="image image1" src="<?= $image2->crop(450,300)->url() ?>" alt="<?= $image2->alt() ?>"></a>
       <?php }else{ ?> 
            <video class="video" width="430" height="250" controls>
              <source src="<?= $image2->url() ?>" alt="<?= $image2->alt() ?>">
            </video>
           <?php } endif?>
      </div>
      <div class="col-md-7 section2">
        <div class="row mt-4">
          <p class="paraph1"><?= $page->S2paraph1()?></p>
        </div>
        <div class="row mt-1">
          <p class="paraph2"><?= $page->S2paraph2()?></p>
        </div>
        <div class="row mt-1">
          <p class="paraph2"><?= $page->S2paraph3()?></p>
        </div>
      </div>
      <div class="row mt-3">
        <p class="paraph3"><?= $page->S2paraph4()?></p>
      </div>
    </div>
  </div>

</main>
<?php snippet('footer') ?>