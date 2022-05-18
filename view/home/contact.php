<?php include  "header.php";  ?>


       <section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">
            <div class="container">
                <h2>Contacter</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="#">Accueil</a></li>
                    <li><span>Contacte</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-info-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <i class="tripo-icon-placeholder"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p>Höguk sokak Kösk caddesi, Kösk mahallesi no 4</br>
								34000 Istanbul
								</br> 
								Turquie</p>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <i class="tripo-icon-phone-call"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p>Portable: <a href="tel:06-07-98-12-12"> 06-07-98-12-12</a> <br>
                                    Fixe: <a href="tel:+33-4-08-34-54-55">+33-4-08-34-54-55</a></p>
                                    Fixe Turquie : <a href="tel:+90-545-346-54-55">+90-545-346-54-55</a></p>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="contact-info-one__single">
                            <div class="contact-info-one__icon">
                                <i class="tripo-icon-message"></i>
                            </div><!-- /.contact-info-one__icon -->
                            <div class="contact-info-one__content">
                                <p><a href="mailto:besoinaide@gmail.com">besoinaide@gmail.com</a> <br>
                                    <a href="mailto:info@tripo.com">info@tripo.com</a></p>
                            </div><!-- /.contact-info-one__content -->
                        </div><!-- /.contact-info-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-one__content">
                            <div class="block-title text-left">
                                <p>Contactez nous</p>
                                <h3>Avez vous des questions? </h3>
                            </div><!-- /.block-title -->
                            <div class="contact-one__content-text">
                                <p>N'hésitez pas à nous contacter pour toutes questions sur nos voyages proposés. On vous attend!</p>
                            </div><!-- /.contact-one__content-text -->
                            <div class="contact-one__social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div><!-- /.contact-one__social -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <form action="<?php echo BASE_URL; ?>home&action=contactStore" class="contact-one__form" method="post">
                            <div class="row low-gutters">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="name" placeholder="Votre nom" required>
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="email" placeholder="Adresse électronique" required>
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="phone" placeholder="Numéro de téléphone">
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="subject" placeholder="Sujet">
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <textarea name="message" placeholder="Ecriver votre message" required></textarea>
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-12 -->
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <button type="submit" class="thm-btn contact-one__btn">Envoyer</button><!-- /.thm-btn contact-one__btn -->
                                    </div><!-- /.input-group -->
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row low-gutters -->
                        </form>
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

<?php include  "footer.php";  ?>