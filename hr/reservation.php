<?php require_once 'inc/header.php'; ?>
<title>Rezervacija - Villa Sol</title>

<div class="col-lg-12 reservation_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_txt">
    
    <h4>Rezervacija smještaja</h4>
    
    <p>
        Ukoliko želite rezervirati smještaj u ponuđenim slobodnim danima, kontaktirajte nas putem kontaktnog obrasca ili e-maila. 
        Rezervacija smještaja prvenstveno je moguća u mjesecima navedenim u cjeniku uz minimalno 7 noćenja. 
        Izražene cijene odnose se na jedno noćenje. Apartman je namijenjen boravku 4 do 6 osoba. Sigurnosni polog iznosi 200€.

    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_info">  
    <div class="col-lg-12"> 
        <h4>
            Cjenik
        </h4>       
        <div>
            <table class="rtable">
                <thead>
                    <tr>
                        <th>1. svibanj - <br>31. svibanj</th>
                        <th>1. lipanj - <br>30. lipanj</th>
                        <th>1. srpanj - <br>31. kolovoz</th>
                        <th>1. rujan - <br>30. rujan</th>
                        <th>1. listopad - <br>31. listopad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>€120</td>
                        <td>€170</td>
                        <td>€220</td>
                        <td>€170</td>
                        <td>€120</td>
                    </tr>
                </tbody>
            </table>
            <!-- <p class="discount">Last minute ponuda za srpanj! <br> Od 1. do 18. srpnja samo 175€ po danu!</p> -->
        </div>
    </div>   
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_calendar">
    <div class="col-lg-12">
        <h4>
            Kalendar
        </h4><br/>
        
    <div id="reservation_slider" class="reservation_gallery">
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 400px;
            overflow: hidden;">
            <div>
                <img u="image" src="../static/img/calendar/may.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    SVIBANJ
                </div>
            </div> 
            <div>
                <img u="image" src="../static/img/calendar/june.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    LIPANJ
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/july.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    SRPANJ
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/august.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    KOLOVOZ
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/september.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    RUJAN
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/october.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    LISTOPAD
                </div>
            </div>
        </div>
        <style>
            .jssora03l, .jssora03r, .jssora03ldn, .jssora03rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../static/img/jssor/a03.png) no-repeat;
                overflow:hidden;
            }
            .jssora03l { background-position: -244px -33px; }
            .jssora03r { background-position: -302px -33px; }
            .jssora03l:hover { background-position: -123px -33px; }
            .jssora03r:hover { background-position: -183px -33px; }
            .jssora03ldn { background-position: -243px -33px; }
            .jssora03rdn { background-position: -303px -33px; }
        </style>
        <span u="arrowleft" class="jssora03l" style="width: 55px; height: 55px; top: 150px; left: 0px;">
        </span>
        <span u="arrowright" class="jssora03r" style="width: 55px; height: 55px; top: 150px; right: 0px">
        </span>
    </div>

    </div>
    </div>  
</div>
        
<?php require_once 'inc/footer.php'; ?>
