<html>
<head>
<meta charset="utf-8">
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
   $dbhost = '127.0.0.1';  //mysql host ip address
   $dbuser = 'root';      //mysql user name
   $dbpass = 'spec4mysql';//mysql password
   $dbase = 'mybooks';//mysql database
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
    mysqli_close($conn);
?>
</body>
</html>