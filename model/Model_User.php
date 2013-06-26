<?php

/**
 * Description of Model
 *
 * @author Miechur Tomasz
 * @e-mail kontakt@tmiechur.pl
 */
class Model_User extends Model{
    
    public function isLogedIn($user, $password){
        
            //Zapytanie do bazy
        
            if($user=='admin' && $password=='admin'){
                return true;
            }else{
                return false;
            }
    }
    
    
    
}

?>
