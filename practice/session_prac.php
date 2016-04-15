
  <?php 
session_start(); 
if(isset($_SESSION['user'])) 
    { 
         $user = $_SESSION['user']; 
        
    } 
else 
    { 
        // Code to show Guests 
    
    } 
?> 
  
  Code for Logging a User: 
  <?php 
define("USER", "user"); 

define("PASS", "123456"); 

// Normal user section - Not logged ------ 
        if(isset($_REQUEST['username']) && isset($_REQUEST['password'])) 
            { 
                // Section for logging process ----------- 
                $user = trim($_REQUEST['username']); 
                $pass = trim($_REQUEST['password']); 
                if($user == USER && $pass == PASS) 
                    { 
                        // Successful login ------------------ 
                        
                        // Setting Session 
                        $_SESSION['user'] = USER; 
                        
                        // Redirecting to the logged page. 
                        header("Location: index.php"); 
                    } 
                else 
                    { 
                        // Wrong username or Password. Show error here. 
                        
                    } 
                
            } 
?>