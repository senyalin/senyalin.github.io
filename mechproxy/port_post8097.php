<?php
//header("Access-Control-Allow-Origin: strategy.zzzantonia.me");
header("Access-Control-Allow-Origin: *");
$request = $_SERVER[REQUEST_URI];

$script_name = 'port_post8097.php';
$begin_pos = strrpos($request,$script_name)+strlen($script_name);
$params = substr($request,$begin_pos);

/*
echo 'GET'.$params;
foreach($_POST as $param_name => $param_val){
	echo $param_name;
}
return;
// */


$write_str = json_encode($_POST);
//echo 'POST'.$write_str;
$t = time();
$file = '/home/grads/x/xingwang/web_home/ecen689607/tmp/'.$t;
file_put_contents($file,$write_str);

exec('python post_by_url8097.py "'.$params.'" "'.$file.'"',$output);
print_r($output[0]);

?>

