<?php require_once 'inc/header.php'; ?>
<title>CONTACT</title>

<div class="col-lg-12 contact_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_txt">
    
    <h4>We look forward to hearing from you!</h4>
    
    <p>
        In case you have any questions or if you have decided to book accommodation, feel free to contact us via e-mail 
        or contact form. We will get back to you as soon as possible. For easier communication, please write in Croatian or English.
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_info">  
    <div class="col-lg-3"> 
        <h4>
            Address
        </h4>       
        <p>
            Kanica 160c <br> Rogoznica <br> Croatia
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
        
        <h4>Contact form</h4>
        
        <div class="col-lg-6">
            <label>Name</label>
            <input type="text" name="fname" id="fname" class="cinput cglow" placeholder="Write your name">
        </div>
        
        <div class="col-lg-6">
            <label>Surname</label>
            <input type="text" name="lname" id="lname" class="cinput cglow" placeholder="Write your surname">
        </div>
        
        <div class="col-lg-6">
            <label>E-mail</label>
            <input type="email" name="email" id="email" class="cinput cglow" placeholder="Write your email address">
        </div>
        
        <div class="col-lg-6">
            <label>Heading</label>
            <input type="text" name="subject" id="subject" class="cinput cglow" placeholder="Write message heading">
        </div>
        
        <div class="col-lg-12">
            <label>Message</label>
            <textarea name="msg" class="cinput cglow" id="msg" rows="5" placeholder="Write the message content"></textarea>
        </div>
        
        <div class="col-lg-12">
                <input type="submit" name="contact_form" id="csubmit" value="SEND">
        </div>
        
    </form>
    
</div>
        
<?php require_once 'inc/footer.php'; ?>
