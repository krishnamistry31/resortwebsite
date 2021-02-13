<?php
    ini_set("display_errors","OFF");
    if($_REQUEST['view']!="")
    {
        $name = $_REQUEST['name'];
    	$pass = $_REQUEST['pass'];

        if($name == "user" && $pass == "user123")
        {
            header("location:index.html");
        }
        else
            $error = "Invalid login details";
    }

?>
<p align="center"> <?= $error ?> </p>
<form action="login.php?view=login.php" method="post">
	<table align="center" width="50%">
		<th colspan=2>Login</th>
		<tr>
			<td> Username:</td>
			<td>
				<input type="text" name="name" value="<?=$_REQUEST['name'];?>">
			</td>
		</tr>
		<tr>
			<td> Password:</td>
			<td>
				<input type="password" name="pass" value="<?=$_REQUEST['pass'];?>">
			</td>
		</tr>
		<tr>
			<td colspan=2>
				<input type="submit" name="login" value="LOGIN">
			</td>
		</tr>
	</table>
</form>