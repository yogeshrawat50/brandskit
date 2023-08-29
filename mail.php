




<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

<style>



body {
  background: #ffffff;
  background: linear-gradient(to bottom, #ffffff 0%, #e1e8ed 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e1e8ed',GradientType=0 );
  height: 100%;
  margin: 0;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.wrapper-1 {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
}
.wrapper-2 {
  padding: 30px;
  text-align: center;
}
h1 {
  font-family: "Kaushan Script", cursive;
  font-size: 4em;
  letter-spacing: 3px;
  color: #5892ff;
  margin: 0;
  margin-bottom: 20px;
}
.wrapper-2 p {
  margin: 0;
  font-size: 1.3em;
  color: #aaa;
  font-family: "Source Sans Pro", sans-serif;
  letter-spacing: 1px;
}
.go-home {
  color: #fff;
  background: #ff497c;
  border: none;
  padding: 10px 50px;
  margin: 30px 0; display: inline-block;
  border-radius: 30px;
  text-transform: capitalize;
  box-shadow: 0 10px 16px 1px rgba(174, 199, 251, 1);
}


@media (min-width: 360px) {
  h1 {
    font-size: 4.5em;  color: #ff497c;
  }
  .go-home {
    margin-bottom: 20px;
  }
}

@media (min-width: 600px) {
  .content {
    max-width: 1000px;
    margin: 0 auto;
  }
  .wrapper-1 {
    height: initial;
    max-width: 620px;
    margin: 0 auto;
    margin-top: 50px;
    box-shadow: 4px 8px 40px 8px rgba(88, 146, 255, 0.2);
  }
}



</style>

<div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
   
     
     
     
 









<?php
 
if(isset($_POST['email'])) {
 
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "hey@brandskit.in";
 
    $email_subject = "Contact Form Submission";
 
     
     
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "<h1>Whoops!</h1><h2>There appears to be something wrong with your completed form.</h2>";
 
        echo "<strong><p>The following items are not specified correctly.</p></strong><br />";
 
        echo $error."<br /><br />";
 
        echo "<p>Return to the form and try again.</p><br />";
		echo "<p><a href='index.php'>return to the homepage</a></p>";
        die();
		
 
    }
  
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= '<li><p>The completed e-mail address appears to be incorrect<p></li>';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= '<li><p>First name appears to be wrong</p></li>';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= '<li><p>Last name appears to be wrong</p></li>';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= '<li><p>Message appears to be incorrect</p></li>';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details are given below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 

 
    $email_message .= "Name: ".clean_string($first_name)."\n"; 
 
    $email_message .= "Email Adress: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";

    $email_message .= "Subject: ".clean_string($last_name)."\n";
 
    $email_message .= "Message: ".clean_string($comments)."\n";
 
      
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 

 
<!-- include your own success html here -->
 
 

 
<h1>Thank you !</h1>


<h2>We will contact you as soon as possible.</h2>







 
<?php
 
}
 
?>


<div>
<a href="https://brandskit.in/" class="go-home">      go home </a>

</div>

    </div>
   
  </div>
</div>





<script>
    setTimeout(function(){
       window.location.href = 'https://brandskit.in/';
    }, 5000);



 </script>  


  
