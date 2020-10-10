<?php 
$taxYear = $taxMonth = $yearly = $monthly = $social =$plan = $after ='';

if (isset($_POST['submit'])){ //when login button is pressed
    pre_r($_POST); //check if POST has been submitted
    if ($plan = $_POST['monthlytax'] == "yearly"){
    $salary = $_POST['base'];

    if($salary < 10000){
        $taxYear = 0;
    }
    else if($salary >= 10000 && $salary < 25000){
        $taxYear = $salary * (11/100);
        $taxMonth= $taxYear/12;
        $social = $salary * (4/100);
    }
    else if($salary >= 25000 && $salary < 50000){
        $taxYear = $salary * (30/100);
        $taxMonth= $taxYear/12;
        $social = $salary * (4/100);
    }
    else{
        $taxYear = $salary * (45/100);
        $taxMonth= $taxYear/12;
        $social = $salary * (4/100);
    }
    $yearly = $salary;
    $monthly = $yearly / 12;
    $free = $_POST['free'];
    $after = ($salary - $taxYear - $social) + $free;
    }
    else{
        $salary = $_POST['base'];
        $salary = $salary*12;

        if($salary < 10000){
            $taxYear = 0;
        }
        else if($salary >= 10000 && $salary < 25000){
            $taxYear = $salary * (11/100);
            $taxMonth= $taxYear/12;
            $social = $salary * (4/100);
        }
        else if($salary >= 25000 && $salary < 50000){
            $taxYear = $salary * (30/100);
            $taxMonth= $taxYear/12;
            $social = $salary * (4/100);
        }
        else{
            $taxYear = $salary * (45/100);
            $taxMonth= $taxYear/12;
            $social = $salary * (4/100);
        }
        $yearly = $salary;
        $monthly = $yearly / 12;
        $free = $_POST['free'];
        $after = ($salary - $taxYear - $social) + $free;
    }
}
//function to store inputs
function pre_r( $array ){
}
?>