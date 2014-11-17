<?php	
		
$test_arr[] = array(111,20141101,abc,5700);
$test_arr[] = array(111,20141101,abc,5000);
$test_arr[] = array(111,20141102,abc,8900);
$test_arr[] = array(111,20141103,abc,5700);
$test_arr[] = array(111,20141103,abc,5700);
$test_arr[] = array(111,20141104,abc,4000);
$test_arr[] = array(111,20141105,abc,5000);
$test_arr[] = array(112,20141105,bcc,5000);
$test_arr[] = array(112,20141105,bcc,5000);
$test_arr[] = array(113,20141106,cdd,6000);
		
$test_hoge_arr = array();
$test_hoge_arr[] = array();
$test_arr_count = count($test_arr);
$arr_count = 0;
echo ($test_arr_count ."\n");
		
for($i = 0;$i < $test_arr_count; $i++){
	$code = $test_arr[$i][0];
	$No_data = $test_arr[$i][1];
	$test_hoge_count = count($test_hoge_arr);
	for($j = 0;$j < $test_hoge_count;$j++){
	if(!in_array($code,$test_hoge_arr[$j] ) ){
		$test_hoge_arr[$arr_count] = $code;
		
	if(!in_array($No_data,$test_hoge_arr[$j][0] ) ){
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
