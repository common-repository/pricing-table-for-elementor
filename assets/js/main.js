'use strict';
(function($){
	
	$('.wppt-header').click(function(){
	  var $this = $(this);
	  $this.closest(".wppt-whole").find(".wppt-content").slideToggle();
	  
	  
	});

	$("input").on("mouseenter",function(){
	  event.preventDefault();
	  
	  $(this).animate(
	    
	    {opacity:1}
	  
	  
	  );

	});

	/*$(".wppt-whole").on("click","a",function(){
	  event.preventDefault(); 
	  $(".wppt-plan").removeClass("wppt-selected");
	  $(this).closest(".wppt-whole").find(".wppt-plan").addClass("wppt-selected");


	});*/

})(jQuery)