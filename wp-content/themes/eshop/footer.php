<?php 

    global $eshop_theme_options;

?>


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <h4>Information</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="index.html#about">About</a>
                            </li>
                            <li>
                                <a href="payment.html">Payment</a>
                            </li>
                            <li>
                                <a href="delivery.html">Delivery</a>
                            </li>
                            <li>
                                <a href="category.html">Category</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-6">
                        <h4>Working hours</h4>
                        <ul class="list-unstyled">
                            <li>
                                <b>Working mode</b>
                            </li>
                            <li>
                                09:00 – 17:40
                                <br>
                                seven days a week
                            </li>
                            <li>
                                <b>Delivery</b>
                            </li>
                            <li>
                                Free shipping across 
                                <br>
                                Astana city
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-6">
                        <h4>Contacts</h4>
                        <ul class="list-unstyled">
                            <li>
                                <b>Phone numbers</b>
                            </li>
                            <li>
                                <?php if ( ! empty( $eshop_theme_options['phone'] ) ): ?>
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                    <a 
                                        href="tel:+<?php echo str_replace( 
                                            array( ' ', '-', '+' ), 
                                            array( '', '', '' ), 
                                            $eshop_theme_options['phone'] 
                                        ) ?>" 
                                        class="ms-2"
                                    >
                                        <?php echo $eshop_theme_options['phone'] ?>
                                    </a> - Akyk
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if ( ! empty( $eshop_theme_options['second-phone'] ) ): ?>
                                    <i class="fa-solid fa-mobile-screen-button"></i>
                                    <a 
                                        href="tel:+<?php echo str_replace( 
                                            array( ' ', '-', '+' ), 
                                            array( '', '', '' ), 
                                            $eshop_theme_options['second-phone'] 
                                        ) ?>" 
                                        class="ms-2"
                                    >
                                        <?php echo $eshop_theme_options['second-phone'] ?>
                                    </a> - Bakytjan
                                <?php endif; ?>
                            </li>
                            <li>
                                <b>Address</b>
                            </li>
                            <li>
                                Astana city, Bogenbay av. 6/5, 
                                <br>
                                TCM Etalon, 1A row, 15th place
                            </li>
                            <!-- <li>
                                <?php if ( ! empty( $eshop_theme_options['address'] ) ): ?>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span class="ms-2"><?php echo $eshop_theme_options['address'] ?></span>
                                <?php endif; ?>
                            </li> -->
                        </ul>
                    </div>

                    <div class="col-md-3 col-6">
                        <h4>Follow us</h4>
                        <ul class="footer-icons">
                            <?php if ( ! empty( $eshop_theme_options['whatsapp'] ) ): ?>
                                <li>
                                    <a href="<?php echo $eshop_theme_options['whatsapp'] ?>">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( ! empty( $eshop_theme_options['telegram'] ) ): ?>
                                <li>
                                    <a href="<?php echo $eshop_theme_options['telegram'] ?>">
                                        <i class="fa-brands fa-telegram"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( ! empty( $eshop_theme_options['instagram'] ) ): ?>
                                <li>
                                    <a href="<?php echo $eshop_theme_options['instagram'] ?>">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <?php if ( ! empty( $eshop_theme_options['tiktok'] ) ): ?>
                                <li>
                                    <a href="<?php echo $eshop_theme_options['tiktok'] ?>">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <button id="top">
        <i class="fa-solid fa-angles-up"></i>
    </button>
    
    <?php wp_footer(); ?>
    
</body>
</html>