<?php global $base_url; ?>
<?php global $user; ?>
 <!--header-->
<header class="pg-header">
	<div class="upper_header">
    	<div class="container">
        	<div class="row"><!-- logopart -->
        		<div class="col-sm-3 col-xs-3 logo-part">
        		<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
						<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive rsp_image"/>
				</a>
				<?php endif; ?>
        		</div>
        		<!--end of logopart -->
        		<!-- logo-right-part -->
        		<div class="col-sm-6 col-xs-9 col-md-offset-3">
        			 <div class="row top-nav-signup-part"><!-- top nav part -->        			 	 
        			 	<div class="col-md-8 col-sm-6 col-xs-12 col-md-offset-4"><!-- sign in part -->
        			 		<div class="row sign-up-part">
        			 		<?php 
								$tree = menu_tree_output(menu_tree_all_data('user-menu'));
								print drupal_render($tree);
							?>
							<div class="col-sm-4 col-xs-4"><div class="sign_in"><div class="btn-group dropdown"><a href="<?php print $base_url.'/user/'.$user->uid;?>/wishlist" type="button" class="btn btn-default"><i class="fa fa-gift"></i><span>Wishlist</span></a></div></div></div
        			 		</div>     									 		
        			 	</div><!--end of sign in part -->        			 
        			 </div>        			 
        			 <div class="row serarch-part-outer"><!-- serch- cart part -->
        			  	<div class="col-sm-9 col-xs-8">
	        			 	<div class="input-group serch-part">					     
						      <!--<input type="text" class="form-control" placeholder="Search for...">
						       <span class="input-group-btn">
						        <button class="btn btn-default search-btn" type="button"><i class="fa fa-search"></i></button>
						      </span>-->
							  <?php print render($search_bar); ?>
						    </div><!-- /input-group -->
					    </div>
					    <div class="col-sm-3 col-xs-4">
						    <div class="cart-box">
						    	<div class="input-group">
						    		<div class="cart-btn">
						    			<div class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span>Cart Item</span></div>						    								    			
										<ul class="dropdown-menu dropdown-menu-right cart-drop-down-part">
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
											 		<div class="cart-item-pic"><img src="<?php print $directory;?>/images/product-pic-item2.png" alt="" /></div>
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
            <div class="row">

            	<div class="col-md-3 col-sm-3 side-nav">
                		<div class="toggle-header">                        
                			<div class="online-shop2 navbar-toggle" data-toggle="collapse" data-target="#left-nav">
	                			<span>Shop Online</span><span class="colpas-nav"><i class="fa fa-bars"></i></span>
	                		</div>
	                		<div class="online-shop">
	                			<span>Shop Online</span><span class="colpas-nav"><i class="fa fa-bars"></i></span>
	                		</div>
                		 </div>
						 
						 
                		 <div class="collapse navbar-collapse inner-side-nav" id="left-nav">
	                		<?php 
								$category_menu = menu_tree_output(menu_tree_all_data('menu-product-category-menu'));
								print @drupal_render($category_menu);
							?>

                		</div>
                	</div>
            	<!-- main navigation part -->
            		<div class="col-sm-9 col-xs-12 col-md-9 ">
            			<div class="navbar-header toggle-header text-right">                            
                             <button type="button" class="navbar-toggle main-nav-collapse" data-toggle="collapse" data-target="#top_nav"> 
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                    
                        </div>
        				<div class="collapse navbar-collapse  navigation-part" id="top_nav">
                        	
							  <div id="main-menu" class="navigation">
								<?php 
								$main_menu = menu_tree_output(menu_tree_all_data('main-menu'));
								print @drupal_render($main_menu);
							   ?>
								</div> <!-- /#main-menu -->
							
               			 </div>  
            		</div>
            		
            	  
            </div><!--end of  main navigation part -->
        </div>
    </div>
	       	
</header>
 <!-- header -->
