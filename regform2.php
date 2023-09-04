<?php require_once('configreg2.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body class="body">
<link rel="stylesheet" href="design.css">
<div><img src="lg.png" class="logo"></div>
<div class="formbg"></div>


<form name="reg-frm" method="post">

        <table cellpadding="8" class="table">
            <th>
                <td colspan="2" class= "heading">Employee Registration</td>
            </th>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"  placeholder="Enter your name" class="entrybox" required></td>
            </tr>

            <tr>
                <td>Email-Id</td>
                <td><input type="email" name="email" class="entrybox"required></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" class="entrybox"required></td>
            </tr>

            <tr>
                <td>Date Of Birth</td>
                <td><input type= "date" name="dob" class="entrybox"required></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>
                <input type="radio" name="gender" value="Male"  id="male"  checked>Male
                <input type="radio" name="gender" value="Female" id="female" >Female
                </td>
                
            </tr>

            <tr>
                <td>Language</td>
                <td>

                <input type="checkbox" id="C" name="lang[]" value="C" >
                <label for="C">C</label>

                <input type="checkbox" id="C++" name="lang[]" value="C++" >
                <label for="C++">C++</label>

                <input type="checkbox" id="PHP" name="lang[]" value="PHP" checked >
                <label for="php">PHP</label>

                </td>
            </tr>

            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="addr" id="address" class="add"required>
                </td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                <select name="city" required  class="city">
                <option value="chennai">chennai</option>
                <option value="mumbai">mumbai</option>
                <option value="kolkata">kolkata</option>

                 </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="ok" value="Register" class="submit">
                    <a href="display.php"><input type="button" value="admin" class="admin" class="admin"></a>
                    
                </td>
            </tr>
            
        </table>
        </form>


    
   
    <?php
    if(isset($_POST['ok'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];

        $lang=$_POST['lang'];
        $lang1= implode(",",$lang);
    

        $addr=$_POST['addr'];
        $city=$_POST['city'];
    

        $sql="INSERT INTO regform2(name,email,pass,dob,gender,lang,addr,city) VALUES('$name','$email','$pass','$dob','$gender','$lang1','$addr','$city')";
        $res=mysqli_query($db,$sql);
        if($res==1){
            echo"<p>Registration Successful......</p>";

        }
        else{
            echo"Registration is unsuccessfull";
        }
    }
    ?>
    
    
</body>
</html>