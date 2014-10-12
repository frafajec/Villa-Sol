</div> <!-- container -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 main_contact">
                    <h4>CONTACT</h4>

                    <div><p style="color: black; font-weight: bold;">Villa Ivica</p><br></div>
                    <div><p class="makija">Address: </p><p style="color: black;"> Kanica 160, Rogoznica</p><br></div>
                    <div><p class="makija">Phone number: </p><p style="color: black;">+385 91 839 4600</p><br></div>
                    <div><p class="makija">Email: </p><p style="color: black;">villa.ivica@gmail.com</p><br></div>

            </div><!-- /col-lg-6 -->

            <div class="col-lg-6 main_contact">
                                        
                    <p></p>
                    <div class="col-lg-12 weather">
                        
                        <!-- weather widget accuweather.com -->
                        <a href="http://www.accuweather.com/en/hr/rogoznica/121785/weather-forecast/121785" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1412266450053" class="aw-widget-current"  data-locationkey="121785" data-unit="c" data-language="en-us" data-useip="false" data-uid="awcc1412266450053"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                        
                    </div> <!-- widget -->

            </div><!-- /col-lg-6 -->

            <div class="col-lg-12 crta">
            </div><!-- /col-lg-12 -->
            
            <div class="end">
                <div class="col-lg-6">
                        <h4>Villa Ivica</h4>
                </div><!-- /col-lg-6 -->
                <div class="col-lg-6" style="text-align: right;">                    
                        <h4>2014</h4>
                </div><!-- /col-lg-6 -->
            </div>
            
        </div>
    </div>
</footer>
</div> <!-- all -->

<!-- JavaScript -->
    <script src="../static/js/jquery-1.10.2.min.js"></script>
    <script src="../static/js/jquery.cookie.js"></script>
    <!--<script src="../static/js/jquery-ui.js"></script>-->
    <script src="../static/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
           $('#lit').click( function(){
               $.cookie("language", null, { path: '/' });
               $.cookie('language', 'it', {expires:1825, path:'/'});
               window.location.replace("../" + $.cookie("language"));
           });
           $('#lfr').click( function(){
               $.cookie("language", null, { path: '/' });
               $.cookie('language', 'fr', {expires:1825, path:'/'});
               window.location.replace("../" + $.cookie("language"));
           });
           $('#lde').click( function(){
               $.cookie("language", null, { path: '/' });
               $.cookie('language', 'de', {expires:1825, path:'/'});
               window.location.replace("../" + $.cookie("language"));
           });
           $('#len').click( function(){
               $.cookie("language", null, { path: '/' });
               $.cookie('language', 'en', {expires:1825, path:'/'});
               window.location.replace("../" + $.cookie("language"));
           });
           $('#lhr').click( function(){
               $.cookie("language", null, { path: '/' });
               $.cookie('language', 'hr', {expires:1825, path:'/'});
               window.location.replace("../" + $.cookie("language"));
           });
        });
    </script>
    <script>
        $(document).ready(function(){
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
              $(this).stop().animate({ fontSize : '1.55em' }, 200);
          }, function(){
              $(this).stop().animate({ fontSize : '1.5em' }, 200);
          });
        });
    </script>
    