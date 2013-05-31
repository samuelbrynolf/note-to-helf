(function() {

    //INITS
		
		helpers();
    smallSize();
    mediumSize();
    largeSize();
    devStyleHelp();
    
    function helpers(){
    
    	// Smooth scroll for anchors
    	$('a[href*=#]').on('click', function(e) {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	    	&& location.hostname == this.hostname) {
	      	var jQuerytarget = $(this.hash);
	        jQuerytarget = jQuerytarget.length && jQuerytarget || jQuery('[name=' + this.hash.slice(1) +']');
	        if (jQuerytarget.length) {
	        	var targetOffset = jQuerytarget.offset().top - 50 ;
	          $('html,body').animate({scrollTop: targetOffset}, 400);
	          e.preventDefault();
	         } 
	       }
	       
	       if($(this).attr('id') === 'menu-anchor') {
	       	$('#m-global-nav').addClass('s-is-alert');
	       }
		 	});
		 	
		 	// Submenu interaction
		 	$('#menu-global-nav').on('click', '.parent > a', function(e){
		 		var $this = $(this);
		 		
		 		$this.parent('.parent').toggleClass('s-is-active').toggleClass('s-is-passive');
		 		$this.next('.sub-menu').slideToggle('normal');
		 		e.preventDefault();
		 	});
    }

    function smallSize(){
        var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
        if (size.indexOf("smallscreen") !=-1){
        
	        var resources = $('#resources');
	        if(resources.length > 0){
	        	resources.insertBefore('#m-article-footer').addClass('s-is-moved');
					}			
        }
    }
	
    function mediumSize(){
        var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
        if (size.indexOf("mediumscreen") !=-1){
			//Scripts runned on medium screens
		
        }
    }
	
    function largeSize(){
        var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
        if (size.indexOf("largescreen") !=-1){
	    	//Scripts runned on large screens

        }
    }
    
    function devStyleHelp(){
    	$('.toggle-guides').on('click', function(e){
    		if($(this).is('#toggle-vertical-guides')){
    			$('body').toggleClass('vertical-guides');
    		} else if($(this).is('#toggle-horizontal-guides')){
    			$('body').toggleClass('horizontal-guides');
    		} else {
    			$('body').toggleClass('guides');
    		}

    		e.preventDefault();
    	});
    }
	
})();