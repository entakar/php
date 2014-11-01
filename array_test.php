<?php	
		
$test_arr[] = array(1101,20141101,nco,5700);
$test_arr[] = array(1101,20141101,nco,5000);
$test_arr[] = array(1101,20141102,nco,8900);
$test_arr[] = array(1101,20141103,nco,5700);
$test_arr[] = array(1101,20141103,nco,5700);
$test_arr[] = array(1101,20141104,nco,4000);
$test_arr[] = array(1101,20141105,nco,5000);
$test_arr[] = array(1101,20141105,nco,5000);
$test_arr[] = array(1101,20141105,nco,5000);
$test_arr[] = array(2101,20141106,nlc,6000);
		
$test_hoge_arr = array();
$test_hoge_arr[] = array();
$test_arr_count = count($test_arr);
$arr_count = 0;
echo ($test_arr_count ."\n");
		
for($i = 0;$i < $test_arr_count; $i++){
	$code = $test_arr[$i][0];
	$No_data = $test_arr[$i][1];
	$test_hoge_count = count($test_hoge_arr);
		//echo ($test_hoge_count ."\n");
		for($j = 0;$j < $test_hoge_count;$j++){
		if(!in_array($code,$test_hoge_arr[$j] ) ){
			echo ("t.\n");
			$test_hoge_arr[$arr_count] = $code;
				
		if(!in_array($No_data,$test_hoge_arr[$j][0] ) ){
		//echo ($code ."\n");
		$test_hoge_arr[$arr_count][0] = $No_data;
		echo $test_hoge_arr[$arr_count][0] ."=". $test_hoge_arr[$arr_count][1] ."\n";
						$arr_count++;
					}
					
				}
				//else if(!in_array($No_data,$test_hoge_arr[$j][1] ) ){{
						
						
				//}
			}
			
}
		var_dump($test_hoge_arr);
		
?>
