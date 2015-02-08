<script src="static/js/jquery-2.1.3.min.js"></script>
<script src="static/js/jquery.cookie.js"></script>
<script>
     $(document).ready(function() {
     if ($.cookie('language') == null) {// cookie check
          $.cookie('villa-sol-language', 'en', {expires:1825, path:'/'});
     }
     if ($.cookie('villa-sol-language')) {//redirect
         window.location.replace("en"); // za vrijeme testiranja (dok nisu jezici dovrseni)!!
          // window.location.replace($.cookie("language")); 
          // window.location.replace("localhost/Villa_Ivica/" + $.cookie("language"));
     }
 });
</script>