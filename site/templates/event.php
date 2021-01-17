<?php snippet('head') ?> <!-- Les snippets sont des éléments réutilisable dans le code sans avoir à le réécrire  -->
<?php snippet('header') ?> <!-- ajouts des snippet head et header -->
<main>
  <div class="row banniere">
  <?php if($banniere = $page->banniere()->toFile()) : ?> <!-- 
  la fontion bannière fait référence à "bannière" dans le fichier event.txt
  création d'une variable contenant l'image pour la bannière 
  le toFile retourne un fichier sous forme d'objet contenant tous les éléments du fichier txt  -->
  <?php if($banniere->type() === 'image' ){?> <!-- vérification du type du fichier (image ou video sont les seuls autorisés) 
        afin de savoir s'il faut utiliser la balise image ou video -->
        <img class="enTete" src="<?= $banniere->crop(1920,300, 'top')->url() ?>" alt="<?= $banniere->alt() ?>">
        <!-- 
          la récupération de l'url se fait dans le fichier event txt, chaque fichier peut avoir osn propre fichier txt avec des informations
          propre au fichier. Pour utiliser une information il faut l'appeller sous forme de fonction fléché cf: alt()
        -->
       <?php }else{?> 
           <video class="video" width="450" height="250" controls>
              <source src="<?= $banniere->url() ?>">
          </video>
           <?php } endif ?>
    <div class="row title">
        <h1><?= $page->title() ?></h1> <!-- récupération du titre de la page -->
  </div>
  </div>
  <div class="row titleTel">
        <h1><?= $page->title() ?></h1> <!-- récupération du titre de la page en dehors de la div pour pouvoir enlver seulement la bannière sur téléphone -->
  </div>
  <div class="container">
    <div class="row mt-5 section1">
      <div class="col-md-12">
        <h2 class="SectionTitle"><?= $page->title1()?></h2> <!-- récup du titre de la section1 -->
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
        <?php if( $image1->type() === 'image' ){?> 
        <img class="image image1" src="<?= $image1->crop(450,300)->url() ?>">
       <?php }else{?> 
           <video class="video" width="450" height="250" controls>
              <source src="<?= $image1->url() ?>">
          </video>
           <?php } endif?>  
      </div>
    </div>
    <div class="row section2">
      <div class="col-md-12">
        <h2 class="SectionTitle"><?= $page->title2() ?></h2>
      </div>
      <div class="col-md-5 mt-4 ">
        <?php if($image2 = $page->image2()->toFile()) : ?> 
        <?php if($image2->type() === 'image' ){?> 
        <img class="image image1" src="<?= $image2->crop(450,300)->url() ?>">
        <?php }else{ ?> 
            <video class="video" width="430" height="250" controls>
              <source src="<?= $image2->url() ?>">
            </video>
        <?php } endif?>
      </div>
      <div class="col-md-7 textSection2">
        <div class="row mt-4">
          <p class="paraph1"><?= $page->S2paraph1() ?></p>
        </div>
        <div class="row mt-1">
          <p class="paraph2"><?= $page->S2paraph2() ?></p>
        </div>
        <div class="row mt-1">
          <p class="paraph2"><?= $page->S2paraph3() ?></p>
        </div>
      </div>
      <div class="row mt-3">
        <p class="paraph3"><?= $page->S2paraph4() ?></p>
      </div>
    </div>
  </div>
</main>
<?php snippet('footer') ?>