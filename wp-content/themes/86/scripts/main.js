$(document).ready(function(){
	iniciarComponenteSlider();
	if($(".tabs-wrapper").length){
		iniciarTabs();
	}
	if($(".accordion-wrapper").length){
		iniciarAccordion();
	}
	if($(".seletor-custom").length){
		customSelect();
	}
	if($(".galeria").length){
		$(".galeria").find("img").each(function(){
			var url = $(this).attr("src");
			$(this).featherlight(url);
		})
	}
	if ($('[data-match-height]')) {
        $('[data-match-height]').matchHeight();
    }
    if($(".contato").length){
		$("#telefone").mask("(00) 0000-0000");
		$("#cel").mask("(00) 00000-0000");
	}	
});