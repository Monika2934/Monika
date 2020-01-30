<!--------------MONIKA MONIKA -862934------------------------------>
<?php
//part3(a):
$words= "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";//declare a variable and paste input
    
    $array= explode(" ", $words);// created an array 
    sort($array);//sort an array
    $array = implode (" ", $array);
echo "<b>Sorted array is:</b></br> $array</br> ";// print an array


function uniqueChar($str){
    for($i=0; $i<strlen($str); $i++)
    {
        for($j=$i+1; $j<strlen($str); $j++)
        {
            if($str[$i]==$str[$j])
            {
                return true;
            }
        }
    }
    return false;
}//create function to sort a string

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['firstname'])){
        $checking = uniqueChar($_POST['firstname']);
        
        if($checking ==true){
            echo'<p>String has duplicate characters</p>';
        }else{
            echo'<p>String has no duplicate characters</p>';
        }
        
    }
}else
        echo '<p>Enter String</p>';
    //loop to check duplicate string or non duplicate

?>



<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	
    Firstname:<input type="text" name="firstname">
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>

