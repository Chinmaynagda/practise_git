
<!DOCTYPE HTML>
<html>
   <head>
   <style>
.error {color: #FF0000;}
</style>
      <title>
         my website
      </title>
    </head>
   <body>
   <?php 
      $nameErr = $emailErr = $genderErr = $passwordErr="";
      $name = $email = $gender = $comment = $website =  $password = $city="";

      if ($_SERVER["REQUEST_METHOD"] == "POST")   
      {
         if(empty($_POST["name"]))
         {
            $nameErr="name is required";
         }
         else
         {$name=test_data($_POST["name"]);}
         if(!preg_match("/^[a-zA-Z-' ]*$/",$name))                     
        {
           $nameErr = "Only letters and white space allowed";
         }
      
      
      if(empty($_POST["email"]))
        
          {$emailErr="email is required";}
         else
         {$email=test_data($_POST["email"]);}
      

      if(empty($_POST["password"])) 
         {$passwordErr="password is required";}
        else
        {$password=test_data($_POST["password"]);}
     
     if(empty($_POST["gender"]))
       
       { $genderErr="gender is required";}                         
       else
      { $gender=test_data($_POST["gender"]);}


   
    if(empty($_POST["comment"]))
      
       {$comment="";}
      else
     { $comment=test_data($_POST["comment"]);}
   
   if(empty($_POST["website"]))
     
      {$website=" ";}
     else
     {$website=test_data($_POST[" website"]);}
  
     if(empty($_POST["city"]))
     
     {$city=" ";}
    else
    {$city=test_data($_POST["city"]);}
      }

      function test_data($data)
      {
         $data=trim($data);
         $data=htmlspecialchars($data);
         $data=stripcslashes($data);
         return $data;
      }
      
     

   ?>

   <h3> FILL YOUR FORM </h3>
   <p><span class="error">* Required</span></p>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      Name: <input type="text" name="name" value="<?php echo $name;?>" > 
      </p> <span class="error">*<?php echo $nameErr;?></span></p></br>
      Email: <input type="email" name="email" value="<?php echo $email;?>">
      </p> <span class="error">*<?php echo $emailErr;?></span></p></br>
      Password: <input type="password" name="password" value="<?php echo $password;?>"> 
      </p> <span class="error">*<?php echo $nameErr;?></span></p><br/>
      Website: <input type="url" name="website"> </br>
      Comment:<textarea  name= "comment" rows="5" cols="40"><?php echo $comment;?>"</textarea> <br/></br>
      Gender:
        <input type="radio" name="male" <?php   if(isset($gender) && $gender=="male") {$checked='checked="Male"' ;}?> value="<?php echo $checked; ?>">male
        <input type="radio" name="female" <?php if(isset($gender) && $gender=="female") {$checked='checked="female"' ;}?> value="<?php echo $checked; ?>">female
        <input type="radio" name="others" <?php if(isset($gender) && $gender=="others") {$checked='checked="others"' ;}?> value="<?php echo $checked; ?>">others
        <span class ="error">*<?php echo $genderErr;?></span><br/>
      City: <select name="city">
      <option value="Delhi">Delhi </option>
      <option value="Mumbai">Mumbai </option>
      <option value="Chennai">Chennai </option>
      <option value="Kolkata">Kolkata </option>
      </select></br>
      <input type="submit" name="submit" value="submit"><br/>
      </form>
      <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $city;
    echo "<br>";
    echo $password;
?>      
      </body>
      </html>
