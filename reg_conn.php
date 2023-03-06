<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "staff");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $status = 'Yes';
        $full_name =  $_REQUEST['full_name'];
        $address = $_REQUEST['address'];
        $district =  $_REQUEST['district'];
        $pincode = $_REQUEST['pincode'];
        $mobile = $_REQUEST['mobile'];
        $age = $_REQUEST['age']; 
        $email = $_REQUEST['email'];
        $bloodgroup =  $_REQUEST['bloodgroup'];
        $report =  $_REQUEST['report'];
        

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO reg VALUES ('$status','$full_name','$address','$district','$pincode','$mobile','$age','$email','$bloodgroup','$report')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$full_name\n $address\n "
                . "$district\n $pincode\n $mobile\n"
                ."$age\n $email\n $bloodgroup\n $report");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>