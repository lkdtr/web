$(document).ready(
        function(){
                var cddate = new Date();
                cddate = new Date(2011,10-1,14,10,0,0);
                $('#countdown').countdown({until: cddate});
        }
);