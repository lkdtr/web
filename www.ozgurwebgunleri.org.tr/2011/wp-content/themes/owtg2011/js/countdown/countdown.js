$(document).ready(
        function(){
                var cddate = new Date();
                cddate = new Date(2011,10-1,14,10,0,0);
                $('#countdown').countdown({until: cddate});

                $("#countdown").delay(2000).fadeOut("slow",function(){
                        $("#realdate").fadeIn("slow");
                });

                $("#date").hover(
                        function(){
                                $("#realdate").fadeOut("fast",function(){
                                        $("#countdown").fadeIn("fast");
                                });
                        },
                        function(){
                                $("#countdown").fadeOut("fast",function(){
                                        $("#realdate").fadeIn("fast");
                                });
                        }
                );
        }
);