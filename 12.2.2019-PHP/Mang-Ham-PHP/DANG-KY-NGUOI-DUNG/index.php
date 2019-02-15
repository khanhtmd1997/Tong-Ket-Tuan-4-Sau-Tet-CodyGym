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
             <input type="text" name="username" size="25"  placeholder="email" required />
             <input type="password" name="password" size="25" placeholder="password" required />
             <input type="submit" value="Đăng ký" />
          </div>
       </form>
    </body>
    <?php
    	if($_SERVER['REQUEST_METHOD'] == "POST"){
    		$username = $_POST['username'];
    		$password = $_POST['password'];
    		// if(empty($username) || empty($password)){
    		// 	echo "Vui lòng không được bỏ trống email hoặc mật khẩu!";
    		// 	exit();
    		// }
    		$pattern = '#^[a-z][a-z0-9\._]{2,31}@[a-z0-9\-]{3,}(\.[a-z]{2,4}){1,2}$#';
    		if(preg_match($pattern, $username,$match) != 1){
    			echo "Vui lòng nhập email hợp lệ";
    		}
    		// if($username == "admin" && $password == "123456"){
    		// 	echo "<p>Hello ". $username . " to website</p>";
    		// }else{
    		// 	echo "Login Error";
    		// }
    	}
    ?>
</html>