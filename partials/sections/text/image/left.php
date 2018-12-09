<div class="row">
    <section class="card shadow features-3 text-center">
        <div class="container">
            <div class="row justify-center mt-5">
                <div class="col-md-6 pl-2 pr-2 pt-2 text-center" >
                    <img class="mb-4 img-fluid" src="<?php echo esc_html_e( $content['image']['url'] ); ?>" >
                </div>
                <div class="col-md-6 text-left" >
                    <a href="<?php echo esc_html_e( $content['link'] ); ?>"><h2><?php echo esc_html_e( $content['title'] ); ?></h2></a>
                    <p class="mt-2 mb-2">
                        <?php echo esc_html_e( $content['main_text'] ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>