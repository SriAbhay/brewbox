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
    mail("abhaybbk@gmail.com", "brewbox message", $Address, "form: $name <$Email>");
    echo "<script type='text/javascript'>alert('your order book successfully')
    windows.history.log(-1);
    </script>";
}
?>