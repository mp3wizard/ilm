// Avoid `console` errors in browsers that lack a console
if (!(window.console && console.log)) {
    (function() {
        var noop = function() {};
        var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
        var length = methods.length;
        var console = window.console = {};
        while (length--) {
            console[methods[length]] = noop;
        }
    }());
}

// place any jQuery/helper plugins in here, instead of separate, slower script files.
$('.elastic').elastic();
$('.placeholder label').inFieldLabels()
$('#banner-rotator').royalSlider({
		keyboardNavEnabled: true,			
   		imageScaleMode: "fill",
   		autoScaleSlider: true,
   		arrowsNav: false,
   		autoScaleSliderWidth: 1100,
   		autoScaleSliderHeight: 500,
   		loop: true,
   		autoPlay: {
    		enabled: true,
    		pauseOnHover: true,
    		delay: 4000
    	}
 });
 
/*  Control Slider Banner on first page */
 $('#slider').royalSlider({			
		keyboardNavEnabled: true,			
   		imageScaleMode: "fill",
   		autoScaleSlider: true,
   		globalCaption:true,
   		arrowsNav: false,
   		autoScaleSliderWidth: 850,
   		autoScaleSliderHeight: 300,
   		loop: true,
   		autoPlay: {
    		enabled: true,
    		pauseOnHover: true,
    		delay: 4000
    	}
 });
 
 //Client Slider
 $('.index .horizontal_slide > div:first-child').royalSlider({			
	imageAlignCenter:false,
	controlNavEnabled: false,
	arrowsNavAutoHide:false,
	imageScaleMode: "fill",
	hideArrowOnLastSlide:true,
	directionNavEnabled: false, 
	autoScaleSlider: true,
	autoScaleSliderWidth: 580,
	autoScaleSliderHeight: 350,
	loop: true,
	autoPlay: {
		enabled: true,
		pauseOnHover: true,
		delay: 4000
	},
     beforeResize:function() {  
	     $(".s_num").text((this.currSlideId+1) + "/"  +   (this.numSlides) );
     },
     beforeSlideChange:function() {
        $(".s_num").text((this.currSlideId+1) + "/"  +   (this.numSlides) );
    }
 });
$('#client_group').bxSlider({ 
	 mode: 'vertical',
	 displaySlideQty: 3
 }); 
 
 // Gallery Slider
 $('.gallery .horizontal_slide > div:first-child').royalSlider({			
	controlNavigation: 'thumbnails',
	imageAlignCenter:false,
	controlNavEnabled: false,
	arrowsNavAutoHide:false,
	imageScaleMode: "fill",
	hideArrowOnLastSlide:true,
	directionNavEnabled: false, 
	autoScaleSlider: true,
	autoScaleSliderWidth: 580,
	autoScaleSliderHeight: 450,
	loop: false,
	autoPlay: {
		enabled: true,
		pauseOnHover: true,
		delay: 5000
	},
	thumbs: {
		// thumbnails options go gere
		spacing: 10,
		arrowsAutoHide: false,
		firstMargin: false,
	},
     beforeResize:function() {  
	     $(".s_num").text((this.currSlideId+1) + "/"  +   (this.numSlides) );
     },
     beforeSlideChange:function() {
        $(".s_num").text((this.currSlideId+1) + "/"  +   (this.numSlides) );
    }
 });
  $('#room_group').bxSlider({ 
	 mode: 'vertical',
	 displaySlideQty: 3
 }); 
 $('#girl_group').bxSlider({ 
	 mode: 'vertical',
	 displaySlideQty: 3
 });
 
 $('header nav > ul').superfish({ 
	 delay:       500,
	 animation:   {opacity:'show',height:'show'}
 });
 
/*  Tooltips */
$('.tips').tooltipster({ 
	offsetY: -17
});