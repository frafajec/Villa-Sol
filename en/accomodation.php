<?php require_once 'inc/header.php'; ?>
    
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1200px;
        height: 706px; background: #191919; overflow: hidden; margin-left: auto; margin-right: auto;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../static/showoff/loader.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 586px; overflow: hidden;">
            <div>
                <img u="image" src="../static/showoff/img/01.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-01.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 200px; width: 800px; height: 30px;">
                    This is long description therefore container is wider.
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/02.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-02.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 400px; width: 400px; height: 30px;">
                    This is short descriptor.
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/03.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-03.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/04.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-04.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/05.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-05.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/06.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-06.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/07.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-07.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/08.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-08.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/09.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-09.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/10.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-10.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            
            <div>
                <img u="image" src="../static/showoff/img/11.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-11.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
            <div>
                <img u="image" src="../static/showoff/img/12.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-12.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 556px; left: 300px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>
        </div>
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../static/showoff/a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 285px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 285px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 1200px; height: 120px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <style>
                /* jssor slider thumbnail navigator skin 01 css */
                /*
                .jssort01 .p           (normal)
                .jssort01 .p:hover     (normal mouseover)
                .jssort01 .pav           (active)
                .jssort01 .pav:hover     (active mouseover)
                .jssort01 .pdn           (mousedown)
                */
                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 150px;
                    height: 104px;
                    border: #000 1px solid;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                    background: url(../static/showoff/t01.png) center center;
                    border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 146px;
                    height: 100px;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 150px;
                    height: 104px;
                    border: #000 3px solid;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 150px; height: 104px; top: 0; left: 0;">
                    <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->

    </div>
    <!-- Jssor Slider End -->
    
<?php require_once 'inc/footer.php'; ?>