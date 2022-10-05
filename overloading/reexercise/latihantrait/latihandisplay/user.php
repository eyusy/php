<?php
include 'handphone.php';
class user {
 

 

public function __construct(handphone $handphone)
{


}
public function tekantombol(handphone $handphone)
{

return $handphone;

}

}
$blackberry = new handphone();

$user = new user($blackberry);



$user->tekantombol($blackberry);