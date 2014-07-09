$(document).ready(function(){

	$('#tab_middle a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});

	$('#inbox_title a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});

	$('#sidebar_title a').click(function (e) {
		$("#sidebar_title ul li").each(function() {    
             $(this).removeClass("active");  
         });  
	 
	    e.preventDefault();
	    $(this).tab('show');
	});
});