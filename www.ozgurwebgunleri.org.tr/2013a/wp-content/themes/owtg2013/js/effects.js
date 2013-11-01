(function($) {
	$(document).ready(
        function(){
                $("ul.menu li").each(function(index){
                	$(this).addClass("menu"+index);
                })
        }
);
})(jQuery);