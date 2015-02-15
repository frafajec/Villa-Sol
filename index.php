<script src="static/js/jquery-2.1.3.min.js"></script>
<script src="static/js/jquery.cookie.js"></script>
<script>
    $(document).ready(function() {
     if ($.cookie('villa-sol-language') == null) {$.cookie('villa-sol-language', 'en', {expires:1825, path:'/'});}
     if ($.cookie('villa-sol-language')) {window.location.replace($.cookie("villa-sol-language"));}
    });
</script>