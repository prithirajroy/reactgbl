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
		<div class="row product-details-outer">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<figure class="product-pic"><img src="<?php print $directory;?>/images/Gateway_Deli._V326631907_.jpg" alt="" /></figure>
					<div class="product-details">
						<h4>Product title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
						<div class="rate-product">
							<span>$20</span>
							<span><strike>$25</strike> </span>
						</div>
					</div>
					
					<div class="add-to-cart-part">
						<a href="#" class="addto-cart"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a href="#" class="like-cart"><i class="fa fa-heart"></i></a>
						<a href="#" class="wish-cart"><i class="fa fa-gift"></i></a>
						
					</div>
				</div>			
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<figure class="product-pic"><img src="<?php print $directory;?>/images/Gateway_Eggs._V326631933_.jpg" alt="" /></figure>
					<div class="product-details">
						<h4>Product title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
						<div class="rate-product">
							<span>$20</span>
							<span><strike>$25</strike> </span>
						</div>
					</div>
					
					<div class="add-to-cart-part">
						<a href="#" class="addto-cart"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a href="#" class="like-cart"><i class="fa fa-heart"></i></a>
						<a href="#" class="wish-cart"><i class="fa fa-gift"></i></a>
						
					</div>
				</div>	
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<figure class="product-pic"><img src="<?php print $directory;?>/images/Gateway_Deli._V326631907_.jpg" alt="" /></figure>
					<div class="product-details">
						<h4>Product title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
						<div class="rate-product">
							<span>$20</span>
							<span><strike>$25</strike> </span>
						</div> 
					</div>
					
					<div class="add-to-cart-part">
						<a href="#" class="addto-cart"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a href="#" class="like-cart"><i class="fa fa-heart"></i></a>
						<a href="#" class="wish-cart"><i class="fa fa-gift"></i></a>
						
					</div>
				</div>	
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<figure class="product-pic"><img src="<?php print $directory;?>/images/Gateway_Fruit._V326631904_.jpg" alt="" /></figure>
					<div class="product-details">
						<h4>Product title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
						<div class="rate-product">
							<span>$20</span>
							<span><strike>$25</strike> </span>
						</div>
					</div>
					
					<div class="add-to-cart-part">
						<a href="#" class="addto-cart"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a href="#" class="like-cart"><i class="fa fa-heart"></i></a>
						<a href="#" class="wish-cart"><i class="fa fa-gift"></i></a>
						
					</div>
				</div>	
			</div>
		</div>		
		<div class="row product-details-outer">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<figure class="product-pic"><img src="<?php print $directory;?>/images/Gateway_Deli._V326631907_.jpg" alt="" /></figure>
					<div class="product-details">
						<h4>Product title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
						<div class="rate-product">
							<span>$20</span>
							<span><strike>$25</strike> </span>
						</div>
					</div>
					
					<div class="add-to-cart-part">
						<a href="#" class="addto-cart"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a href="#" class="like-cart"><i class="fa fa-heart"></i></a>
						<a href="#" class="wish-cart"><i class="fa fa-gift"></i></a>
						
					</div>
				</div>			
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<figure class="product-pic"><img src="<?php print $directory;?>/images/Gateway_Eggs._V326631933_.jpg" alt="" /></figure>
					<div class="product-details">
						<h4>Product title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
						<div class="rate-product">
							<span>$20</span>
							<span><strike>$25</strike> </span>
						</div>
					</div>
					
					<div class="add-to-cart-part">
						<a href="#" class="addto-cart"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a href="#" class="like-cart"><i class="fa fa-heart"></i></a>
						<a href="#" class="wish-cart"><i class="fa fa-gift"></i></a>
						
					</div>
				</div>	
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<figure class="product-pic"><img src="<?php print $directory;?>/images/Gateway_Deli._V326631907_.jpg" alt="" /></figure>
					<div class="product-details">
						<h4>Product title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
						<div class="rate-product">
							<span>$20</span>
							<span><strike>$25</strike> </span>
						</div> 
					</div>
					
					<div class="add-to-cart-part">
						<a href="#" class="addto-cart"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a href="#" class="like-cart"><i class="fa fa-heart"></i></a>
						<a href="#" class="wish-cart"><i class="fa fa-gift"></i></a>
						
					</div>
				</div>	
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<figure class="product-pic"><img src="<?php print $directory;?>/images/Gateway_Fruit._V326631904_.jpg" alt="" /></figure>
					<div class="product-details">
						<h4>Product title</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut </p>
						<div class="rate-product">
							<span>$20</span>
							<span><strike>$25</strike> </span>
						</div>
					</div>
					
					<div class="add-to-cart-part">
						<a href="#" class="addto-cart"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a href="#" class="like-cart"><i class="fa fa-heart"></i></a>
						<a href="#" class="wish-cart"><i class="fa fa-gift"></i></a>
						
					</div>
				</div>	
			</div>
		</div>	
	</div>
</section>


<?php if ($page['footer']): ?>

      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    
  <?php endif; ?>     

