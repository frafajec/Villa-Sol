<?php require_once 'inc/header.php'; ?>
<title>Reservation - Villa Sol</title>

<div class="col-lg-12 reservation_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_txt">
    
    <h4>Accommodation booking</h4>
    
    <p>
        If you wish to book accommodation during date ranges stated below, please contact us via contact form or e-mail. 
        Accommodation booking is possible for the months listed in our price list with the minimum of 7 overnight stays. 
        The prices are for one overnight stay. The apartment is for 4 to 6 persons. The deposit is €200.
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_info">  
    <div class="col-lg-12"> 
        <h4>
            Price list
        </h4>       
        <div>
            <table class="rtable">
                <thead>
                    <tr>
                        <th>01 May - <br>31 May</th>
                        <th>01 June - <br>30 June</th>
                        <th>01 July - <br>31 August</th>
                        <th>01 September  - <br>30 September </th>
                        <th>01 October  - <br>31 October </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>€119</td>
                        <td>€159</td>
                        <td>€185</td>
                        <td>€159</td>
                        <td>€119</td>
                    </tr>
                </tbody>
            </table>
            <!-- <p class="discount">Last minute July offer! <br> From 1st to 18th July only €175 per day!</p> -->
        </div>
    </div>   
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_calendar">
    <div class="col-lg-12">
        <h4>
            Calendar
        </h4><br/>
        
    <div id="reservation_slider" class="reservation_gallery">
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 400px;
            overflow: hidden;">
            <div>
                <img u="image" src="../static/img/calendar/may.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    MAY
                </div>
            </div> 
            <div>
                <img u="image" src="../static/img/calendar/june.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    JUNE
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/july.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    JULY
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/august.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    AUGUST
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/september.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    SEPTEMBER
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/october.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    OCTOBER
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
