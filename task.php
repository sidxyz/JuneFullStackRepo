<?php

//format will be character followed by number
$input = "a12b3c5d11";
$allCharacters = str_split($input);
$characterProperty;
for($i=0;$i<count($allCharacters);$i++)
{
    if(is_numeric($allCharacters[$i])!=true)
    {
        if(is_numeric($allCharacters[$i+2]))
        {
            $firstDigit = $allCharacters[$i+1];
            $secondDigit = $allCharacters[$i+2];
            $count = $firstDigit.$secondDigit;
            $count =(int) $count;
            $characterProperty[$allCharacters[$i]]=$count;
            $i =$i+2;
        }
        else
        {
            $count = $allCharacters[$i+1];
            $count =(int) $count;
            $characterProperty[$allCharacters[$i]]=$count;
            $i =$i+1;
        }
    }
}
//var_dump($characterProperty);
foreach ($characterProperty as $key => $value) 
{
    for($j=0;$j<$value;$j++)
    echo $key;
}

//expected output will be aabbbccccc
//$output = substr($input,0,1);
//$output = (int) $output;


//echo $output;