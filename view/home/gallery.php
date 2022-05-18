<?php include  "header.php";  ?>


        <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">
            <div class="container">
                <h2>Galerie photo</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Accueil</a></li>
                    <li><a href="#">Pages</a></li>
                    <li><span>Galerie</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="gallery-one">
            <div class="container">
                <div class="row">
                    <?php foreach($data['gallery_all'] as $key => $row){ ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-one__single">
                            <img src="<?php echo ASSET_URL; ?>/uploads/<?php echo $row['image']; ?>" alt="">
                            <a class="gallery-one__link img-popup" href="<?php echo ASSET_URL; ?>/uploads/<?php echo $row['image']; ?>"><i class="tripo-icon-plus-symbol"></i></a>
                        </div><!-- /.gallery-one__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                <?php } ?>
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.gallery-one -->


<?php include  "footer.php";  ?>