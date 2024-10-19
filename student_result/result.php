<?php

function calculateResult($bangla,$english,$math,$physics,$chemistry){
  
    $total_marks = $bangla + $english + $math + $physics + $chemistry;
    $average_mark= $total_marks/5;




    $grade = "";
    switch(true){
        case($average_mark<=100 && $average_mark>=80):
            $grade = "A+";
        break;
    
        case($average_mark<80 && $average_mark>=70):
            $grade = "A";
        break;
    
        case($average_mark<70 && $average_mark>=60):
            $grade = "A-";
        break;
    
        case($average_mark<60 && $average_mark>=50):
            $grade = "B";
        break;
    
        case($average_mark<50 && $average_mark>=40):
            $grade = "C";
        break;
    
        case($average_mark<40 && $average_mark>=33):
            $grade = "D";
        break;
    
        default:
            $grade = "F";
     
    }

  

if($bangla >100  ||  $bangla <0  ||  $english >100  ||  $english <0  ||  $math >100  ||  $math <0  || $physics >100  ||  $physics <0  ||  $chemistry >100   ||  $chemistry <0){
   
    echo "Mark range is invalid";

}elseif  ($bangla <33  ||  $english <33  ||  $math <33  ||  $physics <33  ||  $chemistry <33){

    echo "Failed";

}else{
    echo "Total Marks: {$total_marks}<br>Average Marks: {$average_mark}<br>Grade: {$grade}"; 
}


}

calculateResult(82, 90, 100, 80, 90);


?>