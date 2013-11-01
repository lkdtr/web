(function($) {
	$(document).ready(
        function(){
                var cddate = new Date();
                cddate = new Date(2012,10-1,19,10,0,0);
                $('#countdown').countdown({until: cddate});
        }
);
})(jQuery);