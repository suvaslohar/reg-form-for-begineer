<?php require_once('configreg2.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body bgcolor="green">
    <center>
    <h1>Employee Registration</h1>
    <form name="reg-frm" method="post">
        <table cellpadding="9">
            <tr>
                <td>Name</td>
                <td><input type="text" name="ename" required placeholder="Enter your name"></td>
            </tr>
            <tr>
                <td>Email-id</td>
                <td><input type="email" name="eemail" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="empass" required></td>
            </tr>

            <tr>
            <td>Bate of Birth</td>
            <td><input type="date" name="edob">
            </td>
        </tr>

            <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="Male" checked>Male
                <input type="radio" name="gender" value="Female">Female
            </td>
        </tr>

        <tr>
            <td>Language</td>
            <td><input type="radio" name="elang" value="c" checked>C
                <input type="radio" name="elang" value="c++">C++
                <input type="radio" name="elang" value="php">PHP
            </td>
        </tr>

        <tr>
            <td>Address</td>
            <td highi="3" width="2"><input type="text" name="eadd">
            </td>
        </tr>

        <td>City</td>
            <td>
                <select name="ecity">
                    <option value="kolkata">kolkata</option>
                    <option value="chennai">chennai</option>
                    <option value="mumbai">mumbai</option>
                </select>
            </td>
        </tr>

            <tr>
            <td colspan="1" align="center">
                    <input type="submit" name="ok" value="Reset">
                </td>
                <td colspan="2" align="center">
                    <input type="submit" name="ok" value="Register">
                </td>
                
            </tr>      
        </table>
        </center>
    </form>
    <?php
    if(isset($_POST['ok'])){
        $ename=$_POST['ename'];
        $eemail=$_POST['eemail'];
        $empass=$_POST['empass'];
        $edob=$_POST['edob'];
        $elang=$_POST['elang'];
        $eadd=$_POST['eadd'];
        $ecity=$_POST['ecity'];
        $sql="INSERT INTO employee (ename, eemail, empass,edob,eadd,ecity) VALUES ('$ename', '$eemail', '$empass','$edob','$elang','$eadd','$ecity')";
        $res=mysqli_query($db, $sql);
        if($res==1){
            echo "Registration is successfull";
        }else{
            echo "Registration is unsuccessfull";
        }
    }
    ?>
</body>
</html>