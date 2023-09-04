<?php require_once('configreg2.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body class="body">
    <link rel="stylesheet" href="tabledesign.css">
    <h1 class="heading">Employee Details</h1>
    <?php                                                                                   
    $src="SELECT * FROM regform2";
    $rs=mysqli_query($db, $src) or die(mysqli_error($db));
    if(mysqli_num_rows($rs)>0){
        ?>
        
        <table class="table" cellpadding="7" cellspacing=0" border="1px">
            <thead >
                <tr>
                    <th class="attr">Sl No.</th>
                    <th class="attr">NAME</th>
                    <th class="attr">EMAIL</th>
                    <th class="attr">PASSWORD</th>
                    <th class="attr">DATE OF BIRTH</th>
                    <th class="attr">GENDER</th>
                    <th class="attr">LANGUAGE</th>
                    <th class="attr">ADDRESS</th>
                    <th class="attr">CITY</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                while($rec=mysqli_fetch_assoc($rs)){
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $rec['name'] ?></td>
                    <td><?php echo $rec['email'] ?></td>
                    <td><?php echo $rec['pass'] ?></td>
                    <td><?php echo $rec['dob'] ?></td>
                    <td><?php echo $rec['gender'] ?></td>
                    <td><?php echo $rec['lang'] ?></td>
                    <td><?php echo $rec['addr'] ?></td>
                    <td><?php echo $rec['city'] ?></td>
                    <td>
                        <form name="upd_rec_<?php echo $i ?>" method="post" action="update.php">
                            <input type="hidden" name="e_id" value="<?php echo $rec['e_id'] ?>">
                            <input type="submit" name="upd" value="Update">
                        </form>    
                    
                    <!-- <a href="update.php?e_id=<?php // echo $rec['e_id'] ?>"><img src="edit.png" </a></td> -->
                    <td>
                        <form name="del_rec_<?php echo $i ?>" method="post" action="delete.php">
                            <input type="hidden" name="e_id" value="<?php echo $rec['e_id'] ?>">
                            <input type="submit" name="del" value="Delete">
                        </form>
                    </td>
                 
                </tr>
                <?php
                $i++;
                }
                ?>
            </tbody>
        </table>
        <?php
    }else{
        echo "<h2>Sorry no student details found</h2>";
    }
    ?>
</body>
</html>
