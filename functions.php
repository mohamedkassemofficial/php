function dtzn($Tzon="Europe/London"){if(isset($GLOBALS['Tzon'])){date_default_timezone_set($GLOBALS['Tzon']);}else{date_default_timezone_set($Tzon);}}
function dtmk($Year=1970,$Month=1,$Day=1,$Hour=0,$Minute=0,$Second=0){return mktime($Hour,$Minute,$Second,$Month,$Day,$Year);}

function qc($Server,$User,$Password,$Database){return mysqli_connect($Server,$User,$Password,$Database);}
function qd($Connection,$TableName){$Sql = "drop table ".$TableName;if(mysqli_query($Connection,$Sql)){eh("OK...'".$TableName."' table has been deleted.",1);}else{eh("Failed to delete the '".$TableName."' table.",1);}}
function qe($Connection,$TableName,$Column,$Check,$Filter){if($Filter != ""){$Filter = " and(".$Filter.")";}$Sql = "select * from ".$TableName." where ".$Column."="."'".$Check."'".$Filter;$Result = mysqli_query($Connection,$Sql);$Exist = 0;while($Row = mysqli_fetch_array($Result)){if($Row[$Column] != null) {$Exist = $Exist +1;}}if($Exist > 0){return true;}else{return false;}}
function qf($Row,$Column){return $Row[$Column];}












function br($Number=1){for($i=0;$i<$Number;$i++){echo "<br>";}}
function ec($String=''){echo $String;}
function ecuf($String){echo ucfirst($String);}
function er($String=''){echo $String."<br>";}
function bs($Number=1){if($Number > 0){$output="";for($i=1;$i<=$Number;$i++){$output=$output+" ";}return $output;}}
function eh($String='',$Level=1){echo "<h".$Level.">".$String."</h".$Level.">";}
function es($String=''){echo "<strong>".$String."</strong>";}
function hr($Number=1){for($i=0;$i<$Number;$i++){echo "<hr>";}}
