<?php

$connection = mysqli_connect("localhost","root","","akashtechnolab");

if ($_POST)
{
    $u_name=$_POST['u_name'];
    $u_gender=$_POST['u_gender'];
    $u_email=$_POST['u_email'];
    $u_password=$_POST['u_password'];
    $u_address=$_POST['u_address'];
    $u_mobileno=$_POST['u_mobileno'];
    $query=mysqli_query($connection,"insert into tbl_user(u_name,u_gender,u_email,u_password,u_address,u_mobileno)"          . "values('{$u_name}','{$u_gender}','{$u_email}','{$u_password}','{$u_address}','{$u_mobileno}')")
           or die(mysqli_error($connection)); 
    if($query)
    {
        echo "<script>alert('record added');</script>";
    }
            
}
?>
<html>
    <body>
    <center>
        <form  method="post">
            <table border="2">
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="u_name"></td>                
                </tr>
                <tr>
                    <td>User Gender</td>
                    <td><input type="radio" name="u_gender" value="male">Male
                        <input type="radio" name="u_gender" value="female">female</td>
                </tr>
                <tr>
                <td>User Email</td>
                <td><input type="text" name="u_email"></td>
                </tr>
                <tr>
                    <td>User Password</td>
                    <td><input type="password" name="u_password"></td>
                </tr>
                <tr>
                    <td>User Address</td>
                    <td><input type="text" name="u_address"></td>
                  
                </tr>
                <tr>
                    <td>User Mobile No</td>
                    <td><input type="number" name="u_mobileno"></td>
                </tr>
                <tr>
                    <td><input type="submit"></td>
                    
                </tr>
            </table>
        </form>
        
    </center>
    </body>
</html>



