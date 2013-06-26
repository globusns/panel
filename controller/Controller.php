<?php

/**
 * Description of Controller
 *
 * @author Miechur Tomasz
 * @e-mail kontakt@tmiechur.pl
 */
class Controller {
    
    public function __construct() {
         if(isset($_GET['action'][0])){
             switch ($_GET['action']){
                 case 'logout':
                     $this->logOut();
                     break;
                 
             }
         }
    }
    
    public function isLoggedIn(){
        if(isset($_SESSION['user_id'][0])){          
           require_once 'members.php';        
        }else{
            if(isset($_POST['nick'][0]) && isset($_POST['password'][0])){
                $this->logIn($_POST['nick'], $_POST['password']);
            }elseif(isset($_POST['nick']) && isset($_POST['password']) && empty($_POST['nick']) && empty($_POST['password'])){
                $error = 'Musisz wypełnić wszystkie dane!';
                require_once 'view/User/login.php';
            }elseif(isset($_POST['nick'][0]) && empty($_POST['password'])){
                $error = 'Musisz podać hasło!';
                require_once 'view/User/login.php';
            }elseif(isset($_POST['password'][0]) && empty($_POST['nick'])){
                $error = 'Musisz podać login!';
                require_once 'view/User/login.php';
            }else{
                require_once 'view/User/login.php';
            }
        }
    }
    
    public function logIn($login, $password){
        
        $handler = new Model_User;
        $res = $handler->isLogedIn($login, $password);
        if($res){
            $_SESSION['user_id']='asd';
            $user = new Controller;
            $user->isLoggedIn();
        }else{
             $error = 'Błędne dane!';
             require_once 'view/User/login.php';
        }
        
    }
    
    public function logOut(){
        session_destroy();
        header('Location: ./');
    }
    
}