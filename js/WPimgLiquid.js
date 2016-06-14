/* imgLiquid initialize */

jQuery(document).ready(function($){
	$("img.imgLq100").wrap("<div class='imgLq' style='width:100px; height:100px;'></div>");
	$("img.imgLq150").wrap("<div class='imgLq' style='width:150px; height:150px;'></div>");
	$("img.imgLq200").wrap("<div class='imgLq' style='width:200px; height:200px;'></div>");
	$("img.imgLq250").wrap("<div class='imgLq' style='width:250px; height:250px;'></div>");
    $(".imgLq").imgLiquid({
        fill: true  // aspect
    });
});
