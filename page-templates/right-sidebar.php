<?php
/*
* Template Name: Right Sidebar
*/

get_header(); ?>
     <?php 
        $render = ['banner'];
        $section = AFC_Buddy::prepare_sections($render);
        AFC_Buddy::render_fields($section);
    ?>

    <div class="container">
        <div class="row">

            <div class="col-md-8 wp-bp-content-width">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                    
                        <?php
                  
                            $sections = AFC_Buddy::prepare_sections();
                                                        
                            AFC_Buddy::render_fields($sections, ['banner']);

                        ?>

                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-4 wp-bp-sidebar-width">
                <?php get_sidebar(); ?>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php
get_footer();
