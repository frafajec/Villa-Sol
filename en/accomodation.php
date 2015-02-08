<?php require_once 'inc/header.php'; ?>
    
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="accomodation_slider" class="accomodation_gallery" style="position: relative; top: 0px; left: 0px; width: 1400px;
        height: 850px; background: #191919; overflow: hidden; margin-left: auto; margin-right: auto;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../static/img/jssor/loader.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1400px; height: 692px; overflow: hidden;">
            <div>
                <img u="image" src="../static/img/gallery/izvana2.jpg" />
                <img u="thumb" src="../static/img/gallery/izvana2_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 200px; width: 1000px; height: 30px;">
                    Apartman izvana, terase s pogledom na more.
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/cesta.jpg" />
                <img u="thumb" src="../static/img/gallery/cesta_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 500px; width: 400px; height: 30px;">
                    Ulična strana kuće s prostorom za parkiranje.
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/donji_kat.jpg" />
                <img u="thumb" src="../static/img/gallery/donji_kat_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 400px; width: 600px; height: 30px;">
                    Donji kat. Kuhinja s blagovaonicom.
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/kuhinja.jpg" />
                <img u="thumb" src="../static/img/gallery/kuhinja_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 600px; left: 400px; width: 600px; height: 90px;">
                    Kuhinja se sastoji od velikog hladnjaka s ledenicom, ugradbene ploče te pećnice, mikrovalne pećnice, perilice posuđa,
                    aparata za kavu te ostalog potrebnog kuhinjskog pribora. 
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/kauc.jpg" />
                <img u="thumb" src="../static/img/gallery/kauc_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 400px; width: 600px; height: 30px;">
                    Donji kat, dnevni boravak. Kauč koji se može razvući u ležaj.
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/kupaona2.jpg" />
                <img u="thumb" src="../static/img/gallery/kupaona2_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 400px; width: 600px; height: 30px;">
                    Donji kat, kupaonica. Sastoji se od tuš kabine, umivaonika i zahoda.
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/terasa.jpg" />
                <img u="thumb" src="../static/img/gallery/terasa_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 400px; width: 600px; height: 30px;">
                    Pogled s donje terase sa sjedećom garniturom.
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/spavaca1.jpg" />
                <img u="thumb" src="../static/img/gallery/spavaca1_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 630px; left: 400px; width: 600px; height: 60px;">
                    Gornji kat, klimatizirana spavaća soba s bračnim krevetom i izlazom na terasu. 
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/spavaca2.jpg" />
                <img u="thumb" src="../static/img/gallery/spavaca2_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 630px; left: 400px; width: 600px; height: 60px;">
                    Gornji kat, klimatizirana spavaća soba s 2 odvojena kreveta i izlazom na malu terasu.
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/gallery/kupaona1.jpg" />
                <img u="thumb" src="../static/img/gallery/kupaona1_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 400px; width: 600px; height: 30px;">
                    Gornji kat, kupaonica. Sastoji se od tuš kabine, umivaonika i zahoda.
                </div>
            </div>
            
            <div>
                <img u="image" src="../static/img/gallery/plaza.jpg" />
                <img u="thumb" src="../static/img/gallery/plaza_thumb.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 400px; width: 600px; height: 30px;">
                    Uređena plaža za sunčanje i kupanje ispod kuće udaljena 70 metara. 
                </div>
            </div>
<!--            <div>
                <img u="image" src="../static/showoff/img/12.jpg" />
                <img u="thumb" src="../static/showoff/img/thumb-12.jpg" />
                <div u="caption" t="caption-transition-name" class="jssor_text" style="position: absolute;
                top: 660px; left: 400px; width: 600px; height: 30px;">
                    Do you see that?
                </div>
            </div>-->
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
                background: url(../static/img/jssor/a17.png) no-repeat;
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
        <div u="thumbnavigator" class="jssort01" style="position: absolute; width: 1400px; height: 160px; left:0px; bottom: 0px;">
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
                    width: 180px;
                    height: 145px;
                    border: #000 1px solid;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                    background: url(../static/img/jssor/t01.png) center center;
                    border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 176px;
                    height: 141px;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 180px;
                    height: 145px;
                    border: #000 3px solid;
                }
            </style>
            <div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 180px; height: 145px; top: 0; left: 0;">
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