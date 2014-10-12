<script src="static/js/jquery-1.10.2.min.js"></script>
<script src="static/js/jquery.cookie.js"></script>
<script>
     $(document).ready(function() {
     // cookie check
     if ($.cookie('language') == null) {
          $.cookie('language', 'en', {expires:1825, path:'/'});
          // $.cookie('language', '/en', {expires:365, domain:'villa-ivica.hr', path:'/'});
     }
     //redirect
     if ($.cookie('language')) {
         window.location.replace("en"); // za vrijeme testiranja (dok nisu jezici dovrseni)!!
          // window.location.replace($.cookie("language")); 
          // window.location.replace("localhost/Villa_Ivica/" + $.cookie("language"));
     }
 });
</script>