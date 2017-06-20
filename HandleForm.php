<?php /* form.html DataHandling */

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$email=$_POST['email'] ;
$Comments=$_POST['Comments'] ;
$Name= $FirstName ."". $LastName  ;
$_SESSION['Name'] = $Name ;

Print "<center><h2>Your First name is: $FirstName.<BR>\n";
Print "Your last name is: $LastName.<BR>\n";
Print "Your email is: $email.<BR>\n";
Print "This is what you had to say: $Comments.<BR>\n";

 $Name = urlencode($Name);
 Print ("<p> Click <a href=\Welcome.php?Name=$Name> Here </a> To see your greeting\n");

 ?>
 </BODY></HTML>
