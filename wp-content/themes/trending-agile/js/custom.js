jQuery(document).ready(function () {
//Scrolling Menu
    
    jQuery('.main-banner').slick({
        infinite: true
        , dots: true
        , slidesToShow: 1
        , slidesToScroll: 1
        , arrows:false
        , autoplay: true,
          autoplaySpeed: 5000,
        speed:1200
    });
    jQuery('.client-testimonials').slick({
        infinite: true
        , dots: true
        , slidesToShow: 2
        , slidesToScroll: 1
        , arrows:false,
        responsive: [
        {
          breakpoint: 990,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1            
          }
        }
      ]
    });
    var headerHeight = jQuery('.site-header').outerHeight();
    /*var bannerHeight = jQuery('.main-banner .banner-item').outerHeight();     
    jQuery('.main-banner .banner-item').css("height", bannerHeight - headerHeight);*/
    jQuery('body').css('padding-top',headerHeight);
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > headerHeight){  
            jQuery('.site-header').addClass("sticky");
        }
        else{
            jQuery('.site-header').removeClass("sticky");
        }
    });
    responsivemenu();
    
    
    
    
    
});
function responsivemenu() {
    var $menuBtn = jQuery('.menu-btn');
	var $nav = jQuery('#nav');
	var $stylebox = jQuery('#style-box');
	var $styleli = $stylebox.find('li');
	$menuBtn.on('click', function() {
		var $this = jQuery(this);
		var styles = $stylebox.data('styles');
		$this.toggleClass("active");
		jQuery('#nav').toggleClass("open");
        jQuery('html').toggleClass("open");
		$stylebox.toggleClass(styles);
	});
	$nav.addClass('leftslide');
	$styleli.on('click', function() {
		var $this = jQuery(this);
		$this.siblings().removeClass('now');
		$this.addClass('now');
		var styles = $this.data('styles');
		$nav.removeClass();
		$nav.addClass(styles);
		$nav.siblings('#style-box').removeClass();
		$nav.siblings('#style-box').data('styles',styles);
	});
}