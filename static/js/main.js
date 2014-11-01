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