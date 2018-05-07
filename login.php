<?php
	/* Template Name: 10 - Login
	 */
	if($_GET['login']){
        if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['password']) && !empty($_GET['password'])){
        
            $email = $_GET['email'];
            $password = $_GET['password'];
            
            global $wpdb; 
            $result = $wpdb->get_results ( "SELECT * FROM users WHERE username = '$email' && password = '$password'");
            
            if($result->numRows == 0){
                //error
                header("location: http://wordpress.local/login");
            }
            else{
                $user = $result[0];
                
                $_SESSION['username'] = $user['username'];
                $_SESSION['userid'] = $user['userID'];
                
                header("location: http://wordpress.local/6-user-dashboard");   
            }
        }
        if(true){
            $_SESSION['logged_in'] = true;
        }
    }

	get_header();
    

?>

<div>
    <form method = "GET" action = "" id = "login-form">
        Email: <input type = "text" name = "email" id = "email">
        Password: <input type = "text" name = "password" id = "password">
        <input type = "submit" name = "login">
    </form>
</div>
<?php
	get_footer();
?>
