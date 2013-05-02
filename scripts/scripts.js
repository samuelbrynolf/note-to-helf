(function() {

    //INITS

    smallSize();
    mediumSize();
    largeSize();
    devStyleHelp();

    function smallSize(){
        var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
        if (size.indexOf("smallscreen") !=-1){
			//Scripts runned on small screens
			
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