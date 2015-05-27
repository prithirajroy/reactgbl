<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<div class="row">
	 	<div class="col-md-12">
	 		<div class="slider-part">
				 <div id="myCarousel" class="carousel slide">
    			<!-- main slider carousel items -->
    			<div class="carousel-inner">
                    <?php foreach ($rows as $id => $row): ?>
                        <div class="item <?php if($id==0){print 'active';} ?>" data-slide-number="<?php print $id; ?>">
                            <?php //$fid = strip_tags($view->render_field('field_deal_image-fid', $id)); 
                            //$fid = file_load($fid)->uri;
                            //$fid = image_style_path('deal_style', $fid);
                            print $view->render_field('field_deal_image', $id);
                            ?>
                            <?php /* <img src="<?php print $fid ?>" alt="<?php $view->render_field('field_deal_image-alt', $id); ?>" title="<?php $view->render_field('field_deal_image-title', $id); ?>" class="img-responsive rsp_image"> */ ?>
                            <div class="carousel-caption md_slider_cap">
                            	<h4><a href="#"><?php print $view->render_field('title', $id); ?></a></h4>
                                <?php print $view->render_field('body', $id); ?> <a href="#" class="btn btn-link">More >></a>
                            </div>                                   
                        </div>
                    <?php endforeach; ?>
    			</div>
    			<!-- main slider carousel nav controls --> 
    			<?php if(!empty($rows)){  ?>
    			<a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>

    			<a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
    			<?php }  ?>
			</div>
			</div>
		</div>
</div>

<script type="text/javascript">
  /* jQuery(document).ready(function(){
  		alert('hiii');
  		jQuery('.carousel-inner > img').each(function(){
		  	alert(jQuery(this).attr('src'));
		  	jQuery(this).addClass('img-responsive rsp_image');
		});
  }); */
  
</script>

