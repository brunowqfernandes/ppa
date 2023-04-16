function iniciarTabs() {
	$(".tabs-wrapper").on("click", ".tab-icone", function(e){
		e.preventDefault();
		var target = $(this).data("target-item");

		$(this).parents('.tabs-wrapper').find(".tabs").find(".tab-icone.active").removeClass("active");
		$(this).addClass("active");

		// $(this).parents('.bloco').index().find(".tabs").find(".tab-icone").removeClass("destaque-clique");

		var allContent = $(this).parents('.tabs-wrapper').find("[data-target-content]").hide();
		var targetContent = $(this).parents('.tabs-wrapper').find("[data-target-content=" + target + "]").show();

		var showTab = new TimelineMax();
			showTab.set(allContent, {autoAlpha: 0})
				.to(targetContent, 0.5, {autoAlpha: 1})
	});
	$(".tabs-wrapper").each(function(){
		var $self = $(this);
		setTimeout(function(){
			$self.find(".tab-icone:first").click();
		},500);
	});
}