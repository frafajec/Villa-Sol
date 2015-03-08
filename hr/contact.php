<?php require_once 'inc/header.php'; ?>
<title>KONTAKT</title>

<div class="col-lg-12 contact_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_txt">
    
    <h4>Javite nam se!</h4>
    
    <p>
        U slučaju dodatnih pitanja ili ako ste odlučili rezervirati smještaj, slobodno nas kontaktirajte 
        pomoću e-maila ili kontaktog obrasca. Mi ćemo vam odgovoriti u najkraćem mogućem roku.
        Radi lakšeg sporazumijevanja molimo da  pišete na hrvatskom ili engleskom jeziku.
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_info">  
    <div class="col-lg-3"> 
        <h4>
            Adresa
        </h4>       
        <p>
            Kanica 160c <br> Rogoznica <br> Hrvatska
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
        
        <h4>Kontaktni obrazac</h4>
        
        <div class="col-lg-6">
            <label>Ime</label>
            <input type="text" name="fname" id="fname" class="cinput cglow" placeholder="Upišite svoje ime">
        </div>
        
        <div class="col-lg-6">
            <label>Prezime</label>
            <input type="text" name="lname" id="lname" class="cinput cglow" placeholder="Upišite svoje prezime">
        </div>
        
        <div class="col-lg-6">
            <label>E-mail</label>
            <input type="email" name="email" id="email" class="cinput cglow" placeholder="Upišite svoju email adresu">
        </div>
        
        <div class="col-lg-6">
            <label>Naslov</label>
            <input type="text" name="subject" id="subject" class="cinput cglow" placeholder="Upišite naslov poruke">
        </div>
        
        <div class="col-lg-12">
            <label>Sadržaj</label>
            <textarea name="msg" class="cinput cglow" id="msg" rows="5" placeholder="Upišite sadržaj poruke"></textarea>
        </div>
        
        <div class="col-lg-12">
                <input type="submit" name="contact_form" id="csubmit" value="POŠALJI">
        </div>
        
    </form>
    
</div>
        
<?php require_once 'inc/footer.php'; ?>
