$(document).ready(function(){
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
    $('.navbar-nav > li > a').hover(function() {
    //  $(this).stop().animate({ fontSize : '1.52em' }, 200);
        var Text = $(this);
        Text.css({'font-weight':200});
        setTimeout(function(){ Text.css({'font-weight':300});}, 30);
        setTimeout(function(){ Text.css({'font-weight':400});}, 60);
        setTimeout(function(){ Text.css({'font-weight':500});}, 90);
    }, function(){
//      $(this).stop().animate({ fontSize : '1.5em' }, 200);
        var Text = $(this);
        Text.css({'font-weight':400});
        setTimeout(function(){ Text.css({'font-weight':300});}, 60);
        setTimeout(function(){ Text.css({'font-weight':200});}, 90);
        setTimeout(function(){ Text.css({'font-weight':100});}, 120);
    });

    $('#csubmit').click(function(e) {
       $('#cform input[type=text], input[type=email], textarea').each(function() {
          var id = $(this).attr('id'),
              _obj = $('#'+id);
          if (_obj.val() == '') {
               _obj.removeClass('form-control');
               _obj.css({'border':'1.18px solid rgba(255, 0, 0, 0.2)'});
               setTimeout(function(){ _obj.css({'border':'1.37px solid rgba(255, 0, 0, 0.45)'});}, 80);
               setTimeout(function(){ _obj.css({'border':'1.56px solid rgba(255, 0, 0, 0.7)'});}, 160);
               setTimeout(function(){ _obj.css({'border':'1.78px solid rgba(255, 0, 0, 1)'});}, 240);
               setTimeout(function(){ _obj.css({'border':'1.95px solid rgba(255, 0, 0, 1)'});}, 320);
               setTimeout(function(){ _obj.css({'border':'1.68px solid rgba(255, 0, 0, 0.8)'});}, 600);
               setTimeout(function(){ _obj.css({'border':'1.4px solid rgba(255, 0, 0, 0.6)'});}, 700);
               e.preventDefault();
               _obj.tooltip({'triger': 'focus', 'container': 'body', 'title': 'This field is required!', 'delay': {"show": 0, "hide": 2000}});
               _obj.focus();               
//               return false; //završava petlju čim naiđe prvi prazni
                //form-control:focus daje glow effect inputima kad su fokusirani
           }           
      });
   });
   $('#cform input[type=text], input[type=email], textarea').keyup(function() {
       var id = $(this).attr('id'),
              _obj = $('#'+id);
       if(_obj.val() != ''){
           _obj.css({'border':'1px solid #777'});
           _obj.tooltip({ "disabled": 'true' }); //ne radi smeće jedno usrano
       }
   });

});