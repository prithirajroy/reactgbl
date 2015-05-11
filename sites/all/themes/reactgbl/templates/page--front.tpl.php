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
        	<div class="row"><!-- logopart -->
        		<div class="col-sm-3 col-xs-3 logo-part">
        			<img src="<?php print $directory;?>/images/logo.png" class="img-responsive rsp_image">
        		</div>
        		<!--end of logopart -->
        		<!-- logo-right-part -->
        		<div class="col-sm-6 col-xs-9 col-md-offset-3">
        			 <div class="row top-nav-signup-part"><!-- top nav part -->        			 	 
        			 	<div class="col-md-8 col-sm-6 col-xs-12 col-md-offset-4"><!-- sign in part -->
        			 		<div class="row sign-up-part">
        			 			<div class="col-sm-4 col-xs-4">
        			 				<div class="sign_in">        			 					
        			 					<div class="btn-group dropdown">
        			 						 <a href="#" type="button" class="btn btn-default"> <i class="fa fa-user"></i><span>Sign In</span></a>
											  <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											    <span class="caret"></span>
											    <span class="sr-only">Toggle Dropdown</span>
											  </button>        			 						
											  <ul class="dropdown-menu" role="menu">
											 fgjfjghj
											  </ul> -->
        			 						</div>										
									</div> 
        			 			</div>
        			 			<div class="col-sm-4 col-xs-4">
        			 				<div class="sign_in">
										<a class="btn btn-default" href="#">									
											<i class="fa fa-lock"></i>
											<span>Register</span>								
										</a>
									</div>  
        			 			</div>
        			 			<div class="col-sm-4 col-xs-4">
        			 				<div class="sign_in">
										<a class="btn btn-default" href="#">									
											<i class="fa fa-gift"></i>
											<span>Wish-list</span>							
										</a>
									</div> 
        			 			</div>
        			 		</div>     									 		
        			 	</div><!--end of sign in part -->        			 
        			 </div>        			 
        			 <div class="row serarch-part-outer"><!-- serch- cart part -->
        			  	<div class="col-sm-9 col-xs-8">
	        			 	<div class="input-group serch-part">					     
						      <input type="text" class="form-control" placeholder="Search for...">
						       <span class="input-group-btn">
						        <button class="btn btn-default search-btn" type="button"><i class="fa fa-search"></i></button>
						      </span>
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
                		 <div class="collapse navbar-collapse" id="left-nav">
	                		<ul class="shop-list">
	                			<li><a href="#">Gift Hampers</a></li>
	                			<li><a href="#">Delicatessen</a><dt></dt>
	                				 <ul class="mega-drop-down">
	                				 	<h2><a href="#">Delicatessen</a></h2>
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/product-pic-item.png" alt="" /></a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>		
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/product-pic-item.png" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>	
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>		                					 	
	                				</ul>
	                					 	  
	                			</li>
	                			<li><a href="#">Health</a><dt></dt>
	                				 <ul class="mega-drop-down">
	                				 	<h2><a href="#">Health</a></h2>
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>		
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>			                					 	
	                				</ul>
	                					 	  
	                			</li>
	                			<li><a href="#">International Cuisine</a>
	                				
	                				<ul class="mega-drop-down">
	                				 	<h2><a href="#">International Cuisine</a></h2>
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/product-pic-item.png" alt="" /></a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>		
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/product-pic-item.png" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>	
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>		                					 	
	                				</ul>
	                			</li>
	                			<li><a href="#">Fruits &amp; Vegetables</a>
	                				<ul class="mega-drop-down">
	                				 	<h2><a href="#">Fruits &amp; Vegetables</a></h2>
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/product-pic-item.png" alt="" /></a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>		
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/product-pic-item.png" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>	
	                				 	<div class="row">
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#">International Cuisine</a></li>
						                			<li><a href="#">Fruits &amp; Vegetables</a></li>
						                			<li><a href="#">Confectionary &amp; Desserts</a></li>
						                			<li><a href="#">Cheese &amp; Dairy</a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
	                				 			</ul>
	                				 		</li>
	                				 		<li class="col-md-3 col-sm-6">
	                				 			<ul>
	                				 				<li><a href="#"><img src="<?php print $directory;?>/images/top-static-img-1.jpg" alt="" /></a></li>
						                			
	                				 			</ul>
	                				 		</li>
	                				 	</div>		                					 	
	                				</ul>
	                				
	                			</li>
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
                        	<ul class="nav navbar-nav">  <!-- nav-justified -->
                                <li class="active"><a href="#" title="">Home</a></li>
                                <li><a href="#" title="">About us</a></li> 
                                <li><a href="#" title="">Profiles</a></li>  	                               
                                <li><a href="#" title="">Links1</a></li>
                                <li><a href="#" title="">Portfolio</a></li>
                                <li><a href="#" title="">contact us</a></li>
                                 <!-- <li class="dropdown">  
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inmate initiatives<span class="caret"></span></a>  
                                    <ul class="dropdown-menu"> 
                                        <li><a href="#" title="fall back">fall back</a></li> 
                                        <li><a href="#" title="men s.t.o.p">men S.t.o.p</a></li>
                                        <li><a href="#" title="the mentoring project">the mentoring Project</a></li>
                                        <li class="last"><a href="#" title="letter to the streets">letter to the streets</a></li>  
                                    </ul>  
                                </li> -->
                         	</ul>
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
                	
                    <div class="col-md-9 col-sm-9 col-md-offset-3 col-sm-offset-3" class="carousel-bounding-box">
                       <div class="row">
                      	 	<div class="col-md-12">
                      	 		<div class="slider-part">
                       				 <div id="myCarousel" class="carousel slide">
                            <!-- main slider carousel items -->
                            <div class="carousel-inner">
                                <div class="active item" data-slide-number="0">
                                    <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">
                                    <div class="carousel-caption md_slider_cap">
                                    	<h4><a href="#">Some urges people to vote for growth</a></h4>
                                        "Today is a historic day for Delhiites. It's the day for them to decide what type of Delhi they want," Bedi said after casting her vote. <a href="#" class="btn btn-link">More >></a>
                                    </div>
                                </div>
                                <div class="item" data-slide-number="1">
                                  <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">                                  
                                </div>
                                <div class="item" data-slide-number="2">
                                    <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">   
                                     <div class="carousel-caption md_slider_cap">
                                    	<h4><a href="#">Some urges people to vote for growth</a></h4>
                                        "Today is a historic day for Delhiites. It's the day for them to decide what type of Delhi they want," Bedi said after casting her vote. <a href="#" class="btn btn-link">More >></a>
                                    </div>                                
                                </div>
                                <div class="item" data-slide-number="3">
                                    <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">    
                                    <div class="carousel-caption md_slider_cap">
                                    	<h4><a href="#">Some urges people to vote for growth</a></h4>
                                        "Today is a historic day for Delhiites. It's the day for them to decide what type of Delhi they want," Bedi said after casting her vote. <a href="#" class="btn btn-link">More >></a>
                                    </div>                               
                                </div>
                                <div class="item" data-slide-number="4">
                                    <img src="<?php print $directory;?>/images/slider-pic.jpg" class="img-responsive rsp_image">
                                    <div class="carousel-caption md_slider_cap">
                                    	<h4><a href="#">Some urges people to vote for growth</a></h4>
                                        "Today is a historic day for Delhiites. It's the day for them to decide what type of Delhi they want," Bedi said after casting her vote. <a href="#" class="btn btn-link">More >></a>
                                    </div>                                   
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


<footer class="footer"><!-- Footer start -->
	<div class="container">
		<div class="row">
			 <div class="col-md-6">
			 	   <ul class="footer-link">
			 	   		 <li class="active"><a href="#" title="">Home</a></li>
                        <li><a href="#" title="">About us</a></li> 
                        <li><a href="#" title="">Profiles</a></li>  	                               
                        <li><a href="#" title="">Links1</a></li>
                        <li><a href="#" title="">Portfolio</a></li>
                        <li><a href="#" title="">contact us</a></li>
			 	   </ul>
			 </div>
			 <div class="col-md-4 col-sm-6 col-xs-12 transuctiona text-right">
					<a href="#"><img src="<?php print $directory;?>/images/pay-pal.png" alt="" /></a>
					<a href="#"><img src="<?php print $directory;?>/images/master-card.png" alt="" /></a>
					<a href="#"><img src="<?php print $directory;?>/images/maestro-card.png" alt="" /></a>
					<a href="#"><img src="<?php print $directory;?>/images/visa-card.png" alt="" /></a>	
				</div>
			 <div class="col-md-2 col-sm-6 social-part text-right">
			 	<a href="#"><i class="fa fa-facebook-square"></i></a>
				<a href="#"><i class="fa fa-twitter-square"></i></a>
				<a href="#"><i class="fa fa-google-plus-square"></i></a>
				<a href="#"><i class="fa fa-pinterest-square"></i></a>
				
			 </div>
		</div>						
	</div>
	<div class="footer-botom">
		<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-6 text-center">
					<div class="copy-part">&copy;copyright</div> 
				 	 <ul class="footer-link"> 	                               
	                	<li><a href="#" title="">Privacy Policy</a></li>
		                <li><a href="#" title="">Data Policy</a></li>
		                <li><a href="#" title="">Terms of Service</a></li>
	                </ul>
					</div>	
										
					
					
			</div>
			
			</div>
		</div>
</footer><!-- Footer end -->
