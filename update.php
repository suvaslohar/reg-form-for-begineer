<?php require_once('configreg2.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body class="body">
<div class="formbg"></div>
<link rel="stylesheet" href="design.css">

    <?php
    $e_id=$_POST['e_id'];
    // echo $e_id;
    $src="SELECT * FROM regform2 WHERE e_id=$e_id";
    $rs=mysqli_query($db, $src)or die(mysqli_error($db));
    $rec=mysqli_fetch_assoc($rs);
    ?>
    <form name="reg-frm" method="post">

<table cellpadding="8" class="table">
    <th>
        <td colspan="2" class= "heading">Update Employee </td>
    </th>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name"  value="<?php echo $rec['name'] ?>" placeholder="Enter your name" class="entrybox" required></td>
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
            <input type="submit" name="ok" value="Update" class="submit">
            <!-- <a href="display.php"><input type="button" value="Show Record" class="admin" class="admin"></a> -->
            
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
            $sql="UPDATE regform2 SET name='$name', email='$email', pass='$spass', dob='$dob',gender='$gender',lang='$lang1',addr='$addr',city='$city' WHERE e_id=$e_id";
            $res=mysqli_query($db, $sql) or die(mysqli_error($db));
            if($res==1){
                // echo "Update is successfull";
                header('location:display.php?msg=Student details update successfully');
            }else{
                header('location:display.php?msg=Student details not update successfully');
                // echo "Update is unsuccessfull";
            }
    }
    ?>
</body>
</html>