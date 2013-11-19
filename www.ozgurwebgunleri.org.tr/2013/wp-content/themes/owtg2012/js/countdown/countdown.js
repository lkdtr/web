(function($) {
	$(document).ready(
        function(){
                var cddate = new Date();
                cddate = new Date(2013,11-1,22,10,0,0);
                $('#countdown').countdown({until: cddate});
        }
);
})(jQuery);
