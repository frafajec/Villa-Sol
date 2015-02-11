$(document).ready(function(){
    
    //tooltips for form help
    $('#fname').tooltip({'triger': 'focus', 'container': 'body', 'title': 'This field is required!', 'delay': {"show": 600, "hide": 500}});
    $('#lname').tooltip({'triger': 'focus', 'container': 'body', 'title': 'This field is required!', 'delay': {"show": 600, "hide": 500}});
    $('#email').tooltip({'triger': 'focus', 'container': 'body', 'title': 'Example: john.doe@gmail.com. This field is required!', 'delay': {"show": 600, "hide": 500}});
    $('#msg').tooltip({'triger': 'focus', 'container': 'body', 'title': 'State your interests, questions etc. This field is required!', 'delay': {"show": 600, "hide": 500}});
    $('#subject').tooltip({'triger': 'focus', 'container': 'body', 'title': 'Few words about this message. This field is required!', 'delay': {"show": 600, "hide": 500}});
        
    $('.flag').click( function(){ //language change
        var lng = $(this).attr("id"), _URL = '';
        if (lng == 'fr' || lng == 'de' || lng == 'hr' || lng == 'it') lng = 'en'; //THIS is only until those languages are implemented!
        $.cookie("villa-sol-language", null, { path: '/' });
        $.cookie("villa-sol-language", lng, {expires:1825, path:'/'});
        _URL = (document.URL).split('.php')[0] + '.php';
        window.location.replace("../" + lng + "/" + _URL.split('/').slice(-1));        
    });
    $('a').click(function (e) { //on link click fadeout
        e.preventDefault();
        var goTo = this.getAttribute("href");
        $(".all").fadeOut();
        $(".all").fadeOut("slow");
        $(".all").fadeOut(500); 
        setTimeout(function(){
            window.location = goTo;
        },400);       
    });
    /* contact form validation */
    $('#csubmit').click(function(e) { //form validation before sending ajax call
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
   /* contact form validation end */
   $('#cform').submit(function () { //send mail for contact form
        var form_data = [
            this[0].value, 
            this[1].value, 
            this[2].value, 
            this[3].value, 
            this[4].value
        ];  
        //send for additional validation if required   
        $.ajax({
              url: "inc/send_email.php",
              type: "POST",
              data: {params : form_data},
              success: function (output) { 
                if(output) {
                    alert("Email was successfully sent.");
                    window.location.href = "contact.php";
                } else {
                    alert("Something went wrong...\nEmail was not sent!");
                }
            }
            });
   });
}); //end on document for global

//jssor gallery initialization
$(document).ready(function ($) {
    //slider for gallery in accomodation
    if ($.find('.accomodation_gallery') != false) {
        var _SlideshowTransitions = [ //slideshow setup
            {$Duration: 2200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            , { $Duration: 2200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            , { $Duration: 2200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            , { $Duration: 2200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            , { $Duration: 2200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            , { $Duration: 2200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            , { $Duration: 2200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            , { $Duration: 2200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            , { $Duration: 2200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            , { $Duration: 2200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            , { $Duration: 2200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            , { $Duration: 2200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            , { $Duration: 2200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            , { $Duration: 2200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            ];

        var options = {
            $AutoPlay: true,
            $AutoPlayInterval: 5000,
            $PauseOnHover: 1,

            $DragOrientation: 3,
            $ArrowKeyNavigation: true,
            $SlideDuration: 1200,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: _SlideshowTransitions,
                $TransitionsOrder: 1,
                $ShowLink: true
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 2
            },
            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $ChanceToShow: 2,
                $ActionMode: 1,
                $SpacingX: 8,
                $DisplayPieces: 9,
                $ParkingPosition: 750
            }
        };
        var jssor_slider1 = new $JssorSlider$("accomodation_slider", options);
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
        if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            $(window).bind("orientationchange", ScaleSlider);
        }
    }
    //slider for reservation calendars
    if ($.find('#reservation_slider') != false) {
        var options = {

                $ArrowKeyNavigation: true,   			            //Allows arrow key to navigate or not
                $SlideWidth: 400,                                   //[Optional] Width of every slide in pixels, the default is width of 'slides' container
                //$SlideHeight: 350,                                  //[Optional] Height of every slide in pixels, the default is width of 'slides' container
                $SlideSpacing: 0, 					                //Space between each slide in pixels
                $DisplayPieces: 2,                                  //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 200,                                //The offset position to park slide (this options applys only when slideshow disabled).
                
                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                      //[Optional] Steps to go for each navigation request, default value is 1
                },
                
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $ChanceToShow: 2,
                    $ActionMode: 1,
                    $SpacingX: 8,
                    $DisplayPieces: 2,
                    $ParkingPosition: 200
                }
                
            };
        var jssor_slider2 = new $JssorSlider$("reservation_slider", options);
        function ScaleSlider_reservation() {
            var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
            if (parentWidth > 767)
                jssor_slider2.$ScaleWidth(Math.max(Math.min(parentWidth, 800), 180));
            else
                jssor_slider2.$ScaleWidth(Math.max(Math.min(parentWidth, 700), 180));
            
        }
        ScaleSlider_reservation();
//        $(window).bind("load", ScaleSlider);
//        $(window).bind("resize", ScaleSlider);
//        $(window).bind("orientationchange", ScaleSlider);
        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            $(window).bind('resize', ScaleSlider_reservation);
        }
    }
}); //end on document for sliders