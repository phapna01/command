<?php
if( isset( $_POST[ 'Submit' ]  ) ) {
    $target = ($_REQUEST[ 'ip' ]);
    //blacklist
    $substitutions=array(
        '&' => '',
		';'  => '',
        '| ' => '',
		'-'  => '',
		'$'  => '',
		'('  => '',
		')'  => '',
		'`'  => '',
		'||' => '',
    );
    $target = str_replace(array_keys($substitutions), $substitutions, $target);
    if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
        $cmd = shell_exec( 'ping  ' . $target );
    }
    else {
        $cmd = shell_exec( 'ping  -c 4 ' . $target );
    }

    if(isset($cmd)){
        echo "<pre>Ping OK</pre>";
    }else {
        echo "<pre>Syntax Error</pre>";
        
    }
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> </h1>
	<div>
		<form name="ping" action="" method="post">
			<p>
				Enter an IP address:
				<input type="text" name="ip" size="30" placeholder="127.0.0.1">
				<input type="submit" name="Submit" value="Submit">
			</p>
        </form>
    </div>
</body>
</html>