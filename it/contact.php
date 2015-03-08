<?php require_once 'inc/header.php'; ?>
<title>CONTATTATECI</title>

<div class="col-lg-12 contact_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_txt">
    
    <h4>Non vediamo l'ora di sentire da voi!</h4>
    
    <p>
        Se avete delle domande o se avete deciso di prenotare l’appartamento, contattateci tramite email o il nostro modulo di contatto. 
        Vi risponderemo a più presto possibile. Per comunicazione più facile scriveteci in inglese o croato.
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_info">  
    <div class="col-lg-3"> 
        <h4>
            Indirizzo
        </h4>       
        <p>
            Kanica 160c <br> Rogoznica <br> Croatia
        </p>
        
    </div>
    
    <div class="col-lg-5"> 
        <h4>
            Contatto (Skype)
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
        
        <h4>Modulo di contatto</h4>
        
        <div class="col-lg-6">
            <label>Nome</label>
            <input type="text" name="fname" id="fname" class="cinput cglow" placeholder="Scrivere il nome">
        </div>
        
        <div class="col-lg-6">
            <label>Cognome</label>
            <input type="text" name="lname" id="lname" class="cinput cglow" placeholder="Scrivere il cognome">
        </div>
        
        <div class="col-lg-6">
            <label>E-mail</label>
            <input type="email" name="email" id="email" class="cinput cglow" placeholder="Scrivere l’indirizzo">
        </div>
        
        <div class="col-lg-6">
            <label>Titolo</label>
            <input type="text" name="subject" id="subject" class="cinput cglow" placeholder="Scrivere il titolo del messaggio">
        </div>
        
        <div class="col-lg-12">
            <label>Messaggio</label>
            <textarea name="msg" class="cinput cglow" id="msg" rows="5" placeholder="Scrivere il messaggio"></textarea>
        </div>
        
        <div class="col-lg-12">
                <input type="submit" name="contact_form" id="csubmit" value="MANDARE">
        </div>
        
    </form>
    
</div>
        
<?php require_once 'inc/footer.php'; ?>
