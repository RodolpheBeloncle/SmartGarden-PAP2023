<?php
define('HOST','host');
define('USER','yourUser');
define('PASS','pass');
define('BD','yourDataBase');

$ligaBD = mysqli_connect(HOST, USER, PASS, BD);

if (mysqli_connect_errno()) {
	echo "Erro de ligação à base de dados" . mysqli_connect_error();
	//exit();
}
else
{
	//echo "OK!";
}
