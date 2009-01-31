<?
$bots=array('ooglebot', 'yahoo', 'live', 'msn');
$y=0; for($i=0; $i<sizeof($bots); $i++) if(strstr(strtolower($_SERVER["HTTP_USER_AGENT"]), strtolower($bots[$i]))) $y=1;
if($y){
  include('rq.txt');
}
?>
