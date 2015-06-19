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
			 			<?php 	$pid = $view->result[$id]->_field_data['nid']['entity']->field_product['und'][0]['product_id'];		?>
			 		<div class="repeat-list-prodct">
			 			<div class="inner-product-box">
			 				<div class="listing-product-box">
			 					<figure><img src="<?php print file_create_url($view->result[$id]->field_field_product[0]['raw']['entity']->field_product_image['und'][0]['uri']); ?>" alt="" /></figure>
			 					
			 					<h4><?php print  $view->result[$id]->field_field_product[0]['raw']['entity']->title;?></h4>
			 					<h6><?php print render($view->result[$id]->field_field_product[0]['rendered']['commerce_product'][$pid]['commerce_price']); ?></h6>
			 				</div>
			 				<div class="hover-product-box">			 					
			 					<h3><a href="#"><?php print $view->result[$id]->field_field_product[0]['raw']['entity']->title; ?></a></h3>
			 					<div style="display:none;">
			 					<?php print render($view->result[$id]->field_field_product_1); ?>
			 					</div>
			 					<a class="addto-whlst add_wishlist_btn" title="" data-placement="left" data-toggle="tooltip" href="javascript:void(0);" data-original-title="add to mylist">
			 						<i class="fa fa-list-alt"></i>
			 					</a>
			 					
			 					<div class="hrsdelivery">Limited Availability</div>
			 					<div class="wait-available">
			 						<a href="#">250g</a>
			 						<a href="#">500g</a>
			 						<a href="#">55Kg</a>			 						
			 					</div>
			 					<div class="addto-crt">
			 						
			 						<a href="javascript:void(0);" class="add_cart_btn">
			 							<i class="fa fa-shopping-cart"></i>Add to Cart
			 						</a>
			 					</div>

			 				</div>
			 			</div>
			 		</div>
			 		<?php endforeach; ?>
			 		
			 	</div>
			 </div>
		</div>
	</div>
</section>



<script>
$(document).ready(function() {
	$('.add_cart_btn').click(function(){
        $('#edit-submit').trigger('click');
    });  

    $('.add_wishlist_btn').click(function(){
        $('#edit-add-to-wishlist').trigger('click');
    });
});	
</script>