<?php

/**
 * @file
 * Bartik's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>

<pre> 
<?php //print_r($content); 
//print render(drupal_get_form('commerce_cart_add_to_cart_form_1'));
?>

</pre>


<section  class="banner-section">
	<div class="container md-section"> 
		<!--middle-details -part-->
           <div class="row">
         <!--left panel-->
           		<div class="col-md-9">
           			<div class="row product-details-section">
           				<div class="col-md-5 col-sm-6">
           					<div class="product-big-pic">
           						 <img src="" alt="" />
           					</div>
           					<div class="thum-pic-part clearfix product_thumbs">
           						<?php $images = $content['product:field_product_image']['#object']->field_product_image['und'] ;
                          foreach($images as $img){
                            $uri = file_create_url($img['uri']);  ?>
                            <a href="javascript:void(0);"><img src="<?php print $uri; ?>" width="50" height="50"/></a>
                    <?php 
                          }

                      ?>
           					</div>
           					<div class="product-text">
           						<p>
           							Disclaimer: The manufacturer may change the MRP, promotion and the size from time to time, which may not reflect in the above picture. NATURE’S BASKET will reflect the up-to-date pricing on the website and will not be responsible for these changes. The above picture provides our consumers with an overview of the product. 
           						</p>
           					</div>
           				</div> 
           				<div class="col-md-7 col-sm-6">
           					<div class="product-details-infromation">
           						 <h2 class="product-header"><?php print $title; ?>
           						 	<span><a href="javascript:void(0);" class="addto-whlst add_wishlist_btn" data-toggle="tooltip" data-placement="top" title="add to mylist"><i class="fa fa-list-alt"></i></a></span>
           						 </h2>
           						 <p class="product-desription">
                          <?php print render($content['body']); ?>
           						 </p>
           						 <div class="share-part">
           						 	<span>Share</span>
           						 	<a href="#"><i class="fa fa-facebook-square"></i></a>
									<a href="#"><i class="fa fa-twitter-square"></i></a>
           						 </div>
           						 
           						 <div class="value-pro"><?php print render($content['product:commerce_price']); ?></div>
           						 <div class="add-crt-qty">
           						 	 <div style="display:none;"><?php print render($content['field_product']); ?></div>
                         <a href="#" class="addto-cart-pro add_cart_btn"><i class="fa fa-shopping-cart"></i>Add</a>
           						 	 <div class="qtyy"><span>Qty</span><input type="number" value=""/></div>
           						 </div>           						
           					</div>
           				</div> 
           			</div>
           			<div class="row product-details-section">
           				<div class="col-md-12">
							 <h2 class="inner-headr-text">Product <span>Description</span></h2>		
							 <p>
							 	<?php print render($content['product:field_product_description']); ?>
							 </p>		 
						</div>
           			</div>
           			
           		</div>
         <!--left panel end--> 		
           	
           </div> 	     
    </div>
</section>





<script>
  $(document).ready(function(){
      $('.hover-side-nav').hover(function(){
          $('.navbar-collapse.collapse.inner-side-nav').fadeIn(500)
      },function(){
          $('.navbar-collapse.collapse.inner-side-nav').fadeOut(500)
      })
      $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  }); 

   
    $(document).ready(function() {
       
      $('.product_thumbs a').click(function(){
        var src = $(this).find('img').attr('src');
        $('.product-big-pic img').attr('src', src);
      });

      $('.product_thumbs a:first').trigger('click');

      $('.add_cart_btn').click(function(){
          $('#edit-submit').trigger('click');
      });  

      $('.add_wishlist_btn').click(function(){
           $('#edit-add-to-wishlist').trigger('click');
      });

       $("#owl-demo2").owlCarousel({
        items : 6,
        loop:false,
        slideSpeed : 500,
          paginationSpeed : 400,
        // lazyLoad : true,
        navigation : true
        });     
        
      $("#owl-demo").owlCarousel({
        loop:false,
        navigation : true, // Show next and prev buttons
        slideSpeed : 500,
        paginationSpeed : 400,
        singleItem:true,
        pagination :false
      // "singleItem:true" is a shortcut for:
      // items : 1,
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
       
      });
      $('.barnd-list').click(function (){
          var checkbox = $(this).find('input[type=checkbox]');
         checkbox.prop("checked", !checkbox.prop("checked"));
      });

      $('.field-name-field-product-description > :first').remove();
       
    });
    
</script>