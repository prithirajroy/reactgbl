<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<section class="banner-section">
	<div class="container md-section">
		<div class="row">
			 <div class="col-md-3 col-sm-4">
			 	<div class="search-category-header">Refine Search </div>
			 	<div class="actegory-outer-box">
			 		<div class="category-box">
			 			<h4 class="cateory-sub-header"><a href="#">Fruits &amp; Vegetables</a></h4>
			 			<ul class="sublist">
			 				<li><a href="#">Beans &amp; Brinjals (10)</a></li>
			 				<li><a href="#">Broccoli &amp; Cauli... (1)</a></li>
			 				<li><a href="#">Chilies, Garlic,... (5)</a></li>
			 				<li><a href="#">Cut Vegetables &amp;... (16)</a></li>
			 				<li><a href="#">Gourd, Cucumber ... (10)</a></li>
			 				<li><a href="#">Herbs &amp; Sprouts (7)</a></li>
			 				<li><a href="#">Onions, Potatoes... (10)</a></li>
			 				<li><a href="#">Peas &amp; Corn (2)</a></li>
			 			</ul>
			 		</div>
			 		<div class="category-box box-2">
			 			<h4 class="cateory-sub-header"><a href="#">Brands</a></h4>
			 			<div class="barnd-list">			 				
			 				<input type="checkbox" id="brnd-1" />
			 				<label for="brnd-1">Fruit &amp; Vegetable (74)</label>
			 			</div>
			 			<div class="barnd-list">			 				
			 				<input type="checkbox" id="brnd-2" />
			 				<label for="brnd-2">Fruit &amp; Vegetable (74)</label>
			 			</div>
			 			<div class="barnd-list">			 				
			 				<input type="checkbox" id="brnd-3" />
			 				<label for="brnd-3">Fruit &amp; Vegetable (74)</label>
			 			</div>
			 		</div>
			 	</div>
			 </div>
			 <div class="col-md-9 col-sm-8">			 		
			 	<div class="row listing-header">
		 					<div class="col-md-7 product-heading">			 			
					 			<span>Vegetables</span>
					 			<span>10 Products</span>				 		
					 		</div>		
					 		<div class="col-md-4 sort-by-part col-md-offset-1">
				 				<span>Sort By:</span>
					 			<div class="select-box-sort">
					 				<select>
					 					<option>Relevance</option>
					 					<option>Low to high price</option>
					 					<option>High to low price</option>			 					
					 				</select>
					 			</div>
				 			</div>
			 			</div>
			 	<div class="row product-listing">
			 			
			 	<?php foreach ($rows as $id => $row): ?>
			 
			 		<div class="repeat-list-prodct">
			 			<div class="inner-product-box">
			 				<div class="listing-product-box">
			 					<figure><img src="<?php print file_create_url($view->result[$id]->field_field_product[0]['raw']['entity']->field_product_image['und'][0]['uri']); ?>" alt="" /></figure>
			 					
			 					<h4><?php print  $view->result[$id]->field_field_product[0]['raw']['entity']->title;?></h4>
			 					<h6><?php print $view->result[$id]->field_field_product[0]['raw']['entity']->commerce_price['und'][0]['amount']; ?></h6>
			 				</div>
			 				<div class="hover-product-box">			 					
			 					<h3><a href="#"><?php print $view->result[$id]->field_field_product[0]['raw']['entity']->title; ?></a></h3>
			 				
			 					<form class="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['#attributes']['class'][0].' '.$view->result[$id]->field_field_product_1[0]['rendered']['#attributes']['class'][1]; ?>" action="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['#action']; ?>" method="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['#method'] ;?>" id="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['#id'];?>" accept-charset="UTF-8">		
			 					<!--form attribuetes-->
			 					<input type="hidden" name="product_id" value="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['product_id']['#value']; ?>">
								<input type="hidden" name="form_build_id" value="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['form_build_id']['#value'];?>">
								<input type="hidden" name="form_token" value="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['form_token']['#value'];?>">
								<input type="hidden" name="form_id" value="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['form_id']['#value'];?>">	
								<div id="edit-line-item-fields" class="form-wrapper"></div>
								<input type="hidden" name="quantity" value="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['quantity']['#value'];?>">
			 					<!--form attribuetes-->
			 							
			 					<input class="wishlist form-submit" type="submit" id="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['add_to_wishlist']['#id'] ;?>" name="op" value="<?php print t('Add to Wishlist') ;?>">		
			 					
			 					<!--<a class="addto-whlst" title="" data-placement="left" data-toggle="tooltip" href="#" data-original-title="add to mylist">
			 						<i class="fa fa-list-alt"></i>
			 					</a>--> 
			 					
			 					<div class="hrsdelivery">Limited Availability</div>
			 					<div class="wait-available">
			 						<a href="#">250g</a>
			 						<a href="#">500g</a>
			 						<a href="#">55Kg</a>			 						
			 					</div>
			 					<div class="addto-crt">
			 						
			 						<!--<a href="#">
			 							<i class="fa fa-shopping-cart"></i>Add to Cart
			 						</a>-->
			 						
			 						<input type="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['submit']['#type'] ;?>" id="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['submit']['#id'] ;?>" name="op" value="<?php print $view->result[$id]->field_field_product_1[0]['rendered']['submit']['#value'] ;?>" class="form-submit">
			 						
			 					</div>

			 					
			 					</form>


			 				</div>
			 			</div>
			 		</div>
			 		<?php endforeach; ?>
			 		
			 	</div>
			 </div>
		</div>
	</div>
</section>