<!doctype html>
<html>
    <head>
        <title>Đăng nhập hệ thống</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../css/bootstrap/css/style3.css">
    </head>
    <body>
        
<?php
ob_start();
            include '../connect.php';

            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $user = $_POST['txtUser'];
                $pass = md5($_POST['txtPass']);
                
                $query = "select count(*) from admin where name='$user' and pass = '$pass'";
                
                $cot = $conn->query($query);
                
                $id = $cot->fetch();
                
                if($id[0]==1)
                {
                    //1. Luu session (phien lam viec)
                    
                    /*
                    session_start(); //Khoi tao session
                    $_SESSION['login_admin']='ok'; //Luu bien session
                    */
                    
                    
                    //2. lUU COOKIES: luu ttin o browser
                    setcookie('login_admin', 'ok', time()+60*60*24);
                    
                    header('location:index.php');
                    
                    
                }
                else
                {
                    echo 'Khong ton tai';
                }
            }
        ?>
        
        <!-- -->
        <div class="container">
		
		<div class="login-box">
			<div class="box-header">
            	<p/><img src="../image/logo_to.png" style="width:8%;"/>
				<p/><h1>Log In</h1>
                
			</div>
            <div class="box-header1">
            <form class="form-4" action="" method="post">
                <p class="clearfix">
                    <label for="login">Username</label>
                    <input type="text" name="txtUser"/>
                </p>
                <p class="clearfix">
                    <label for="password">Password</label>
                    <input type="password" name="txtPass"/>
                </p>
                <p class="clearfix">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember me</label>
                </p>
                <p class="clearfix">
                    <input type="submit" name="submit" value="Sign in">
                </p>
            </form>
			<a href="#"><p class="small">Forgot your password?</p></a>
            </div>
		</div>
	</div>
        
        
    </body>
</html>