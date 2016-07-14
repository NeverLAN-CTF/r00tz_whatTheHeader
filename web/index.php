<!DOCTYPE html>
<html>
<head>
    <title>What The Header?</title>
</head>
<body>
    <?php
	$user = false;
	$pass = false;
	$headers =  getallheaders();
	foreach($headers as $key=>$val){
	    if($key == 'X-Username'){
		$user = true;
		$userval = $val;
	    }
	    if($key == 'X-Password'){
		$pass = true;
		$passval = $val;
	    }
	}  
	 

	if($pass && $user && strtoLower($userval) == "admin" && strtoLower($passval) == "password"){
	    echo("<h4> Welcome Admin</h4>");
	    echo("<p>KEY: Headers_galor</p>");
	    echo("<p>WORD: Village</p>");
	}else{
	    echo("<h4>Sorry, only Admins can see the key</h4>");
	    echo("<p>KEY: *************</p>");
	    if(!$user){
		echo("<p><b>Error:</b> No Header `HTTP_X-Username` found</p>");
	    }
	    if(!$pass){
		echo("<p><b>Error:</b> No Header `HTTP_X_Password` found</p>");
	    }
	}
	echo('<br><br><h3>Request variables:<br></h3>');
	print_r($_SERVER);
	
    ?>
    <a href="?password=Password"style="bottom:0; right:0; position:fixed; font-size:3px;">Forgot Your Password?</a>
</body>
</html>
