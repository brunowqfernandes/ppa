function iniciarAccordion(){
    $(".accordion-wrapper").find(".accordion-item .accordion-title").on("click", function(e){
        e.preventDefault();
        var content = $(this).parents(".accordion-item").find(".accordion-content");
        if($(this).parents(".accordion-item").hasClass("open")) {


            $(this).parents(".accordion-item").removeClass("open");
            content.slideUp({
                duration: 400                
            });   
            return;         
        }

        $(this).parents(".accordion-item").addClass("open");        
        content.slideDown({
            duration: 400            
        });
    });
}