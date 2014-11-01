<?php
if(isset($_POST['fname']) &&  isset($_POST['lname']) &&  isset($_POST['email'])
        &&  isset($_POST['subject']) &&  isset($_POST['msg']) ){
    
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email');
    $subject = filter_input(INPUT_POST, 'subject');
    $msg = filter_input(INPUT_POST, 'msg');
    
    $message = 'Ime: ' + $fname + '\n';
    $message += 'Prezime: ' + $lname + '\n';
    $message += 'Email: ' + $email + '\n';
    $message += 'Tema: ' + $subject + '\n\n';
    $message += $msg + '\n';
        
    mail('gradecak.ivan@gmail.com', $subject, $message);
    
}
?>
<?php require_once 'inc/header.php'; ?>

<div class="col-lg-12 contact_panorama">
</div>
<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_txt">
    
    <h4>Contact us</h4>
    
    <p>
        Call us bla bla bla, blabla!
    </p>
    
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_info">  
    <div class="col-lg-3"> 
        <h4>
            Address
        </h4>       
        <p>
            Kanica 160, <br> Rogoznica, <br> Hrvatska
        </p>
        
    </div>
    
    <div class="col-lg-5"> 
        <h4>
            Contact number
        </h4>        
        <p>
            Phone number: +385 91 893 4600 <br> Skype: 6594 948 64 6
        </p>
    </div>
    
    <div class="col-lg-4"> 
        <h4>
            E-mail
        </h4>
        <p>
            gradecak.ivan@gmail.com
        </p>
    </div>   
</div>

<div class="col-lg-6 cline"></div>

<div class="col-lg-12 contact_form">
    
    <form name="contact_form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="cform">
        
        <h4>Contact form</h4>
        
        <div class="col-lg-6">
            <label>Firstname</label>
            <input type="text" name="fname" id="fname" class="cinput cglow" placeholder="Write your first name">
        </div>
        
        <div class="col-lg-6">
            <label>Lastname</label>
            <input type="text" name="lname" id="lname" class="cinput cglow" placeholder="Write your last name">
        </div>
        
        <div class="col-lg-6">
            <label>E-mail</label>
            <input type="email" name="email" id="email" class="cinput cglow" placeholder="Write your email address">
        </div>
        
        <div class="col-lg-6">
            <label>Subject</label>
            <input type="text" name="subject" id="subject" class="cinput cglow" placeholder="Write the subject of the email">
        </div>
        
        <div class="col-lg-12">
            <label>Message</label>
            <textarea name="msg" class="cinput cglow" id="msg" rows="5" placeholder="Write the message of this email here"></textarea>
        </div>
        
        <div class="col-lg-12">
            <input type="submit" name="contact_form" id="csubmit" value="SEND MESSAGE">
        </div>
        
    </form>
    
</div>
        
<?php require_once 'inc/footer.php'; ?>
