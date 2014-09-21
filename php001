<?php
// バインダーの管理
// $nm[0] = バインダー1ページの枚数
// $nm[1] = カード番号
// $nm[1]の裏の位置の番号を算出する。

$nm = explode(" ",trim(fgets(STDIN)));
$ans = 0;
$nm_add = ceil($nm[1]  / $nm[0] );
if( ($nm_add % 2) == 0){
    //偶数ページ
    $ans_rem =  (($nm_add - 1) * $nm[0]) ;
    if( ($ans_rem )  > $nm[1]){
        $ans_a = ( ($nm[1] - $ans_rem) ) ;
        $ans_b = ( $nm[0] * $nm_add) -$nm[1] ;
        $ans = $nm[1] - ($ans_a + $ans_b);
    }else{
        $ans = $nm[1] - ( ($nm[1] - $ans_rem) * 2) + 1;
    }
}else{
    //奇数ページ
    $ans_rem =  (($nm_add ) * $nm[0]) ;
    $ans_a = ( $ans_rem - $nm[1] );
    $ans = $nm[1] + $ans_a  + ( $ans_a + 1 );
}
echo ($ans ."\n");
    
?>
