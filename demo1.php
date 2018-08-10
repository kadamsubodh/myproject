
<html>
<head>
<title>first demo</title>
</head>
<body>
<form name='frm' action='' method='POST'>
<table align='center' border='1'>
<tr><td>Name</td>
<td><input type="text" name="n" placeholder="enter your name"/>
</td></tr>
<tr>
<td>Username</td><td><input type="text" placeholder="username" name="u"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="p" placeholder="password"/></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="submit" name="s"/>
</td></tr>
</table>
</form>
</body>
</html>
<?php
	if(isset($_POST["s"]))
{
		$u=$_POST["u"];	
		$p=$_POST["p"];
		$n=$_POST["n"];
		if($u=="admin" && $p=="admin")
		{
		echo "welcome $n" ;
		}
		else
		{
			echo "some problem is there";
		}
}
?>
