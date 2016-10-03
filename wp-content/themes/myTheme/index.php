<?php get_header(); ?>

    <section class="main-banner" id="home">
        <div class="container">
            <div class="row">
                <div class="main-banner__caption">
                    <div class="main-banner__general-caption"> <?php echo get_bloginfo('name'); ?></div>
                    <div class="main-banner__secondary-caption"> <?php echo get_bloginfo('description'); ?></div>
                    <div class="main-banner__social">
                        <a href="#" class="main-banner__social-link">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="main-banner__social-link">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="main-banner__social-link">
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="main-banner__social-link">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="section-title">
            <div class="container">
                <div class="row row--padding">
                    <span> <?php echo get_cat_name(1); ?></span>
                </div>
            </div>
        </div>

        <div class="container">

			<?php if ( have_posts() ) : query_posts('p=27');
				while ( have_posts() ) : the_post(); ?>
				<div class="row row--padding about__general-row">
                	<div class="col-md-4 cancel-padding">
                		<?php the_post_thumbnail('full', array('class' => 'about__photo')); ?>
                	</div>

                	<div class="col-md-8 cancel-padding">
                		<p class="about__text-title"> <?php the_title(); ?></p>
                		<p> <?php the_content(); ?></p>
                	</div>
            	</div>
			<?php endwhile; endif; wp_reset_query(); ?>

            <div class="row">
            	<?php if ( have_posts() ) : query_posts('cat=4');
            		while ( have_posts() ) : the_post(); ?>
            		<div class="col-md-4 about--column-padding">
	                    <h3> <?php the_title(); ?></h3>
	                    <?php the_content(); ?>
	                </div>
				<?php endwhile; endif; wp_reset_query(); ?>
        	</div>

        	<div class="row">
                <a href="#contact" class="button about__button">Hire me</a>
            </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="section-title">
            <div class="container">
                <div class="row row--padding">
                    <span> <?php echo get_cat_name(5); ?></span>
                </div>
            </div>
        </div>


			<div class="container">
	            <div class="row row--padding">
	                <h3 class="portfolio__subtitle">BLACK & WHITE</h3>
	                <div class="portfolio__section-desc">
	                	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
	                </div>
	            </div>
	        </div>

	        <div class="container-fluid">
	            <div class="row portfolio__items">
	                <div class="col-lg-4 portfolio__item--padding">
	                    <div class="portfolio__item">
	                        <img src="<?php bloginfo('template_url')?>/img/conceptual1.jpg" alt="photo1">
	                    </div>
	                </div>
	                <div class="col-lg-4 portfolio__item--padding">
	                    <div class="portfolio__item">
	                        <img src="<?php bloginfo('template_url')?>/img/conceptual2.jpg" alt="photo2">
	                    </div>
	                </div>
	                <div class="col-lg-4 portfolio__item--padding">
	                    <div class="portfolio__item">
	                        <img src="<?php bloginfo('template_url')?>/img/conceptual3.jpg" alt="photo3">
	                    </div>
	                </div>
	                <div class="col-lg-4 portfolio__item--padding">
	                    <div class="portfolio__item">
	                        <img src="<?php bloginfo('template_url')?>/img/conceptual4.jpg" alt="photo4">
	                    </div>
	                </div>
	            </div>
	        </div>
        

        <div class="container">
            <div class="row row--padding">
                <h3 class="portfolio__subtitle">Black & White</h3>
                <div class="portfolio__section-desc">
                	<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row portfolio__items">
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/black1.jpg" alt="black photo1">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/black2.jpg" alt="black photo2">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/black3.jpg" alt="black photo3">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/black4.jpg" alt="black photo4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="section-title">
            <div class="container">
                <div class="row row--padding">
                    <span>Latest blog posts</span>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
				<div class="col-md-6 blog__item--padding">
	                <figure class="blog__item">
	                    <img src="<?php bloginfo('template_url')?>/img/blog1.jpg" alt="blog photo1">
	                    <figcaption class="blog__item-caption">
	                        <div class="blog__item-panel">
	                            <div class="blog__item-info">21 may 2013 &nbsp; | &nbsp;  Macro, photography</div>
	                            <div class="blog__item-likes">27 <i class="fa fa-heart" aria-hidden="true"></i></div>
	                        </div>
	                        <div class="blog__item-description">
	                            <h3 class="blog__item-title">Tortor Ullamcorper Fringilla Cras Euismod</h3>
	                            <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
	                        </div>
	                    </figcaption>
	                </figure>
	            </div>

                <div class="col-md-6 blog__item--padding">
                    <figure class="blog__item">
                        <img src="<?php bloginfo('template_url')?>/img/blog2.jpg"  alt="blog photo2">
                        <figcaption class="blog__item-caption">
                            <div class="blog__item-panel">
                                <div class="blog__item-info">15 may 2013 &nbsp; | &nbsp;  Macro, photography</div>
                                <div class="blog__item-likes">17 <i class="fa fa-heart" aria-hidden="true"></i></div>
                            </div>
                            <div class="blog__item-description">
                                <h3 class="blog__item-title">Maecenas sed diam eget risus varius blandit</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 blog__item--padding">
                    <figure class="blog__item">
                        <img src="<?php bloginfo('template_url')?>/img/blog3.jpg"  alt="blog photo3">
                        <figcaption class="blog__item-caption">
                            <div class="blog__item-panel">
                                <div class="blog__item-info">11 may 2013 &nbsp; | &nbsp;  Macro, photography</div>
                                <div class="blog__item-likes">53 <i class="fa fa-heart" aria-hidden="true"></i></div>
                            </div>
                            <div class="blog__item-description">
                                <h3 class="blog__item-title">Risus Fermentum Malesuada Justo Tellus</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 blog__item--padding">
                    <figure class="blog__item">
                        <img src="<?php bloginfo('template_url')?>/img/blog4.jpg"  alt="blog photo4">
                        <figcaption class="blog__item-caption">
                            <div class="blog__item-panel">
                                <div class="blog__item-info">09 may 2013 &nbsp; | &nbsp;  Macro, photography</div>
                                <div class="blog__item-likes">35 <i class="fa fa-heart" aria-hidden="true"></i></div>
                            </div>
                            <div class="blog__item-description">
                                <h3 class="blog__item-title">Fringilla Parturient Consectetur Egestas Inceptos</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="section-title">
            <div class="container">
                <div class="row row--padding">
                    <span>Get in touch</span>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 contact--padding">
                    <form>
                        <input class="contact__field" type="text" placeholder="Your name">
                        <input class="contact__field" type="email" placeholder="E-mail">
                        <input class="contact__field" type="text" placeholder="The subject">
                        <textarea class="contact__field contact__textarea" placeholder="Your message"></textarea>
                        <button type="button" class="button">submit</button>
                    </form>
                </div>

                <div class="col-md-4 col-sm-5">
                    <div class="contact__details">
                        <h3 class="contact__details-title">Contact details</h3>
                        <p class="contact__detail-desc">Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia.</p>
                        <ul>
                            <li class="contact__info-item contact__address">Moonshine Street No: 14/05</li>
                            <li class="contact__info-item contact__phone">Light City, Jupiter</li>
                            <li class="contact__info-item contact__message">0247 541 65 87</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>