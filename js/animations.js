// Animation
//$(document).ready(function(){
//    
//    //Logo
//    var logo = $("#profile-circle");  
//    logo.animate({left: '0px'}, "slow");
//    
//    //Text under logo
//    var amazive = $(".welcome");  
//    amazive.animate({right: '0px'}, "slow");
//    
//   var description = $(".sub-welcome");  
//    description.animate({right: '0px'}, "slow");
//    
//    //Portfolio object
//    var first_animation = $("#1st-animation");  
//    first_animation.animate({right: '0px'}, "slow");
//    
//});
    




// Quote SlideShow FadeIn

$(document).ready(function() {
    
    var animationSpeed = 2000;
    var delayTime = 4000;
    
    var quote = $(".quote");
    var quoteIndex = -1;
    
    function showNextQuote() {
        ++quoteIndex;
        quote.eq(quoteIndex % quote.length)
            .fadeIn(animationSpeed)
            .delay(delayTime)
            .fadeOut(animationSpeed, showNextQuote)
    }
    
    showNextQuote();
    
    
});