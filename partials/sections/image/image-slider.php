<?php 
$slides = $contents[$contents['acf_fc_layout']] ?? [];
if($slides) : ?>
<div class="row">
    <div class="col-md-12">
        <div id="image-section-image-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php foreach( $slides as $slide => $value ): ?>
                <li data-target="#image-section-image-slider" data-slide-to="<?php echo esc_html_e( $slide ); ?>" <?php if($slide==0) : ?>class="active"<?php endif;?>></li>      
                <?php 
                    endforeach; 
                ?>
            </ol>
            </pre>
            </pre>
            <div class="carousel-inner">
                <?php  foreach( $slides as $slide => $value): ?>                 
                    <div class="carousel-item<?php if($slide==0) : echo esc_html_e( ' active' ); endif; ?>">
                        <img src="<?php echo esc_html_e( $value['image']['url'] ); ?>" alt="<?php echo esc_html_e( $value['image']['alt'] ); ?>" />
                        <div class="container">
                            <?php
                                $text_align = '';
                        
                                switch($value['text_alignment']) {
                                    case 'left':
                                        $text_align = 'text-left';
                                        break;
                                    case 'center':
                                        break;
                                    case 'right':
                                        $text_align = 'text-right';
                                        break;
                                }
                            ?>
                            <div class="carousel-caption <?php echo esc_html_e( $text_align ); ?>">
                                <h1><?php echo esc_html_e( $value['title'] ); ?></h1>
                                <p><?php echo esc_html_e( $value['caption'] ); ?></p>
                                <?php 
                                    $button = $value['button']['button'];
                                    if($value['include_button']){
                                        include( get_template_directory() . '/partials/components/button.php');
                                    }
                                ?>
                            </div>
                        </div>                
                    </div><!-- item -->
                <?php  
                    endforeach; 		
                ?> 
            </div>
            <a class="carousel-control-prev" href="#image-section-image-slider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#image-section-image-slider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- /.col-md-12 -->
</div>
<!-- /.row -->
<?php endif; ?>