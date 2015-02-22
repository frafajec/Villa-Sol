<?php require_once 'inc/header.php'; ?>

<div class="col-lg-12 reservation_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_txt">
    
    <h4>Réservation de logement</h4>
    
    <p>
        Si vous voulez réserver un hébergement en jours offerts libres, contactez-nous s'il vous plaît  par le formulaire 
        de contact ou par e-mail. Réservation d'hébergement est surtout possible dans les mois mentionnés dans la liste de prix 
        avec un minimum de 7 nuits. Tous les prix sont pour une nuit. L'appartement est conçu pour accueillir 4 à 6 personnes. 
        Le dépôt de garantie est de 200 €.
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_info">  
    <div class="col-lg-12"> 
        <h4>
            Liste des prix
        </h4>       
        <div>
            <table class="rtable fr">
                <thead>
                    <tr>
                        <th>1.er Juin - <br>30. ème Juin</th>
                        <th>1.er Juillet - <br>31. ème Juillet</th>
                        <th>1.er Août - <br>31. ème Août</th>
                        <th>1.er Septembre - <br>30. ème Septembre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>150€</td>
                        <td>250€</td>
                        <td>250€</td>
                        <td>180€</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>   
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 reservation_calendar">
    <div class="col-lg-12">
        <h4>
            Calendrier
        </h4><br/>
        
    <div id="reservation_slider" class="reservation_gallery">
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 800px; height: 400px;
            overflow: hidden;">
            <div>
                <img u="image" src="../static/img/calendar/lipanj.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    JUIN
                </div>
            </div> 
            <div>
                <img u="image" src="../static/img/calendar/srpanj.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    JUILLET
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/kolovoz.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    AOÛZ 
                </div>
            </div>
            <div>
                <img u="image" src="../static/img/calendar/rujan.png" />
                <div u="caption" t="caption-transition-name" class="calendar_text" style="position: absolute;
                top: 22px; left: 50px; width: 250px; height: 45px;">
                    SEPTEMBRE
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