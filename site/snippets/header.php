<body>
   <header class="header">
       <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="menu"> <!-- menu-->
                        <ul>
                            <a class="logo" href=" <?= $site->url() ?>"> <img src="<?= $site->image('logoNav.png')->resize(100)->url()?>"> </a>
                            <?php foreach($site->children()->listed() as $item): ?> 
                                <!-- pour tous les enfants du fichier site qui ont un numéro-->
                                <li 
                                <?php
                                if($item->title() == $site->children()->listed()->first()->title()){ //si le titre est le titre du premier enfant listé alors la classe page est mis dessus
                                ?>class="page" 
                            <?php }?>   
                                > <a href="<?= $item->url()?>"><?= $item->title() ?></a></li>
                                <?php
                                if($item->title() != $site->children()->listed()->last()->title()){ 
                                    //si le tire de la page écrite n'est pas le titre du dernier enfant listé alors on met un point
                                ?><li class="point" >.</li>
                            <?php }?>                                   
                            <?php endforeach ?> 
                        </ul>    
                    </nav>
                </div>      
            </div>
            </div>
</header>
   
       
