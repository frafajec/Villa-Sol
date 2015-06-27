<?php require_once 'inc/header.php'; ?>
<title>RESERVIERUNG</title>

<div class="col-lg-12 reservation_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_txt">
    
    <h4>Unterkunft buchen</h4>
    
    <p>
        Wenn Sie die Unterkunft in angebotenen freien Tagen buchen möchten, kontaktieren Sie uns bitte über das Kontaktformular oder per E-Mail. 
        Die Buchung der Unterkunft ist in erster Linie in den in der Preisliste angegebenen Monaten möglich, mit einem Minimum von 7 Nächten. 
        Alle Preise gelten für eine Übernachtung. Die Wohnung ist für 4 bis 6 Personen gedacht. Die Kaution beträgt 200 €.
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_info">  
    <div class="col-lg-12"> 
        <h4>
            Preisliste
        </h4>       
        <div>
            <table class="rtable">
                <thead>
                    <tr>
                        <th>01 Juni  - <br>30 Juni </th>
                        <th>01 Juli  - <br>31. Juli </th>
                        <th>01 August - <br>31 August</th>
                        <th>01 September  - <br>30 September </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>180 €</td>
                        <td>220 €</td>
                        <td>220 €</td>
                        <td>180 €</td>
                    </tr>
                </tbody>
            </table>
            <p class="discount">Letzten Minute Juli Angebot! <br> Von Juli 01 bis 18 nur 175 € pro Tag!</p>
        </div>
    </div>   
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_calendar">
    <div class="col-lg-12">
        <h4>
            Kalender
        </h4><br/>
        
    <div id="reservation_slider" class="reservation_gallery">
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 400px;
            overflow: hidden;">
            <div>
                <img u="image" src="../static/img/calendar/lipanj.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    JUNI
                </div>
            </div> 
            <div>
                <img u="image" src="../static/img/calendar/srpanj.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    JULI
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/kolovoz.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    AUGUST
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/rujan.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    SEPTEMBER
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
