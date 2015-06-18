jQuery(document).ready(function(){
	
	jQuery('#myCarousel').carousel({
    interval: 4000
	});
	
	// handles the carousel thumbnails
	jQuery('[id^=carousel-selector-]').click( function(){
	  var id_selector = jQuery(this).attr("id");
	  var id = id_selector.substr(id_selector.length -1);
	  id = parseInt(id);
	  jQuery('#myCarousel').carousel(id);
	  jQuery('[id^=carousel-selector-]').removeClass('selected');
	  jQuery(this).addClass('selected');
	});
	
	// when the carousel slides, auto update
	jQuery('#myCarousel').on('slid', function (e) {
	  var id = jQuery('.item.active').data('slide-number');
	  id = parseInt(id);
	  jQuery('[id^=carousel-selector-]').removeClass('selected');
	  jQuery('[id=carousel-selector-'+id+']').addClass('selected');
	});
	
	
	jQuery('#myTab a').click(function (e) {
	  e.preventDefault()
	  jQuery(this).tab('show')
	})
	jQuery('#myTab a[href="#profile"]').tab('show') // Select tab by name
	jQuery('#myTab a:first').tab('show') // Select first tab
	jQuery('#myTab a:last').tab('show') // Select last tab
	jQuery('#myTab li:eq(2) a').tab('show') // Select third tab (0-indexed)
	
	jQuery('#myTab1 a').click(function (e) {
	  e.preventDefault()
	  jQuery(this).tab('show')
	});
	
	jQuery(function() {
		jQuery(".profPic .carousel").jCarouselLite({
			btnNext: ".profPic .next",
			btnPrev: ".profPic .prev",
			visible: 1,
			vertical: true,
			speed: 1500,
			circular: true
		});
	});
	
	jQuery(function() {
		jQuery(".latest_news .carousel").jCarouselLite({
			btnNext: ".latest_news .next",
			btnPrev: ".latest_news .prev",
			visible: 5,
			auto: 1300,
			speed: 800,
			circular: true,
			easing: "easeOutBack"
		});
		jQuery(".latest_news img").click(function() {
			jQuery(".latest_news .mid img").attr("src", jQuery(this).attr("src"));
		})
	});

	    jQuery('.not-front .side-nav').hover(function(){
	        jQuery('.not-front .navbar-collapse.collapse.inner-side-nav').slideDown('slow');
	    }, function(){
	    	jQuery('.not-front .navbar-collapse.collapse.inner-side-nav').slideUp('fast');
	    });
	    jQuery(function () {
		  jQuery('[data-toggle="tooltip"]').tooltip()
		})


		/*******************************************/
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

      $('.hover-side-nav').hover(function(){
          $('.navbar-collapse.collapse.inner-side-nav').fadeIn(500)
      },function(){
          $('.navbar-collapse.collapse.inner-side-nav').fadeOut(500)
      })
      $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
	
});