<?php require_once 'inc/header.php'; ?>
<title>Prenotazione - Villa Sol</title>

<div class="col-lg-12 reservation_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_txt">
    
    <h4>Prenotare accomodazione</h4>
    
    <p>
        Se desiderate prenotare la vostra sistemazione in uno dei periodi di tempo disponibili, contattateci tramite il nostro modulo 
        di contatto o email. È possibile prenotare sistemazione nei mesi indicati nel listino prezzi, per un minimo di 7 pernottamenti. 
        I prezzi indicati son per un pernottamento. L’appartamento può sistemare 4 - 6 persone. Il deposito è €200. 
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_info">  
    <div class="col-lg-12"> 
        <h4>
            Listino prezzi
        </h4>       
        <div>
            <table class="rtable">
                <thead>
                    <tr>
                        <th>01 Maggio - <br>31 Maggio</th>
                        <th>01 Giugno - <br>30 Giugno</th>
                        <th>01 Luglio - <br>31 Agosto</th>
                        <th>01 Settembre - <br>30 Settembre</th>
                        <th>01 Ottobre - <br>31 Ottobre</th>
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
            <!-- <p class="discount">Offerta last minute luglio! <br> Dal 01-18 luglio solo 175 € al giorno!</p> -->
        </div> 
    </div>   
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_calendar">
    <div class="col-lg-12">
        <h4>
            Calendario 
        </h4><br/>
        
    <div id="reservation_slider" class="reservation_gallery">
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 400px;
            overflow: hidden;">
            <div>
                <img u="image" src="../static/img/calendar/may.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    MAGGIO
                </div>
            </div> 
            <div>
                <img u="image" src="../static/img/calendar/june.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    GIUGNO
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/july.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    LUGLIO
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/august.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    AGOSTO
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/september.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    SETTEMBRE
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/october.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    OTTOBRE
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
