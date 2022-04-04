<?php
// variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$name = $_REQUEST['Address'];
 
//check feilds
if (empty($name) || empty($Email) || empty(Address))
{
    echo "please fill all the feilds";
}
else
{
    mail("abhaybbk@gmail.com", "brewbox", $Address, "Form: $name <$email>");
    echo "<script type='text/javascript'>alert('your order book successfully')
    windows.history.log(-1);
    </script>";
}
?>