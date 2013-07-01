jQuery(document).ready(function() {
	
	jQuery("nav ul>li").hover(
		function (){
			jQuery("ul.sub-menu",this).show();
		},
		function (){
			jQuery("ul.sub-menu",this).hide();
		}
	);

	showcaseStart();
	
});

function showcaseStart() {
	jQuery("#slider").cycle({ 
    	fx:     'fade',  
    	timeout: 10, 
    	pager:  '#navigation' 
	});
}