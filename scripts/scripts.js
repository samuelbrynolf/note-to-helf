(function() {
  
  var size = window.getComputedStyle(document.body,':after').getPropertyValue('content');
  
  function navigation(){
  
   	function toggledNav(){
		 	$('#menu-button').on('click', function(d) {
		 		var $this = $(this);
		 		$this.parent().parent().toggleClass('s-is-active');
		 		$this.toggleClass('s-is-flipped');
		 		$('#m-global-nav').toggleClass('s-is-hidden');
		 		
		 		if($('.m-taxonomy-header').length){
		 			var subHeader = $('.m-taxonomy-header');
		 			subHeader.toggleClass('s-is-hidden');
		 		}
				
				// overlay
				var overlayDiv = $("<div />", {
					"id": "overlay",
					"class": "s-is-active"
				});
				var overlay = $('#overlay');
				if(overlay.length){
					overlay.toggleClass('s-is-active');
				} else {
					overlayDiv.insertBefore('#global-header');
				}
		 		d.preventDefault();
		 	});
	 	} // end toggledNav()
	 
	 	function toggleSubNav(){
		 	$('#menu-global-nav').on('click', '.parent > a', function(e){
		 		var $this = $(this);
		 		
		 		$this.parent('.parent').toggleClass('s-is-active').toggleClass('s-is-passive');
		 		$this.next('.sub-menu').toggle();
		 		e.preventDefault();
		 	});
	 	} // end toggleSubNav()
	 	
	 	function currentMenuItem(){
	 		var subParent = $('.parent');
	 		
			if($('#set-current-menuItem').length || subParent.is('.current-menu-ancestor')){
		 	
		 		$('#menu-global-nav a').each(function(){
					var categoryName = $('.m-article-meta a').first().text();
					var menuItem = $(this);
			 		
					if(categoryName == menuItem.text()){
		      	menuItem.parent().addClass('current-menu-item');
		    	}
		 		});
		 		
		 		subParent.children('.sub-menu').show();
		 		subParent.removeClass('s-is-passive').addClass('s-is-active');
		 	}
	 	} // end currentMenuItem()
	 	
	 	function smoothScroll(){
	  	$('.jumper').on('click', function(e) {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	    	&& location.hostname == this.hostname) {
	      	var jQuerytarget = $(this.hash);
	        jQuerytarget = jQuerytarget.length && jQuerytarget || jQuery('[name=' + this.hash.slice(1) +']');
	        if (jQuerytarget.length) {
	        	var targetOffset = jQuerytarget.offset().top - 24 ;
	          $('html,body').animate({scrollTop: targetOffset}, 400);
	          e.preventDefault();
	         } 
	       }
		 	});	
	 	} // end smoothScroll()
	 	
	 	if (size.indexOf("smallscreen") !=-1 || size.indexOf("mediumscreen") !=-1){
	 		toggledNav();
	 	} else {
	 		$('#m-global-nav').removeClass('s-is-hidden');
	 	}
	 	
	 	toggleSubNav();
	 	currentMenuItem();
	 	smoothScroll(); 	
  
  } // end navigation()

  function customTraversions(){
  	
  	function moveResources(){
    	var resources = $('#resources');
  		if(resources.length > 0){
  			resources.insertAfter('#the-content').addClass('s-is-moved');
			}
		}
		
	 //if (size.indexOf("smallscreen") !=-1 || size.indexOf("mediumscreen") !=-1 || size.indexOf("largescreen") !=-1){
	 	moveResources();
	 //}
  }
  
  function editableAside(){
  	
  	$('<li class="menu-item"><a class="toggle-editable-aside" href="#">Anteckningar</a></li>').insertBefore('#menu-global-nav .is-last');
  	
  	function toggleEditableAside(){
  		$('.toggle-editable-aside').on('click', function(toggle) {
  			$('#editableAside').toggleClass('s-is-hidden');
  			toggle.preventDefault();
  		});
  	}
  	
  	function userBookmarks(){
  		var myBookmarks = document.getElementById('editable-bookmarks');
  		var myBookmarksID = $(myBookmarks).attr('id');
  		var bookmark = document.getElementById('addBookmark');
  		var currentBookmark = $(bookmark).attr('class');
  		var editableAside = $('#editableAside');
  		
  		if (localStorage.getItem('storedBookmarks')){
				myBookmarks.innerHTML = localStorage.getItem('storedBookmarks');
				$('#'+myBookmarksID+' a').each(function(){
  				if($(this).hasClass(currentBookmark)){
  					$(bookmark).addClass('s-is-passive');
  				}
  			});
			}
  		
  		$(bookmark).on('click', function(a){
  			if ($(window).scrollTop() > 60) {
					$('html, body').animate({ scrollTop: 0 }, 250);
				}
				
  			if(!$(bookmark).is('.s-is-passive')){
  				$('#placeholder').remove();
  				$(bookmark).clone().appendTo($(myBookmarks)).wrap('<li></li>');
  				$(bookmark).addClass('s-is-passive');
					localStorage.setItem('storedBookmarks', myBookmarks.innerHTML);
					editableAside.removeClass('s-is-hidden');
				} else {
					editableAside.toggleClass('s-is-hidden');
				}
			
				$('#'+myBookmarksID+' .'+currentBookmark).fadeOut().fadeIn();
				a.preventDefault();
			});
			
			$('#erase-editable-bookmarks').on('click', function(){
				localStorage.removeItem('storedBookmarks');
				$(myBookmarks).children().remove();
				$('<li id="placeholder">Du har inga sparade bokm&auml;rken...</li>').appendTo($(myBookmarks));
				$(bookmark).removeClass('s-is-passive');
			});
  	}
  	
  	function userNotes(){
			var myNotes = document.getElementById('editable-notes');
			
			$(myNotes).blur(function() {
			 localStorage.setItem('storedNotes', this.innerHTML);
			});
						
			// when the page loads
			if (localStorage.getItem('storedNotes')){
			 myNotes.innerHTML = localStorage.getItem('storedNotes'); 
			}
			
			$('#erase-editable-notes').on('click', function(){
				localStorage.removeItem('storedNotes');
				$(myNotes).children().remove();
				$('<li>B&ouml;rja anteckna&hellip;</li>').appendTo($(myNotes));
			});
  	}
  	
  	toggleEditableAside();
  	userBookmarks();
  	userNotes();

  }; // end notes()
  
  function plugins(){
  	FastClick.attach(document.body);
  	//Magnific popup
  	$('.gallery').magnificPopup({type:'image'});
  }
  
//INITS
//==============================================================================================
	
	navigation();
  customTraversions();
  if (size.indexOf("largescreen") !=-1 && window.localStorage){
  	editableAside()
  }
  plugins();

})();