<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="?do=login">
	<table style="height:inherit" border="0">
	<tr>
	<td  colspan="2" align="left">
	<label>
	<input size="14" style="height:20px" type="text" name="username" id="text1" onfocus="this.value=''" onblur="if(this.value == '')this.value ='username'" value="username"/>
	</label>
	<label> 
	<input size="14" style="height:20px" type="password" name="password" id="text2" onfocus="this.value=''" onblur="if(this.value == '')this.value ='password'" value="password" />
	</label>
	</td>
	</tr><tr><td colspan="2" align="left"><input  height="13" type="submit" name="button" id="button" value="Sign In" /> or
	<a href="session/daftar.php"><input  height="13" type="button" name="button" id="button" value="Sign up"/></a></td>
	</tr>
	</table>
	<label></label>
</form>
</body>
</html>
