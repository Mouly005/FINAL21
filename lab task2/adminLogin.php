<?php

   include'controllers/user_controller.php';	
    
?>


<html>


    <head><title>Admin Login</title></head>
    <body>
	    
        <fieldset>
		   <h2 align="center"><?php echo $err_db;?></h2>
		   <h1 align="center">Admin Login</h1>
		    <form action="" method="post">
			    <table align="center">
					<tr>
						<td>Username: </td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>password: </td>
						<td><input type="password" name="pass" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td align="center"colspan="2"><br><br><input type="submit" name="Login" value="Login"></td>
					</tr>
					
					<tr>
					    <td align= "center" colspan="3" rowspan="3"><br><br><b>No Account Yet?</b> <a href ="Customer.php" >Register Now.</a></td>
					</tr>
				</table>
		 	</form>
		</fieldset>
    </body>
</html>