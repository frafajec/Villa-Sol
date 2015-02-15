<?php require_once 'inc/header.php'; ?>

<div class="col-lg-12 contact_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_txt">
    
    <h4>Melden Sie sich!</h4>
    
    <p>
        Im Falle von zusätzlichen Fragen oder wenn Sie sich entschließen, eine Reservierung zu machen, kontaktieren Sie uns bitte 
        per E-Mail oder mit dem Kontaktformular. Wir werden Ihnen so schnell wie möglich antworten. Zwecks besserer Verständigung, 
        schreiben Sie bitte auf Englisch oder Kroatisch.
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_info">  
    <div class="col-lg-3"> 
        <h4>
            Anschrift
        </h4>       
        <p>
            Kanica 160c <br> Rogoznica <br> Kroatien
        </p>
        
    </div>
    
    <div class="col-lg-5"> 
        <h4>
            Kontakt (Skype)
        </h4>        
        <p>
            VillaSolAdriatic
        </p>
    </div>
    
    <div class="col-lg-4"> 
        <h4>
            E-mail
        </h4>
        <p>
            villa.sol.adriatic@gmail.com
        </p>
    </div>   
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_form">
    
    <form id="cform" action="javascript:void(0);" method="post">
        
        <h4>Kontaktformulary</h4>
        
        <div class="col-lg-6">
            <label>Name</label>
            <input type="text" name="fname" id="fname" class="cinput cglow" placeholder="Geben Sie Ihren Namen ein">
        </div>
        
        <div class="col-lg-6">
            <label>Nachname</label>
            <input type="text" name="lname" id="lname" class="cinput cglow" placeholder="Geben Sie Ihren Nachnamen ein">
        </div>
        
        <div class="col-lg-6">
            <label>E-mail</label>
            <input type="email" name="email" id="email" class="cinput cglow" placeholder="Geben Sie Ihre Adresse ein">
        </div>
        
        <div class="col-lg-6">
            <label>Überschrift</label>
            <input type="text" name="subject" id="subject" class="cinput cglow" placeholder="Geben Sie den Betreff Ihrer Nachricht ein">
        </div>
        
        <div class="col-lg-12">
            <label>Inhalt</label>
            <textarea name="msg" class="cinput cglow" id="msg" rows="5" placeholder="Geben Sie den Inhalt der Nachricht ein"></textarea>
        </div>
        
        <div class="col-lg-12">
                <input type="submit" name="contact_form" id="csubmit" value="SENDEN">
        </div>
        
    </form>
    
</div>
        
<?php require_once 'inc/footer.php'; ?>
