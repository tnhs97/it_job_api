var addthis_config = addthis_config||{};
addthis_config.data_track_addressbar = false;
addthis_config.data_track_clickback = false;

jQuery(document).ready(function() {
	$socialsharing = jQuery('.post .socialsharing');
	$socialsharinga = jQuery('.post .socialsharing-a');
	$isadmin = jQuery('body').hasClass('adminbar');
	if ($socialsharing.length) {
		jQuery(window).on('scroll resize orientationchange',function() {
			if ($socialsharing.offset().top - jQuery(window).scrollTop()<($isadmin?33:5)) {
				jQuery('body').addClass('fixedsharing');
				$socialsharinga.css('left',$socialsharing.offset().left);
			} else {
				jQuery('body').removeClass('fixedsharing');
				$socialsharinga.css('left','auto');
			}
		}).trigger('scroll');	
	}
	
	jQuery('.aboutauthor .social a, .teampage .authorinfo .social a').each(function() {
		var $this = jQuery(this);
		var title = $this.attr('title');
		$this.removeAttr('title');
		$this.closest('li').append('<span class="hover">'+title+'<span class="arr"></span></span>');
	});
		
	jQuery('.content').fitVids();
	
	jQuery('#cattoggle').click(function(e) {
		e.preventDefault();
		jQuery('body').toggleClass('catsopen');
	});

	jQuery(window).scroll(function() {
		var offset = jQuery(window).scrollTop();
    	var screenRes = jQuery(window).width();

		var main_offset = jQuery("#body").offset();
		var main_top = main_offset.top;
		var main_bottom = Math.round(main_top + jQuery("#body").outerHeight()) - 534;

		if (offset>=62) {
			if (screenRes > 860) {
				jQuery('body').addClass('catsfixed');
				jQuery('#sidebar').css({'position': 'fixed', 'top': '41px'});
				if (offset >= main_bottom) {
					jQuery('#sidebar').css({'position': 'relative', 'top': (main_bottom-93)+'px'});
				} else {
					jQuery('#sidebar').css({'position': 'fixed', 'top': '41px'});
				}
			} else {
				jQuery('#sidebar').css({'position': 'relative', 'top': 'auto'});
				jQuery('#sidebar').css('width', "");
				if (screenRes < 860) {
					jQuery('#sidebar').css({'width': '100%'});
				}
			}
		} else {
			jQuery('body').removeClass('catsfixed');
			jQuery('#sidebar').css({'position': 'relative', 'top': 'auto'});
			jQuery('#sidebar').css('width', "");
			if (screenRes < 860) {
				jQuery('#sidebar').css({'width': '100%'});
			}
		}
	});

	var dropdownToggle = jQuery('<button/>',{
		'class':'dropdown-toggle'
	}).append(jQuery('<span/>',{
		'class':'screen-reader-text',
		text:'Toggle dropdown'
	}));

	jQuery('#catwrap>ul>li.menu-item-has-children>a').after(dropdownToggle);
	jQuery('#catwrap>ul>li.menu-item-has-children.current-menu-item, #catwrap>ul>li.menu-item-has-children.current-menu-ancestor').addClass('open');

	jQuery('#catwrap').on('click','.dropdown-toggle',function(e) {
		e.preventDefault();
		jQuery(this).closest('li').toggleClass('open');
	});
});
