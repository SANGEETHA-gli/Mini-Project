<!DOCTYPE html>
<html lang="en">
   <head>
   <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; margin: auto;border-radius:5px;}
        .header{ width: 360px; padding: 20px; margin: auto;border-radius:5px;}
        img{display:block;
            margin: 0 auto;
            width: 395px;
            }
   input{type = text},select
   {width:100%;
   padding:12px 20px;
   margin:8px 0;
  display:inline-block;
  border:1px solid #ccc;
  border-radius:4px;
  box-sizing:border-box;
} 

    </style>
    
</head>
<body>
  <center>  <div class="wrapper">
    <center><div class="header">
 <center> <img src="donate.jpg" alt="donate"></center>
  
      <title>GFG- Store Data</title>
   
      
         <h1>Storing Form data in Database</h1>
         <form action="reg_conn.php" method="post">
             
<p>
   <center>
               <label for="fullName">Full Name:</label>
               <p>
               <input type="text" name="full_name" id="fullName">
</p>
            </p>
         
<p>
               <label for="Address">Address:</label>
               <p>
               <input type="text" name="address" id="Address">
</p>
            </p>
 
<p>
               <label for="District">District:</label>
               <p>
              <select name="district" id="District">
                  <option> Kasargod</option>
                  <option> Kannur</option>
                  <option> Kozhikode</option>
                  <option> Wayanad</option>
                  <option> Malappuram</option>
                  <option> Palakkad</option>
                  <option> Thrissur</option>
                  <option> Ernakulam</option> 
                  <option> Idukki</option>
                  <option> Kottayam</option>
                  <option> Alappuzha</option>
                  <option> Pathanamthitta</option>
                  <option> kollam</option>
                  <option> Thiruvananthapuram</option>
                  
                  
         </select>
</P>
                  
            </p>          
<p>
               <label for="Pincode">Pincode:</label>
               <p>
               <input type="text" name="pincode" id="Pincode">
</p>
            </p>
 <p>
               <label for="Mobile">Mobile Number:</label>
               <p>
               <input type="text" name="mobile" id="Mobile">
</p>
            </p>
 <p>
               <label for="Age">Age:</label>
               <p>
                 <select name="age" id="Age">
                 <option> 18</option>
                  <option> 19</option>
                  <option> 20</option>
                  <option> 21</option>
                  <option> 22</option>
                  <option> 23</option>
                  <option> 24</option>
                  <option> 25</option> 
                  <option> 26</option>
                  <option> 27</option>
                  <option> 28</option>
                  <option> 29</option>
                  <option> 30</option>
                  <option> 31</option>
                  <option> 32</option>
                  <option> 33</option>
                  <option> 34</option>
                  <option> 35</option>
                  <option> 36</option>
                  <option> 37</option>
                  <option> 38</option>
                  <option> 39</option> 
                  <option> 40</option>
                  <option> 41</option>
                  <option> 42</option>
                  <option> 43</option>
                  <option> 44</option>
                  <option> 45</option>
                  <option> 46</option>
                  <option> 47</option>
                  <option> 48</option>
                  <option> 49</option>
                  <option> 50</option>
                  <option> 51</option>
                  <option> 52</option>
                  <option> 53</option> 
                  <option> 54</option>
                  <option> 55</option>
                  <option> 56</option>
                  <option> 60</option>
                  <option> 61</option>
                  <option> 62</option>
                  <option> 63</option>
                  <option> 64</option>
                  <option> 65</option>
         </select>
</P>
                  
               
            </p>
 <p>
               <label for="emailAddress">Email Address:</label>
               <p>
               <input type="text" name="email" id="emailAddress">
</p>
            </p>
 <p>
               <label for="bloodGroup">Blood Group:</label>
               <p>
               <select name="bloodgroup" id="bloodGroup">
               <option> A+</option>
                  <option> O+</option>
                  <option> B+</option>
                  <option> AB+</option>
                  <option> A-</option>
                  <option> O-</option>
                  <option> B-</option>
                  <option> AB-</option> 
         </select>
                  
</P>
            </p>
 
<p>
   <label for="report">Test Report:</label>
   <p>
   <input type="File" name="report" id="report">
</p>
         </p>
 
            <input type="submit" value="Submit">
            
         </form>
      </center>
         </center>
   </body>
</html>