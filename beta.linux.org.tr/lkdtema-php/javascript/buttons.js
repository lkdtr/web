$(function() {
    $("img.button")
        .mouseover(function() {
            var src = $(this).attr("src").match(/[^\.]+/) + "_hover.jpg";
            $(this).attr("src", src);
        })
        .mouseout(function() {
            var src = $(this).attr("src").replace("_hover", "");
            $(this).attr("src", src);
        });
});
