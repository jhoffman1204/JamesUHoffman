<?PHP

/*
$name = $_POST['name'];
$email = $_POST['email'];
$data = $name . "," . $email;
$file = "file.csv";
print("Thank you for submitting your email; address!");
//EOL makes it go to the last line in the file and then FILE_APPEND add it on a later line
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
*/

$from=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mail("james.a.hoffman@stonybrook.edu", $subject, $message,"From:".$from);
header("Location: ../");
print("<h1 align=center >your email has been sent</h1>");

?>