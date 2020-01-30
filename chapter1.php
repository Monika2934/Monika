<!----------Monika Monika- 8622934+---------------------->
<!-----created a php file ---------->
<?php
    
    $base=12.3;//create a variable name base

    $height=8.6;//create a variable name height
    
    $area=0.5*($base*$height);//formula to calculate an area
    
    $area=round($area,2);//round area to 2 decimal places
    echo'<p>The area of triangle is &nbsp'. $area .'</p>';//display the area

    $MY_NAME='Monika Bhatti';//define constant
    $MY_NAME= strtoupper   ($MY_NAME);//converting string to uppercase

    echo '<p>My Name is <strong>'. $MY_NAME.'</strong></p>';// displaying the text
    

    
?>