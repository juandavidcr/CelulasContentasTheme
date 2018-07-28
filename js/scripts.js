(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		var flag = 0;
		// DOM ready, take it away $( "#target" ).click(function() {
		$('#navMobSandy').click(function () {
				     
	     if (flag ==0) {
	     	flag++;
	     	$("#navMob").show();
	     }		else{
	     	flag=0;
	     	$('#navMob').hide();
	     }

		});
		
	});
	
})(jQuery, this);
