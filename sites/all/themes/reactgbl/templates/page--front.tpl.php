<?php if (@$messages): ?>
    <div id="messages">
	   <div class="section clearfix">
		<?php print $messages; ?>
		</div>
	</div> 
<?php endif; ?>	
 <!--header-->
<header class="pg-header">
	<div class="upper_header">
    	<div class="container">
        	<div class="row">
				<!-- logopart -->
				<div class="col-sm-3 col-xs-3 logo-part">
        		<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
						<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive rsp_image"/>
				</a>
				<?php endif; ?>
        		</div>
        		<!--end of logopart -->
        		<!-- logo-right-part -->
        		<div class="col-sm-9 col-xs-9">
        			 <div class="row top-nav-signup-part">   
        			 	<div class="col-md-4 col-sm-6 col-xs-5"><!-- sign in part -->
        			 		<div class="row sign-up-part">
							<?php 
								$tree = menu_tree_output(menu_tree_all_data('user-menu'));
								print drupal_render($tree);
							?>
							</div>  									 		
        			 	</div><!--end of sign in part -->
        			 	<div class="col-md-3 col-sm-6 col-xs-7"><!-- language currency part -->
        			 		<!--<div class="row select-part">
        			 			<div class="col-sm-6 col-xs-6">
        			 				<select class="select-box">	
        			 					<option>-language-</option>	        			 			
		        			 			<option>English</option>
		        			 			<option>french</option>        			 			
		        			 		</select>
		        			 	</div>
        			 			<div class="col-sm-6 col-xs-6">
        			 				<select class="select-box">
		        			 			<option>-currency-</option>
		        			 			<option>Doller</option><!-- <i class="fa fa-dollar"></i> -->
		        			 			<!--<option>Eur</option><!-- <i class="fa fa-eur"></i> -->
		        			 			<!--<option>gbp</option><!-- <i class="fa fa-gbp"></i> -->
		        			 		<!--</select>
        			 			</div>
        			 		</div>-->
        			 	</div><!-- ebnd of language currency part -->
        			 </div>        			 
        			 <div class="row serarch-part-outer"><!-- serch- cart part -->
        			  	<div class="col-sm-6 col-xs-6">
	        			 	<div class="input-group serch-part">					     
						      <input type="text" class="form-control" placeholder="Search for...">
						       <span class="input-group-btn">
						        <button class="btn btn-default search-btn" type="button"><i class="fa fa-search"></i></button>
						      </span>
						    </div><!-- /input-group -->
					    </div>
					    <div class="col-sm-6 col-xs-6">
						    <div class="cart-box">
						    	<div class="input-group">
						    		<div class="form-control cart-box-inner" aria-label="Text input with segmented button dropdown">
						    			<i class="fa fa-shopping-cart"></i><span>Cart Item</span>
						    		</div>						    		
						    		<div class="input-group-btn">
						    			<button class="btn btn-default dropdown-toggle" aria-expanded="false" data-toggle="dropdown" type="button">
											<span class="caret"></span>
											<span class="sr-only">Toggle Dropdown</span>
										</button>
										<ul class="dropdown-menu dropdown-menu-right cart-drop-down-part"  role="menu">
											 <div class="item-part-outer">
											 	<div class="cart-iem-box item-group clearfix">
											 		 <div class="cart-item-pic"><img src="<?php print $directory;?>/images/product-pic-item.png" alt="" /></div>
											 		 <div class="catr-item-details">
											 		 	<h4>product title <sup>2</sup></h4>
											 		 	<p>um dolor sit amet, consectetur a</p>
											 		 	<div class="price-text"><span>Price : </span><span>$5</span></div>
											 		 	<div class="qty-text"><span>Qty</span><input type="text" class="" /></div>
											 		 </div>
											 	</div>
											 	<div class="cart-iem-box item-group clearfix">
											 		<div class="cart-item-pic"><img src="<?php print $directory;?>/imagesproduct-pic-item2.png" alt="" /></div>
											 		 <div class="catr-item-details">
											 		 	<h4>product title <sup>2</sup></h4>
											 		 	<p>um dolor sit amet, consectetur a um dolor sit amet, consectetonsectetur a</p>
											 		 	<div class="price-text"><span>Price : </span><span>$5</span></div>
											 		 	<div class="qty-text"><span>Qty</span><input type="text" class="" /></div>
											 		 </div>
											 	</div>
											 </div>
											 <div class="total-ruppes"><span>Total : </span><span>$</span></div>
											 <a href="#" class="submit-rupees">Checkout</a>
										</ul>
								   </div>
						   		 </div>
	        			 	</div>
        			 </div><!--end of serch- cart part -->
        		</div>
           		 </div>
           	 </div>
            <div class="row"><!-- main navigation part -->
            		<div class="col-sm-9 col-xs-12 col-md-9 col-md-offset-3 col-sm-offset-3">
            			<div class="navbar-header toggle-header text-right">                            
                             <button type="button" class="navbar-toggle main-nav-collapse" data-toggle="collapse" data-target="#top_nav"> 
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                    
                        </div>
            				<div class="collapse navbar-collapse  navigation-part" id="top_nav">
							
							<?php if ($main_menu): ?>
							  <div id="main-menu" class="navigation">
								<?php print theme('links__system_main_menu', array(
								  'links' => $main_menu,
								  'attributes' => array(
									'id' => 'main-menu-links',
									'class' => array('nav', 'navbar-nav'),
								  ),
								  'heading' => array(
									'text' => t('Main menu'),
									'level' => 'h2',
									'class' => array('element-invisible'),
								  ),
								)); ?>
							  </div> <!-- /#main-menu -->
							<?php endif; ?>  
								
                   			 </div>  
            		</div>
            	  
            </div><!--end of  main navigation part -->
        </div>
    </div>
	       	
</header>
 <!-- header -->
 
 <section  class="banner-section">
	<div class="container md-section"> 
            	<div class="news_slider_container">
            		<div class="row"> 
                	<!-- main slider carousel -->
                	<div class="col-md-3 col-sm-3 side-nav">
                		<div class="toggle-header">                        
                			<div class="online-shop2 navbar-toggle" data-toggle="collapse" data-target="#left-nav">
	                			<span>Shop Online</span><span class="colpas-nav"><i class="fa fa-bars"></i></span>
	                		</div>
	                		<div class="online-shop">
	                			<span>Shop Online</span><span class="colpas-nav"><i class="fa fa-bars"></i></span>
	                		</div>
                		 </div>
                		 <div class="collapse navbar-collapse" id="left-nav">
	                		<ul class="shop-list">
	                			<li><a href="#">Gift Hampers</a></li>
	                			<li><a href="#">Delicatessen</a></li>
	                			<li><a href="#">Health</a></li>
	                			<li><a href="#">International Cuisine</a></li>
	                			<li><a href="#">Fruits &amp; Vegetables</a></li>
	                			<li><a href="#">Confectionary &amp; Desserts</a></li>
	                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                			<li><a href="#">Eggs &amp; Meats</a></li>
	                			<li><a href="#">Snacks &amp; Appetisers</a></li>
	                			<li><a href="#">Breakfast</a></li>
	                			<li><a href="#">Indian Grocery</a></li>
	                			<li><a href="#">Beverages</a></li>
	                			<li><a href="#">Ready To Eat &amp; Cook </a></li>
	                			<li><a href="#">Cooking Aids &amp; Books</a></li>
	                			
	                		</ul>
                		</div>
                	</div>
                    <div class="col-md-9 col-sm-9" class="carousel-bounding-box">
                       <div class="row">
                      	 	<div class="col-md-12">
                      	 		<div class="slider-part">
                       				 <div id="myCarousel" class="carousel slide">
                            <!-- main slider carousel items -->
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">
                                    <!-- <div class="carousel-caption md_slider_cap">
                                    	<h4><a href="#">Kiran Bedi urges people to vote for growth</a></h4>
                                        "Today is a historic day for Delhiites. It's the day for them to decide what type of Delhi they want," Bedi said after casting her vote. <a href="#" class="btn btn-link">More >></a>
                                    </div> -->
                                </div>
                                <div class="item" data-slide-number="1">
                                  <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">                                  
                                </div>
                                <div class="item" data-slide-number="2">
                                    <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">                                   
                                </div>
                                <div class="item" data-slide-number="3">
                                    <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">                                   
                                </div>
                                <div class="item" data-slide-number="4">
                                    <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">                                   
                                </div>
                            </div>
                            <!-- main slider carousel nav controls --> 
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    
                            <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                	 			</div>
                	 		</div>
                	   </div>
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
        <div class="row pasta-part">
        	 <div class="col-sm-8 col-xs-8">
        	 	<div class="pasta-box">        	 		
        	 		<img src="<?php print $directory;?>/images/pasta.jpg" alt="" />
        	 		<div class="special-discount">        	 			    	 			     	 			
        	 			<div class="row">
	        	 			<div class="col-sm-8 col-xs-8"><h4>Special discount on pastas </h4> </div>
	        	 			<div class="col-sm-4 col-xs-4 text-right"><a href="#" class="pasta-look"><span>Have a look </span><i class="fa fa-angle-right"></i></a></div>
	        	 		</div>
        	 		</div>
        	 	</div>        	 	
        	 </div>
        	 <div class="col-sm-4 col-xs-4">
        	 	<a href="#" class="fresh-fruit">
        	 		<img src="<?php print $directory;?>/images/fresh-fruit.jpg" alt="" />
        	 		<div class="hover-fruit">
        	 			fresh fruit
        	 		</div>
        	 	</a>
        	 	
        	 </div>
        </div>
    </div>
</section> 
<!-- end of "main_container" -->

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
		<div class="row bottom-productbig">
			<div class="col-sm-4 col-xs-6">
				<div class="product-big-box frst-box">
					<figure class="picture-of-product"><img src="<?php print $directory;?>/images/product1.jpg" alt="" /></figure>
					<h3>Kitchen Utensls</h3>					
					<div class="tick-box text-center"><a href="#"><i class="fa fa-check"></i></a></div>
				</div>				
			</div> 
			<div class="col-sm-4 col-xs-6">
				<div class="product-big-box second-box">
					<figure class="picture-of-product"><img src="<?php print $directory;?>/images/product2.jpg" alt="" /></figure>
					<h3>Regular Indian
						<span>Items</span></h3>
					<h5>lorem ipsum off</h5>
					<div class="tick-box text-center"><a href="#"><i class="fa fa-check"></i></a></div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-6">
				<div class="product-big-box third-box">
					<figure class="picture-of-product"><img src="<?php print $directory;?>/images/product3.jpg" alt="" /></figure>
					<h3>Traditional Spices</h3>
					<h5>get up to 25% off</h5>
					<div class="tick-box text-center"><a href="#"><i class="fa fa-check"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer start -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-4 col-xs-6">
				<h4>About live </h4>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">lorem ipsum sipunm</a></li>					
					<li><a href="#">lorem ipsum</a></li>
				</ul>
				</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<h4>Pages</h4> 
				<ul>
				<li><a href="#">Home</a></li>
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">lorem ipsum sipunm</a></li>					
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">lorem ipsum sipunm</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<h4>Pages</h4>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">lorem ipsum sipunm</a></li>					
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">lorem ipsum sipunm</a></li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-4 col-xs-6">
				<h4>Pages</h4>
				<ul>
					<li><a href="#">lorem</a></li>
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">lorem ipsum sipunm</a></li>					
					<li><a href="#">lorem ipsum</a></li>
					<li><a href="#">lorem ipsum sipunm</a></li>
				</ul>
			</div>
			<div class="col-md-4 col-sm-8 col-xs-6">
				<h4>Pages</h4>
				<div class="address-part">
					<p>lorem lorem ipsum lorem,<br />
						lorem lorem ipsum,<br />
						lorem lorem ipsum
					</p>
					<div class="telephone-num"><span>Tel : </span><span>+916565452</span></div>
				</div>
			</div>
		</div>						
	</div>
	<div class="footer-botom">
		<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-7 col-xs-12">
						<div class="copy-part">&copy;copyright</div>
					</div>
					<div class="col-md-4 col-sm-5 col-xs-12 text-right">
						<a href="#"><img src="<?php print $directory;?>/images/pay-pal.png" alt="" /></a>
						<a href="#"><img src="<?php print $directory;?>/images/master-card.png" alt="" /></a>
						<a href="#"><img src="<?php print $directory;?>/images/maestro-card.png" alt="" /></a>
						<a href="#"><img src="<?php print $directory;?>/images/visa-card.png" alt="" /></a>
					</div>
			</div>
			
			</div>
		</div>
</footer>
<!-- Footer end -->