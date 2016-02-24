<?php require_once 'inc/header.php'; ?>
<title>Contact - Villa Sol</title> 

<div class="col-lg-12 contact_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_txt">
    
    <h4>Contactez-nous!</h4>
    
    <p>
        Pour des questions supplémentaires ou si vous décidez de faire une réservation, contactez-nous s'il vous 
        plaît par e-mail ou par le formulaire de contact. Nous vous répondrons dès que possible. Pour faciliter 
        la compréhension, écrire en anglais ou en croate s'il vous plaît.
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_info">  
    <div class="col-lg-3"> 
        <h4>
            Adresse
        </h4>       
        <p>
            Kanica 160c <br> Rogoznica <br> Croatie
        </p>
        
    </div>
    
    <div class="col-lg-5"> 
        <h4>
            Contact (Skype)
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
        
        <h4>Formulaire de contact</h4>
        
        <div class="col-lg-6">
            <label>Nom</label>
            <input type="text" name="fname" id="fname" class="cinput cglow" placeholder="Entrez votre nom">
        </div>
        
        <div class="col-lg-6">
            <label>Prénom</label>
            <input type="text" name="lname" id="lname" class="cinput cglow" placeholder="Entrez votre nom de famille">
        </div>
        
        <div class="col-lg-6">
            <label>E-mail</label>
            <input type="email" name="email" id="email" class="cinput cglow" placeholder="Entrez votre adresse">
        </div>
        
        <div class="col-lg-6">
            <label>Titre</label>
            <input type="text" name="subject" id="subject" class="cinput cglow" placeholder="Entrez le sujet de votre message">
        </div>
        
        <div class="col-lg-12">
            <label>Contenu</label>
            <textarea name="msg" class="cinput cglow" id="msg" rows="5" placeholder="Entrez le contenu du message"></textarea>
        </div>
        
        <div class="col-lg-12">
                <input type="submit" name="contact_form" id="csubmit" value="ENVOYER">
        </div>
        
    </form>
    
</div>
        
<?php require_once 'inc/footer.php'; ?>
