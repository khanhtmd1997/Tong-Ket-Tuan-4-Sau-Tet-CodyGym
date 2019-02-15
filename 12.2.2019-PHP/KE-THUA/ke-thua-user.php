<?php 
	class User{
		public $userId;
		public $userName;
		public $passWord;
		public $email;
		public function User(){
			$this->userId = 0;
			$this->userName = "khanh";
			$this->passWord = 123;
			$this->email = "khanhtmd97@gmail.com";
		}
		public function getUser(){
			return $this->userId."<br>".$this->userName."<br>".$this->passWord."<br>".$this->email;
		}
		public function setUser($_userId,$_userName,$_passWord,$_email){
			$this->userId = $_userId;
			$this->userName = $_userName;
			$this->passWord = $_passWord;
			$this->email = $_email;

		}
		public function login(){
			if($this->userName == "khanh" && $this->passWord == 123){
				echo "<h1>Xin chào ".$this->userName."</h1>"."<a href='index.php'>Chuyển tới trang chủ</a>";
			}
			else echo "Tài khoản, mật khẩu sai";
		}
		public function logout(){
			echo "<a href='ke-thua-user.php'>Logout</a>";
		}
	}
	// class Admin extends User{
	// }
	$user = new User();
	echo $user->getUser();
	$user->login();
	$user->setUser(1,"abc",123,"khanhtmd99@gmail.com");
	echo "<br>";
	echo $user->getUser();
	echo "<br>";
	$user->login();
?>