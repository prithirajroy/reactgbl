<?php if (@$messages): ?>
    <div id="messages">
	   <div class="section clearfix">
		<?php print $messages; ?>
		</div>
	</div> 
<?php endif; ?>	


 <?php print render($page['header']); ?>
<section  class="banner-section">
	<div class="container md-section"> 
            	<div class="news_slider_container">
            		<div class="row"> 
                	<!-- main slider carousel -->
                	
                    <div class="col-md-9 col-sm-9 col-md-offset-3 col-sm-offset-3" class="carousel-bounding-box">
                       <?php $block = module_invoke('views', 'block_view', 'home_page_deal-block');  ?>
                       <?php print render ($block);  ?>
                	   <div class="row shop-more-list">
                	   	   <div class="col-md-3 col-sm-3 col-xs-3">
                	   	   		<a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a>
                	   	   </div>
                	   	   <div class="col-md-3 col-sm-3 col-xs-3">
                	   	   		<a href="#"><img src="<?php print $directory;?>/images/top-static-img-2.jpg" alt="" /></a>
                	   	   </div>
                	   	   <div class="col-md-3 col-sm-3 col-xs-3">
                	   	   		<a href="#"><img src="<?php print $directory;?>/images/top-static-img-3.jpg" alt="" /></a>
                	   	   </div>
                	   	   <div class="col-md-3 col-sm-3 col-xs-3">
                	   	   		<a href="#"><img src="<?php print $directory;?>/images/top-static-img-4.jpg" alt="" /></a>	
                	   	   </div>
                	   </div>
                	</div>
                </div>
              <!-- end of "col-sm-7" -->                   
        </div>   <!-- end of "row" -->        
    </div>
</section> <!-- end of "main_container" -->
<section class="sfeatured-product"> 
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>Featured Product</h2>
			</div>
		</div>
		
		<?php print render(module_invoke('views', 'block_view', 'home_page_featured_block-block'));  ?>

	</div>
</section>


<?php if ($page['footer']): ?>

      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    
  <?php endif; ?>     

