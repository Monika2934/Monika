<!-------------MONIKA MONIKA - 8622934--------------------------->
<!---->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40"
                                 
                                 value="<?php//code to mamke firstname sticky
                                 if (isset($_POST['firstname']))

                                echo $_POST['firstname'];
                                 ?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40"
                                
                                value="<?php//code to mamke lastname sticky
                                 if (isset($_POST['lastname']))

                                echo $_POST['lastname'];
                                 ?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40"
                          
                          value="<?php//code to mamke age sticky
                                 if (isset($_POST['age']))

                                echo $_POST['age'];
                                 ?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {  

  $firstname = $_POST["firstname"]; 
  $lastname = $_POST["lastname"];
     $age = $_POST["age"];

  //loop for validations to check blank field or age numeric
  if (empty($firstname) || empty($lastname) ||empty($age)) { 
    echo " Blank entry not allowed";
  }
  else{
      
      if(!is_numeric($age))
    {
        echo "Age should be numeric ";
    }
      else
      {
      echo "Thank you for your submission" ;
      }
  }
    // statement to validate checkbutons 
    if(isset($_POST['newsletter']))
    {
        $newsletter=$_POST['newsletter'];
            echo $newsletter;
    }
    else{
        echo " select the button";
        
    }
    
} 
?>