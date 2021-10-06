<?php
get_header(); ?>
<!-- slider -->
<div class="container-fluid carousels">
    <div class="carousel__arrows">
        <div class="carousel__arrows--left">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="carousel__arrows--right">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
    <?php do_action( 'test_hook' ); ?>
    <div class="carousel__wapper">
        <?php dynamic_sidebar('sb_slider'); ?>
    </div>
</div>
<!-- slider -->
<div class="container">
    <div class="row">
        <?php $cols = Themebase_Global::get_page_sidebar(); ?>
        <?php get_sidebar('left'); ?>
        <!-- article -->
        <div class="medy-grid article">
            <div class="medy-container article__grid">
                <div class="medy-row">
                    <?php dynamic_sidebar('sb_article'); ?>
                </div>
            </div>
        </div>
        <!-- article -->

        <!-- sidebar -->
        <div class="medy-grid sidebar">
            <div class="medy-container sidebar__grid">
                <div class="medy-row">
                    <div class="medy-col medy-col-7 medy-t-col-12 sidebar__left">
                        <div class="sidebabr__countdown">
                            <?php dynamic_sidebar('sb_sidebar-left'); ?>
                        </div>
                    </div>
                    <div class="medy-col medy-col-5 medy-t-col-12 sidebar__right">
                        <?php dynamic_sidebar('sb_sidebar-right'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- sidebar -->

        <!-- Product -->
        <div class="medy-grid product">
            <div class="medy-container product__grid">
                <div class="product__title">
                    <h3>PRODUCTS</h3>
                    <h4>Top Selling</h4>
                    <div class="arrow-product">
                        <button class="arrow-left"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="50" height="60">
                                <path fill-rule="evenodd"
                                    d="M15.28 5.22a.75.75 0 00-1.06 0l-6.25 6.25a.75.75 0 000 1.06l6.25 6.25a.75.75 0 101.06-1.06L9.56 12l5.72-5.72a.75.75 0 000-1.06z">
                                </path>
                            </svg></button>
                        <button class="arrow-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                width="50" height="60">
                                <path fill-rule="evenodd"
                                    d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z">
                                </path>
                            </svg></button>
                    </div>
                </div>
                <div class="product__item">
                    <?php dynamic_sidebar('sb_product'); ?>
                </div>
            </div>
        </div>
        <!-- Product -->

    </div><!-- End row-->
</div><!-- End container-->

    <!-- news -->
    <div class="medy-grid news">
        <div class="medy-container news__grid">
            <div class="news__title">
                <h3>hot news</h3>
                <h4>Latest News</h4>
            </div>
            <div class="news__items">
                <?php dynamic_sidebar('sb_news'); ?>
            </div>
        </div>
    </div>
    <!-- news -->

<?php get_sidebar('right'); ?>
<?php get_footer(); ?>