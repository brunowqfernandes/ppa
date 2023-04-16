function iniciarComponenteSlider() {

    if ($(".content-slider").length) {

        $(".content-slider").each(function (index, slider) {

            var idSlider = 'slider' + index;

            var sliderConfig = {

                infinite: true,

                dots: true,

                arrows: false,

                pauseOnHover: false,

                autoplay: true,

                speed: 1200,

                fade: true,

                responsive: {
                    breakpoint: 760,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                }                

            };



            $(slider).slick(sliderConfig);

        });

    }

}