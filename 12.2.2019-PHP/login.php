<!DOCTYPE HTML>
<html>
    <style type="text/css">
    .login {
          height:180px; width:230px;
          margin:0;
          padding:10px;
          border:1px #CCC solid;
    }
    .login input {
          padding:5px; margin:5px
    }
    </style>  
    <body>
        <form method = "post">
          <div class="login">
             <h2 style="text-align: center;">Login</h2>
             <input type="text" name="username" size="25"  placeholder="username" />
             <input type="password" name="password" size="25" placeholder="password" />
             <input type="submit" value="Sign in" />
          </div>
       </form>
    </body>
    <?php
    	if($_SERVER['REQUEST_METHOD'] == "POST"){
    		$username = $_POST['username'];
    		$password = $_POST['password'];
    		if($username == "admin" && $password == "123456"){
    			echo "<p>Hello ". $username . " to website</p>";
    		}else{
    			echo "Login Error";
    		}
    	}
    ?>
</html>