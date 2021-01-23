<?php
session_start();
$_SESSION['mail']=$_REQUEST['emails'];

$emails=$_REQUEST['emails'];
echo $emails;

if(preg_match('#^[\w.-_]+@[\w]+\.[a-z]{2,}$#',$emails) ==1)
	
{
	
	$contents= file_get_contents('emails.txt');
	
	file_put_contents('emails.txt',$emails."\n".$contents);
}




header( 'Location: index.php', true, 301 );
?>