<!DOCTYPE html>
<html>
<body>

<?php

for($i=1; $i<=100; $i++){
	echo ThreeFive($i);
    echo '<br>';
}

function ThreeFive($num){
	$text = '';
	if($num%3 == 0){
    	$text = 'Three';
    }
    if($num%5 == 0){
    	$text .= 'Five';
    }
    if(($num%3 != 0) && ($num%5 != 0)){
    	$text = $num;
    }
    
    return $text;
    
}

?> 

</body>
</html>