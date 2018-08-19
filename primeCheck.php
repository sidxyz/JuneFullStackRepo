<?php
function checkPrime($input)
{
    for($i=2;$i<$input;$i++)
    {
        //check for all numbers less than my current input
        if($input<=3)
        {
            return "prime";        
        }
        $output =  $input % $i;
        if($output  == 0)
        {
           // echo $i;
            return "not prime";
        }   
    }
    return "prime";
}

echo checkPrime(178);


//$test = 4%2;
//echo $test;