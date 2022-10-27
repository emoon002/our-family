 <?php

$errors = '';
$myemail = 'staypuff666@gmail.com';//<-----Put Your email address here.
if(empty($_POST['firstname'])  || 
   empty($_POST['lastname'])   ||
   empty($_POST['subject']))
{
    $errors .= "\n Error: all fields are required";
}

$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$subject = $_POST['subject']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))

{

$to = $myemail;

$email_subject = "Contact form submission: $firstname + ' ' + $lastname";

$email_body = "You have received a new message! ".

" Here are the details:\n Name: $firstname + ' ' + $lastname \n ".

"Email: $email_address\n Message: \n $subject";

$headers = "From: $myemail\n";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

//header('Location: contact-form-thank-you.html');

}


?>

