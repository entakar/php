//セレクト作成
// select 作成時に selectedを指定する
// 結果はsmartyにassign
// 初期選択を$selected_item
// selectに使用する配列を$master_select
// $master_selectは多次元配列 初めは連番を振る
/////////////////////////////////////////////////////////////////////////////////
function select_bar($selected_item,$master_select){
$textmassage = "<Select name=\"master\" >";
$master_count = count($master_select);
for($x = 0;$x < $master_count ; $x++ ){
if($selected_item == $master_select[$x][0]){
$textmassage .= "<option name=\"" . $master_select[$x][0] . "\" selected=\"selected\" >";
$textmassage .= $master_select[$x][0] ."</option>";
}
else{
$textmassage .= "<option name=\"" . $master_select[$x][0] . "\"  >". $master_select[$x][0] ."</option>";
}
}
$textmassage .= "</select>";

return ($textmassage);
}