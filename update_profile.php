<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
        img{display:block;
            margin: 0 auto;
            width: 395px;
            }
    </style>
</head>
<body>
   <center>
    <div class="wrapper">
    <center><div class="header">
 <center> <img src="donate.jpg" alt="donate"></center>
  
      <center>
         <h1>Update Donor's Status</h1>
         <form action="status_conn.php" method="post">
             
<p>
            

               <label for="emailAddress">Email Address:</label>
               <p>
               <input type="text" name="email" id="emailAddress">
         </p>
            </p>
 
<p>
    <label for="status">Status:</label>
    <p>
    <select name="status" id="status">
      <option> Yes </option>
      <option> No </option>
         </select>
         </p>
         </p>



<p>
   <p>
      <div>

 
            <input type="submit" value="Submit">
         </div>
         </p>
         </p>
         </form>
         </center>
      </center>
   </body>
</html>