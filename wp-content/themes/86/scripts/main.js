$(document).ready(function(){
	// if($(".galeria").length){
	// 	$(".galeria").find("img").each(function(){
	// 		var url = $(this).attr("src");
	// 		$(this).featherlight(url);
	// 	})
	// }
});

function abreModalGaleria(e) {
	var imgSrc = $(e.currentTarget).find('img').attr('src');
	$.featherlight(imgSrc);
	
}