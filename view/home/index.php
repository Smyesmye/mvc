<?php include  "header.php";  ?>


        <section class="banner-one" style="background-image: url(assets/images/backgrounds/banner-1-1-bg.jpg);">
            <div class="container">
                <h2>Trouvez votre <span>prochaine tournée</span></h2>
                <p>Où aimeriez-vous aller?</p>
                <form class="tour-search-one" action="http://layerdrops.com/tripo/tour-sidebar.html">
                    <div class="tour-search-one__inner">
                        <div class="tour-search-one__inputs">
                            <div class="tour-search-one__input-box">
                                <label for="place">Destination</label>
                                <input type="text" placeholder="Entrer une destination" name="place" id="place">
                            </div><!-- /.tour-search-one__input-box -->
                            <div class="tour-search-one__input-box">
                                <label for="when">Quand</label>
                                <input type="text" placeholder="Septembre" name="when" id="when">
                            </div><!-- /.tour-search-one__input-box -->
                            <div class="tour-search-one__input-box">
                                <label for="type">Type</label>
                                <select class="selectpicker" id="type">
                                    <option value="Adventure">Aventure</option>
                                    <option value="Wildlife">Faune</option>
                                    <option value="Sightseeing">Touristique</option>
                                </select>
                            </div><!-- /.tour-search-one__input-box -->
                        </div><!-- /.tour-search-one__inputs -->
                        <div class="tour-search-one__btn-wrap">
                            <button type="submit" class="thm-btn tour-search-one__btn">Trouvez maintenant</button>
                        </div><!-- /.tour-search-one__btn-wrap -->
                    </div><!-- /.tour-search-one__inner -->
                </form><!-- /.tour-search-one -->
            </div><!-- /.container -->
        </section><!-- /.banner-one -->

        <section class="features-one__title">
            <div class="container">
                <div class="block-title text-center">
                    <p>Appeler nos agents pour réserver!</p>
                </div><!-- /.block-title -->
            </div><!-- /.container -->
        </section><!-- /.features-one__title -->

        <section class="features-one__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="features-one__single">
                            <i class=" tripo-icon-tour-guide"></i>
                            <h3>Plus de 8000  <br> guides locales</h3>
                        </div><!-- /.features-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="features-one__single">
                            <i class=" tripo-icon-reliability"></i>
                            <h3>Agence de voyage avec <br> 100% de confiance</h3>
                        </div><!-- /.features-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="features-one__single">
                            <i class=" tripo-icon-user-experience"></i>
                            <h3>Plus de 28 ans  <br> d'éxpérience en voyage</h3>
                        </div><!-- /.features-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="features-one__single">
                            <i class=" tripo-icon-feedback"></i>
                            <h3>98% de nos voyageurs <br>sont heureux</h3>
                        </div><!-- /.features-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.features-one__content -->

        <section class="tour-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Visites guidées en vedette</p>
                    <h3>Les tournée les plus populaires</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <?php foreach($data['gallery_all'] as $key => $row){ if($key<=5){ ?>
                    <div class="col-xl-4 col-lg-6">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="<?php echo ASSET_URL; ?>/uploads/<?php echo $row['image']; ?>" alt="">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.0
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="#">Tournée de 2 jours dans la ville</a></h3>
                                <p><span>$<?php echo rand(1000,9999); ?></span> / Par personne</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="#"><i class="far fa-clock"></i> 2 jours</a></li>
                                    <li><a href="#"><i class="far fa-user-circle"></i> Conseillé à partir de 10 ans</a></li>
                                    <li><a href="#"><i class="far fa-map"></i> Turquie</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.col-lg-4 -->
                <?php } } ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.tour-one -->

        <section class="video-one" style="background-image: url(assets/images/backgrounds/video-bg-1-1.jpg);">
            <div class="container text-center">
                <p>Aimer où vous allez!</p>
                <h3><span>Tripo est un site de réservation</span>  <span> de tournée en ligne</span></h3>
            </div><!-- /.container -->
        </section><!-- /.video-one -->

        <section class="cta-three">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="cta-three__content">
                            <div class="cta-three__content-inner">
                                <div class="block-title text-left">
                                    <p>Fiable et professionnel</p>
                                    <h3>Plus de 50 000 clients nous font confiance</h3>
                                </div><!-- /.block-title -->
                                <img src="assets/images/resources/cta-3-1.jpg" data-wow-duration="1500ms" class="wow fadeInLeft img-fluid" alt="">
                                <div class="cta-three__box">
                                    <p>Nous ne choisissons que le meilleur pour vous </p>
                                </div><!-- /.cta-three__box -->
                            </div><!-- /.cta-three__content-inner -->
                        </div><!-- /.cta-three__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 text-lg-right text-md-center">
                        <div class="cta-three__images wow fadeInRight" data-wow-duration="1500ms">
                            <img src="assets/images/resources/cta-3-2.jpg" class="img-fluid" alt="">
                        </div><!-- /.cta-three__images -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.cta-three -->

        <section class="destinations-two">
            <div class="container">
                <div class="block-title text-center">
                    <h3>Meilleur destination</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="destinations-two__single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="000ms">
                            <img src="assets/images/destinations/destinations-2-1.jpg" alt="">
                            <h3><a href="<?php echo ASSET_URL; ?>destinations-details.html">Istanbul</a></h3>
                        </div><!-- /.destinations-two__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="destinations-two__single wow fadeInUp " data-wow-duration="1500ms" data-wow-delay="100ms">
                            <img src="assets/images/destinations/destinations-2-2.jpg" alt="">
                            <h3><a href="<?php echo ASSET_URL; ?>destinations-details.html">Ankara</a></h3>
                        </div><!-- /.destinations-two__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="destinations-two__single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <img src="assets/images/destinations/destinations-2-3.jpg" alt="">
                            <h3><a href="<?php echo ASSET_URL; ?>destinations-details.html">Izmir</a></h3>
                        </div><!-- /.destinations-two__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.destinations-two -->

        <section class="testimonials-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Consultez les</p>
                    <h3>meilleurs commentaires sur les visites</h3>
                </div><!-- /.block-title -->
                <div class="testimonials-one__carousel thm__owl-carousel light-dots owl-carousel owl-theme" data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": true, "margin": 30, "loop": true, "responsive": { "0": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "767": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "991": { "items": 2 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p> Nous avons eu une visite super sympa avec un guide très compétent. Il nous a fais découvrir cette ville merveilleuse en quelques jours. Merci pour tout! </p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-1.jpg" alt="">
                                <h3>Francois Vanel</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>Visite très sympathique</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-2.jpg" alt="">
                                <h3>Christine Eve</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>Une visite très intéressante et divertissante</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-3.jpg" alt="">
                                <h3>Mikael Morel</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p> Guide très sympa!</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-1.jpg" alt="">
                                <h3>Kevin Marion</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p> Les prix sont convenables pour la qualité de la visite. Je recommande fortement!</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-2.jpg" alt="">
                                <h3>Christina Lac</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>Très bonne visite! Rien à dire sur l'organisation</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-3.jpg" alt="">
                                <h3>Stéphane Place</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>Ce n'est pas la première fois que je réserve une visite sur ce site, toujours des guides sympatiques, je recommande fortement.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-1.jpg" alt="">
                                <h3>Jean Michel</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>Très bonne organisation, visite de différents lieux et le prix et tout à fait abordable. >
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-2.jpg" alt="">
                                <h3>Laura Claire</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>Une jolie ville, visité avec des personnes sypathiques</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-3.jpg" alt="">
                                <h3>Jacques Michel</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one -->

        <section class="funfact-one">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-6">
                        <div class="funfact-one__single">
                            <h3><span class="counter">22</span><!-- /.counter -->+</h3>
                            <p>Guides touristiques professionnels</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-2 col-md-6 -->
                    <div class="col-xl-2 col-md-6 justify-content-xl-center">
                        <div class="funfact-one__single">
                            <h3><span class="counter">84</span><!-- /.counter -->k</h3>
                            <p>Visites réalisés</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-2 col-md-6 -->
                    <div class="col-xl-2 col-md-6 justify-content-xl-center">
                        <div class="funfact-one__single">
                            <h3><span class="counter">17</span><!-- /.counter -->+</h3>
                            <p>Expérience de voyage</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-2 col-md-6 -->
                    <div class="col-xl-2 col-md-6 justify-content-xl-end text-xl-right">
                        <div class="funfact-one__single">
                            <h3><span class="counter">88</span><!-- /.counter -->k</h3>
                            <p>Visiteurs contents</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->

        
<?php include  "footer.php";  ?>