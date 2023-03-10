(function($){
    Drupal.behaviors.slider = {
        attach(context) {
            $('.hero-images').each(function() {
                $(this).not('.slick-initialized').slick({
                    dots: true,
                    arrows: true,
                    infinite: true,
                    dotsClass: 'slick-dots list--unstyled',
                    variableWidth: false, 
                    adaptiveHeight: false,
                    appendDots: $(this).parent().find('.slick__controls__dots'),
                    appendArrows: $(this).parent().find('.slick__controls__arrows')
                    
                });
                console.log($(this).parent());
            })
            
            // console.log($(".hero-images").parent().find('.slick__controls__dots'))
        }
    }
})(jQuery);