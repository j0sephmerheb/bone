$(document).ready(function(){  
    /***** detect ios *****/
    // detectIOs();

    /***** Animate Loaded Imgs *****/
    animateLoadingImgs();

    /***** Touch Device *****/
    /*
    if (checkTouchDevice()) {
        $('body').addClass('is-touch');
    };
    */ 
});


/***** Detect iOs *****/
/*
function detectIOs(){
    if (/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream) {
        $('body').addClass('ios');
    };
};
*/


/***** Detect Os *****/
/*
function detectOs(){
    var OSName="Unknown OS";
    if (navigator.appVersion.indexOf("Win")!=-1) OSName="Windows";
    else if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
        else if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
            else if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";

    // console.log('Your OS is: '+OSName);
};
*/


/* Detect Touch Device */
/*
function checkTouchDevice() {
    return 'ontouchstart' in document.documentElement;
};
*/


/***** Toggle Panel *****/
function togglePanel(){
    $(".main-menu, .btn-menu").toggleClass('selected'); 
    $('body').toggleClass('panel-on');
};
$(window).resize(function(){  
    if( $('body').hasClass('panel-on') && $(window).width() > 991){
        togglePanel();
    };
});


/***** Fit Main Banner to screen height (back) *****/
/*
function fitMainBanner(){
    var winHeight = $(window).height();
    var headerHeight = $('.header').outerHeight();
    $('.main-banner').css('height' , winHeight - headerHeight); 
};
*/


/***** Fit Main Banner to screen height (photo) *****/
function fitMainBanner(){
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();    
    if(windowWidth > 767 && windowHeight > 500 ){
        //var headerHeight = 0;
        var headerHeight = $('.header').outerHeight();
        var winHeight = $(window).height();
        heightLimit = winHeight - headerHeight;
        $('.main-banner .flexslider, .main-banner .flexslider .slides, .main-banner .flexslider .slides li').css('max-height' , heightLimit);
    }else{
        $('.main-banner .flexslider, .main-banner .flexslider .slides, .main-banner .flexslider .slides li').css('max-height' , 'none');
    }
};


/***** Animate Imgs opacity on load *****/
function animateLoadingImgs(){
    var pageHtml = $('html');
    if ( !$(pageHtml).hasClass('lt-ie9') ){
        var imgLoad = imagesLoaded('body', { background: '.back' });
        imgLoad.on( 'progress', function(instance, image, element) {
            $(element).parent('.photo').addClass('loaded');
            
            if($(element).hasClass('back')){
                $('.back').addClass('loaded');
            };
        }); 
    };
};


/***** Placeholder in IE *****/
/*
$(document).ready(function(){  
    setPlaceholder();
});
function setPlaceholder(){
    var pageHtml = $('html');
    var formInput = $('input.form-control');  
    if (pageHtml.hasClass('ie9')){     
        formInput.each(function(){
            var thisPlaceholder = $(this).attr('placeholder');
            if(thisPlaceholder !== 'undefined'){
                $(this).val(thisPlaceholder);
            };            
        });                                         
    };      
};
*/

/***** scroll to element *****/
function scrollToElement(e){
    if(e.length){
        var distanceTop = $(e).offset().top - $('.header').outerHeight();
        $('html,body').stop().animate({scrollTop: distanceTop}, 800);
    }
};


/***** Update header on scroll / load *****/
/*
$(window).on('scroll resize', function(){
    var windowWidth = $(window).width();
    var scrollTop = $(window).scrollTop(); 
    var edge = $('.edge');        

    if( $(edge).length){
        var edgeTop = $('.edge').offset().top - $('.header').outerHeight();

        if( windowWidth > 991 && scrollTop > edgeTop){
            $('.header').addClass('mini')
        }
        else{
            $('.header').removeClass('mini')
        }
    }
});
*/


/***** Animate Listing Within Viewport (add class animated) *****/
/*
function animateElements(){
    $('.is-animated').each(function(){
        var thisElement = $(this);
        if (!$(thisElement).hasClass('animated')) {
            if(thisElement.isInViewport()){                
                thisElement.addClass('animated');
                return false;
            }
        }
    });
};
$.fn.isInViewport = function() {
    var headerHeight = $('.header').outerHeight();
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();   
    if(elementBottom > viewportTop && elementTop < viewportBottom){ 
        return true;
    }
};
$(window).on("load scroll resize", function(){
    animateElements();      
});
*/


/***** SUB MENU *****/
/*
$('.main-menu a').on('click', function(e){
    var subMenu = $(this).next('.sub-menu');
    if(subMenu.length){
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4)) || $('body').hasClass('is-touch'))    
        {              
            subMenu.slideToggle();
            e.preventDefault(); 
            return false;
        } 
    }
});
*/