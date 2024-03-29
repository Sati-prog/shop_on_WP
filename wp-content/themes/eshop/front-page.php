<?php get_header() ?>

        <main class="main">

            <?php 
                global $post;
                $slider = get_posts( array(

                    'post_type' => 'slider',
                    'order' => 'ASC', // порядок вывода слайдов от 0 до 4
                ) );
            ?>

            <?php if ( $slider ): ?>
                <div id="carousel" class="carousel slide carousel-fade">
                    <div class="carousel-indicators">
                        <?php for ($i = 0; $i < count($slider); $i ++): ?>
                            <button 
                                type="button" 
                                data-bs-target="#carousel" 
                                data-bs-slide-to="<?php echo $i ?>" 
                                <?php if ( $i == 0 ): ?>class="active"<?php endif; ?>
                                aria-current="true" 
                                aria-label="Slide <?php echo $i + 1 ?>"></button>
                        <?php endfor; ?>
                    </div>
                    <div class="carousel-inner">
                        <?php $i = 0; foreach($slider as $post): setup_postdata( $post ); ?>
                            <div class="carousel-item <?php if ($i == 0): ?>active<?php endif; ?>">
                                <img src="<?php the_post_thumbnail_url( 'full' ) ?>" class="d-block w-100" alt="<?php the_title() ?>">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2><?php the_title() ?></h2>
                                    <p><?php the_content( '' ) ?></p>
                                </div>
                            </div>
                        <?php $i++; endforeach; ?>
                    </div>
                    <button 
                        class="carousel-control-prev" 
                        type="button" 
                        data-bs-target="#carousel" 
                        data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                    </button>
                    <button 
                        class="carousel-control-next" 
                        type="button" 
                        data-bs-target="#carousel" 
                        data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                    </button>
                </div>
            <?php endif; ?>

            <section class="advantages">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="section-title">
                                <span>Our advantages</span>
                                <!-- <span>Наши преимущества</span> -->
                            </h2>
                        </div>
                    </div>

                    <div class="row gy-3 items">
                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <p>
                                    <i class="fas fa-shipping-fast"></i>
                                </p>
                                <p>Direct deliveries from brand manufacturers</p>
                                <!-- <p>Прямые поставки от производителей брендов</p> -->
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <p>
                                    <i class="fas fa-cubes"></i>
                                </p>
                                <p>Wide range of goods. More than 10 thousand items</p>
                                <!-- <p>Широкий ассортимент товаров. Более 10 тыс. наименований</p> -->
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <p>
                                    <i class="fas fa-hand-holding-usd"></i>
                                </p>
                                <p>Pleasant and competitive prices</p>
                                <!-- <p>Приятные и конкурентные цены</p> -->
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="item">
                                <p>
                                    <i class="fas fa-user-graduate"></i>
                                </p>
                                <p>Consultations from professionals</p>
                                <!-- <p>Консультации от профессионалов</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- https://woo.com/document/woocommerce-shortcodes/#product-category -->

            <section class="home-categories">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="section-title">
                                <span><?php _e( 'Categories', 'eshop' ) ?></span>
                                <!-- <span>категории товаров</span> -->
                            </h2>
                        </div>
                    </div>

                    <?php echo do_shortcode( '[product_categories]' ) ?>
                </div>
            </section>

            <section class="featured-products">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="section-title">
                                <span><?php _e( 'Featured products', 'eshop' ) ?></span>
                                <!-- <span>рекомендуемые товары</span> -->
                            </h2>
                        </div>
                    </div>

                    <?php echo do_shortcode( '[featured_products limit="8"]' ) ?>
                </div>
            </section>

            <section class="new-products">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="section-title">
                                <span><?php _e( 'Recent Products', 'eshop' ) ?></span>
                                <!-- <span>новинки</span> -->
                            </h2>
                        </div>
                    </div>

                    <?php echo do_shortcode( '[eshop_recent_products limit="8"]' ) ?>
                </div>
            </section>

            <section class="about-us" id="about">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-12">
                            <h2 class="section-title">
                                <span><?php _e( 'About us', 'eshop' ) ?></span>
                                <!-- <span>о нас</span> -->
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 mb-4 team-img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/team.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-9">
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Hic ipsum nulla in cum nam sunt quis exercitationem nemo 
                                recusandae neque explicabo a asperiores, aut harum vel, at quas ipsa nesciunt.
                            </p>
                            <p>Possimus iste cumque enim rerum facere tempora, illum numquam 
                                cupiditate nesciunt at doloribus, quas doloremque? Atque 
                                alias nobis tempora blanditiis voluptatum autem quis eligendi 
                                inventore nulla nostrum! Maiores, itaque explicabo?
                            </p>
                            <p>Magni vitae quaerat molestiae consequatur asperiores iste inventore 
                                hic accusantium quis id vel debitis ab quae eligendi corrupti nobis 
                                ipsa dignissimos commodi, assumenda incidunt blanditiis quisquam! 
                                Consectetur maxime laborum perspiciatis!
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <iframe 
                id="map"
                src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d625.3521269201859!2d71.39158175952458!3d51.17469326555298!3m2!1i1024!2i768!4f13.1!2m1!1z0LMu0JDRgdGC0LDQvdCwLCDQv9GALtCR0L7Qs9C10L3QsdCw0Y8gNi81INCi0KHQoCDQrdGC0LDQu9C-0L0gMdCQINGA0Y_QtCAxNSDQvNC10YHRgtC-!5e0!3m2!1sru!2skz!4v1687847791787!5m2!1sru!2skz" 
                width="100%" 
                height="450" 
                style="border:0; display: block;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </main>

<?php get_footer() ?>

