<?php
// variable setting
$name = $_REQUEST['name'];
$Email = $_REQUEST['Email'];
$Address = $_REQUEST['Address'];
 
//check feilds
if (empty($name) || empty($Email) || empty(Address))
{
    echo "please fill all the feilds";
}
else
{
    mail("abhaybbk@gmail.com", "brewbox message", $Address);
    echo "order booked successfully. Thankyou";
}
?>