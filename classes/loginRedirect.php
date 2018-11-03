<?php  
namespace App\LoginRedirect;

/**
 * summary
 */
class LoginRedirect
{
    /**
     * summary
     */
    public $redirect = 'login.php';
    public $login = 'index.php';

    // public function __construct()
    // {
    //     if (isset($_SESSION['login'])) {
    //     	return header('location: '.$this->login);
    //     } else {
    //     	return header('location: '.$this->redirect);
    //     }
    // }

    public loggedIn()
    {
    	return header('location: '.$this->login);
    }
}

?>