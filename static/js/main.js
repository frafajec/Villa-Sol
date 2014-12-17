$(document).ready(function(){
    
    $('#fname').tooltip({'triger': 'focus', 'container': 'body', 'title': 'This field is required!', 'delay': {"show": 600, "hide": 500}});
    $('#lname').tooltip({'triger': 'focus', 'container': 'body', 'title': 'This field is required!', 'delay': {"show": 600, "hide": 500}});
    $('#email').tooltip({'triger': 'focus', 'container': 'body', 'title': 'Example: john.doe@gmail.com. This field is required!', 'delay': {"show": 600, "hide": 500}});
    $('#msg').tooltip({'triger': 'focus', 'container': 'body', 'title': 'State your interests, questions etc. This field is required!', 'delay': {"show": 600, "hide": 500}});
    $('#subject').tooltip({'triger': 'focus', 'container': 'body', 'title': 'Few words about this message. This field is required!', 'delay': {"show": 600, "hide": 500}});
        
    $('.flag').click( function(){
        var lng = $(this).attr("id");
        $.cookie("language", null, { path: '/' });
        $.cookie('language', lng, {expires:1825, path:'/'});
        window.location.replace("../" + $.cookie("language"));
    });
    $('a').click(function (e) {
        e.preventDefault();
        var goTo = this.getAttribute("href");
        $(".all").fadeOut();
        $(".all").fadeOut("slow");
        $(".all").fadeOut(500); 
        setTimeout(function(){
            window.location = goTo;
        },400);       
    });
    $('#csubmit').click(function(e) {
       $('#cform input[type=text], input[type=email], textarea').each(function() {
          var id = $(this).attr('id'),
              _obj = $('#'+id);
          if (_obj.val() == '') {
               _obj.removeClass('cglow');
               _obj.css({'border':'1px solid rgba(255, 0, 0, 0.2)'});
               setTimeout(function(){ _obj.css({'border':'1.15px solid rgba(255, 0, 0, 0.45)'});}, 80);
               setTimeout(function(){ _obj.css({'border':'1.35px solid rgba(255, 0, 0, 0.7)'});}, 160);
               setTimeout(function(){ _obj.css({'border':'1.72px solid rgba(255, 0, 0, 1)'});}, 240);
               setTimeout(function(){ _obj.css({'border':'1.95px solid rgba(255, 0, 0, 1)'});}, 320);
               setTimeout(function(){ _obj.css({'border':'1.68px solid rgba(255, 0, 0, 0.8)'});}, 600);
               setTimeout(function(){ _obj.css({'border':'1.4px solid rgba(255, 0, 0, 0.6)'});}, 700);
           }           
      });
      $('#cform input[type=text], input[type=email], textarea').each(function() {
          var id = $(this).attr('id'),
              _obj = $('#'+id);
          if (_obj.val() == '') {
               _obj.focus();
               e.preventDefault();
               return false;
           }           
      });
   });
   $('#cform input[type=text], input[type=email], textarea').change(function() {
       var id = $(this).attr('id'),
              _obj = $('#'+id);
       if(_obj.val() != ''){
           _obj.addClass('cglow')
           _obj.css({'border':'1px solid #777'});
       }
   });

});

//jssor gallery initialization
jQuery(document).ready(function ($) {

    var _SlideshowTransitions = [
    //Fade in L
        {$Duration: 2200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade out R
        , { $Duration: 2200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade in R
        , { $Duration: 2200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade out L
        , { $Duration: 2200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

    //Fade in T
        , { $Duration: 2200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
    //Fade out B
        , { $Duration: 2200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
    //Fade in B
        , { $Duration: 2200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade out T
        , { $Duration: 2200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

    //Fade in LR
        , { $Duration: 2200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
    //Fade out LR
        , { $Duration: 2200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
    //Fade in TB
        , { $Duration: 2200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade out TB
        , { $Duration: 2200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

    //Fade in LR Chess
        , { $Duration: 2200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
    //Fade out LR Chess
        , { $Duration: 2200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade in TB Chess
        , { $Duration: 2200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
    //Fade out TB Chess
        , { $Duration: 2200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

    //Fade in Corners
        , { $Duration: 2200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
    //Fade out Corners
        , { $Duration: 2200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

    //Fade Clip in H
        , { $Duration: 2200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade Clip out H
        , { $Duration: 2200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade Clip in V
        , { $Duration: 2200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
    //Fade Clip out V
        , { $Duration: 2200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
        ];

    var options = {
        $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlayInterval: 5000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

        $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
        $ArrowKeyNavigation: true,   			    //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideDuration: 1200,                                //Specifies default duration (swipe) for slide in milliseconds

        $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
            $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
            $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
            $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
            $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
        },

        $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
            $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 2                             //[Required] 0 Never, 1 Mouse Over, 2 Always
        },

        $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
            $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

            $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
            $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
            $DisplayPieces: 9,                             //[Optional] Number of pieces to display, default value is 1
            $ParkingPosition: 750                           //[Optional] The offset position to park thumbnail
        }
    };

    var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizes
    function ScaleSlider() {
        var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
        if (parentWidth >= 1600)
            jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 1400), 200));
        else if (parentWidth < 1600 && parentWidth >= 1340)
            jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 1000), 200));
        else if (parentWidth < 1340)
            jssor_slider1.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 200));
        else
            window.setTimeout(ScaleSlider, 30);
    }

    ScaleSlider();

    if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
        $(window).bind('resize', ScaleSlider);
    }


    //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
    //    $(window).bind("orientationchange", ScaleSlider);
    //}
    //responsive code end
});
