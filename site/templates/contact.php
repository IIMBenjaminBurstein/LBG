<?php snippet('head') ?>
<?php snippet('header') ?>
<main > <!--!!!!!! bouge en css -->
    <div class="row contact mt-5">
        <h1><?= $page->title() ?></h1>
    </div>
    <div class="container">
        <div class="row mt-5" id="thxTexte" > 
            <h2><?= $page->Msgfin() ?></h2>
            <a href="/LBG"><h2><?= $page->Homepage() ?></h2></a>
        </div>
        <form id="form" target="_self" onsubmit="return postToGoogle();" action="" autocomplete="off">
            <div class="row ">
                <div class="col-md-2"></div>
                <div class=" col-md-3">
                    <h3>Name</h3>
                    <input id="nameField" name="entry.1385748098" class="form-control" placeholder="Entrez votre nom" type="text" required>
                </div>
                <div class="col-md-2"></div>
                <div class=" col-md-3">
                    <h3>FirstName</h3>
                    <input id="firstNameField" name="entry.1306558735" class="form-control" placeholder="Entrez votre prenom" type="text" required> 
                </div>
            </div>  
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 mt-5">
                    <h3 for="inputEmail">Email</h3>
                    <input id="emailField" name="entry.281956786"  class="form-control" placeholder="Entrez votre email" type="email" required>  
                </div>
            </div>
            <div class="row mt-5 ">
                <div class="col-md-12 bouton ">
                    <button id="send" type="submit" class="btn btn-md btn-light">SUBSCRIBE TO OUR NEWSLATTER</button>
                </div> 
            </div>
        </form>
    </div>
    <?= js('assets/js/form.js') ?>
</main>
<?php snippet('footer') ?>