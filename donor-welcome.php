<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: donor-login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style type="text/css">
            table{
                  border-collapse:collapse;
                  width: 100%;
                  color:#d96459;
                  font-family: monspace;
                  font-size: 20px;
                  text-align: left;
            }
            </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        .signout{
        margin-top:60px;
        float:right;
        padding:20px 40px;
     }
     body{
                background-color: white;
            }
            *:focus{
                outline: none;
            }
            .box{
                box-sizing: border-box;
                width: 800px;
                height: 580px;
                border: 1px solid #3498db;
                border-radius: 5px;
                box-shadow: -3px -3px 7px red,3px 3px 5px red;
                background-color: white;
                margin-top: 50px;
                overflow: hidden;
            }
            img{
                border: 2px solid red;
                width: 143px;
                height: 145px;
                border-radius: 50%;
                margin: 0;
                background-color: black;
            }
            input[type="text"],
            input[type="email"]{
                display: block;
                box-sizing: border-box;
                background: none;
                color: #3498db;
                margin-bottom: 30px;
                padding: 4px;
                width: 220px;
                height: 32px;
                border: none;
                font-weight: 400;
                border-bottom: 1px solid #0082e6;
                font-size: 15px;
            }
            input[type="text"]:focus,
            input[type="email"]:focus{
                border-bottom: 2px solid #3498db;
                border-bottom-right-radius: 20px;
                color: #3498db;
            }
            button{
                border: 1px solid lightred;
                background-color:lightblue ;
                color:black;
                height: 30px;
                width: 100px;
                border-radius: 5px;
                margin: 0px;
            }
            input[type="file"]{
                display: none;
            }
            label{
                box-sizing: border-box;
                font-size: 20px;
                background-color: red;
                color: white;
                border: 1px;
                border-radius: 5px;
                padding: 2px 15px;
                        }
 #form{
        width: 80%;
        height: 280px;
        background-color: red;
        color: white;
        border-radius: 10px;
    }
    </style>
</head>
<body>
    
<div class=signout>
        <a href="donor-logout.php" class="btn btn-danger ml-3">Sign Out</a>
</div>
<center><h1>Profile</h1></center>
        <center>
        <body>

<table>
    
    <tr>
       <ul> <th>Full Name</th>
        <th>Address</th>
        <th>District</th>
        <th>Pincode</th>
        <th>Mobile</th>
        <th>Age</th>
        <th>E-mail</th>
        <th>bloodgroup</th></ul>
</tr>
<?php 
$conn = mysqli_connect('localhost','root','','staff');
if($conn-> connect_error){
    die("Connection failed:".$conn-> connect_error);
}
$sql ="select * from reg full_name like  '%$username%' ";
$result =$conn-> query($sql);
if($result-> num_rows>0){
    while($row =$result->fetch_assoc()){
        echo"<tr><td>".$row["full_name"]."</td><td>". $row["address"]."</td><td>".$row["district"]."</td><td>".$row["pincode"]."</td><td>".$row["mobile"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td><td>".$row["bloodgroup"]."</td></tr>";
    }
    echo "</table>";


}
else{
    echo "0 result";
    $conn-> close();
}
?>


        
        </div>
        </center>
        </table>
</body>
</html>