<?php
// php 5.4.4

$N_Arr = array();
$M_Arr = array();
$N = 0;
$M = 0;
$N = trim(fgets(STDIN));
$N_Arr = explode(" ",$N);
if($N_Arr[0] > 0){
    if($N_Arr[1] > 0){
        $x = 0;
        while($x < $N_Arr[1]){
            $M = trim(fgets(STDIN));
                $M_Arr[$x] = explode(" ",$M);
                $x++;
        }
        $x = 0;
        $y = 1;
        $M_Count_Arr = array();
        $M_count = count($M_Arr);
        while($x < $M_count ){
            $M_Count_Arr[$y] = array_sum($M_Arr[$x]);
            $y++;
            $x++;
        }
        rsort($M_Count_Arr);
        $x = 0;
        $ans_Arr = array();
        $M_count = count($M_Count_Arr);
        while($x < $M_count){
            if($M_Count_Arr[$x] > 0){
                $ans_Arr[$x] = $M_Count_Arr[$x];
            }else{
                $x = count($M_Count_Arr) + 10;
            }
            $x++;
        }
        echo (array_sum($ans_Arr));
    }
    else{
        echo (0);
    }
}
else{
    echo (0);
}

?>
