--TEST--
Check for jsonrpc presence
--SKIPIF--
<?php if (!extension_loaded("jsonrpc")) print "skip"; ?>
--FILE--
<?php 
	$client = new Jsonrpc_Client(1);

	$client->connect('https://github.com/rryqszq4/404');
    $client->addition(3,5);
    $client->addition1(3,5);
    $result = $client->execute();
    echo "response_total:".$client->response_total."\n";
    echo "error_code:".$result[0]["error"]["code"]."\n";
    echo "error_code:".$result[1]["error"]["code"]."\n";

    $client->connect('https://github.com/rryqszq4/404');
    $client->addition(3,5);
    $client->addition1(3,5);
    $result = $client->execute();
    echo "response_total:".$client->response_total."\n";
    echo "error_code:".$result[2]["error"]["code"]."\n";
    echo "error_code:".$result[3]["error"]["code"]."\n";
?>
--EXPECT--
response_total:2
error_code:-32404
error_code:-32404
response_total:4
error_code:-32404
error_code:-32404
