<?php

$voterAge = 19;
$voterPvc = True;
$voterWard = 020;

    if($voterAge > 18){
        if($voterPvc === True){
            if ($voterWard === 020){
                echo "Voter eligible to vote";
            }else{
                echo "This is not your pulling unit";
            }
        }else{
            echo "You can't vote without a PVC";
        }
    }else{
        echo "You are not Eligible to vote";
    }
?>
