<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php $rows = array_chunk($rows, 4); ?>
<?php foreach ($rows as $id => $full_row): ?>
  	<div class="row product-details-outer">
  		<?php foreach ($full_row as $id => $row): ?>
  			<?php $nid = $view->result[$id]->nid;
				$nid = drupal_get_path_alias('node/'.$nid); 
  			?>
  			<?php 	$pid = $view->result[$id]->_field_data['nid']['entity']->field_product['und'][0]['product_id'];		?>
  			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product-box">
					<a href="<?php print $nid; ?>">
						<figure class="product-pic"><img width="230" height="230" src="<?php print file_create_url($view->result[$id]->field_field_product[0]['raw']['entity']->field_product_image['und'][0]['uri']); ?>" alt="" /></figure>
						<div class="product-details">
								<h4><?php print  $view->result[$id]->field_field_product[0]['raw']['entity']->title;?></h4>
								<?php $str = $view->result[$id]->field_field_product[0]['raw']['entity']->field_product_description['und'][0]['safe_value']; 
								$pos = strpos($str, ' ', 100);
								print '<p>'.substr($str, 0, $pos).'...</p>'; 
								?>
								<div class="rate-product">
									<span><?php print render($view->result[$id]->field_field_product[0]['rendered']['commerce_product'][$pid]['commerce_price']); ?></span>
									<!--<span><strike>$25</strike> </span>-->
								</div>
						</div>
					</a>
					<div class="add-to-cart-part">
						<div style="display:none;"><?php print render($view->result[$id]->field_field_product_1); ?></div>
						<a href="javascript:void(0);" class="addto-cart add_cart_btn"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span></a>
						<a class="addto-whlst add_wishlist_btn" title="" data-placement="left" data-toggle="tooltip" href="javascript:void(0);" data-original-title="add to mylist">
				 			<i class="fa fa-list-alt"></i>
				 		</a>
					</div>
				</div>			
			</div>
		<?php endforeach; ?>
	</div>	
<?php endforeach; ?>



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