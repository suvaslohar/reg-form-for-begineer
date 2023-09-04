<?php
require_once('configreg2.php');
$e_id=$_POST['e_id'];
$del="DELETE FROM regform2 WHERE e_id=$e_id";
$res=mysqli_query($db, $del) or die(mysqli_error($db));
if($res==1){
    header('location:display.php?msg=Student details delete successfully');
    echo "Student details delete successfully";
}else{
    header('location:display.php?msg=Student details not delete successfully');
    // echo "Student details not delete successfully";
}

?>