<?php

namespace app\controllers;

class User extends \app\core\Controller {
	
	public function login(){
		//TODO: register session variables to stay logged in
		if(isset($_POST['action'])){//verify that the user clicked the submit button
			$user = new \app\models\User();
			$user = $user->get($_POST['username']);

            // if user exists and password is correct
			if($user!=false && password_verify($_POST['password'], $user->password_hash)){
				$_SESSION['username'] = $user->username;
				$_SESSION['first_name'] = $user->first_name;
                $_SESSION['last_name'] = $user->last_name;
                $_SESSION['type'] = $user->type;
                // print_r($user);
                header("Location:/User/index");

			}else{
				$this->view('User/login','Wrong username and password combination!');
			}

		} else 
            // $user = new \app\models\User();
            // $user->insertDefaultAdmin();
			$this->view('User/login');
	}

    public function index() {
        $this->view('User/index');
    }

	public function logout(){
		//destroy session variables
		session_destroy();
		header('location:/Profile/login');
	}

    public function accountManagement() {
        $this->view('User/accountManagement');
    }

    public function changePassword() {
		$user = new \app\models\User();
		$user = $user->get($_SESSION['username']);

		if (isset($_POST['action'])) {
			if ($_POST['new_password'] == '' || $_POST['password_confirm'] == '') {
				$this->view('User/changePassword', ['error' => 'The new password must not be empty']);
				return;
			}
			if (password_verify($_POST['current_password'], $user->password_hash) && $_POST['new_password'] == $_POST['password_confirm']) { 
				$user->password = $_POST['new_password'];
				// echo $user->password_hash;
				$user->update();
				header("Location:/User/accountManagement");
			}
			else {
				$this->view('User/changePassword', ['error' => 'The password(s) do not correspond']);
			}
		}
		else {
			$this->view('User/changePassword');
		}
    }

	// #[\app\filters\Login]
	// public function settings() {
	// 	$profile = new \app\models\Profile();
	// 	$profile = $profile->get($_SESSION['user_id']);
	// 	$user = new \app\models\User();
	// 	$user = $user->get($_SESSION['username']);
	// 	$this->view("/Profile/settings", ['profile'=>$profile, 'two_factor_authentication'=>$user->two_factor_authentication]);
	// }

	// #[\app\filters\Login]
	// public function search($string){
	// 	$profile = new \app\models\Profile();
	// 	$profile = $profile->search($string);
	// 	$this->view("/Profile/searchResults",$profile);
	// }

    // #[\app\filters\Login]
    // public function changePassword()
    // {
    //     $profile = new \app\models\Profile();
    //     $profile = $profile->get($_SESSION['user_id']);
    //     $user = new \app\models\User();
    //     $user = $user->get($_SESSION['username']);


    //     if (isset($_POST['action'])) {
    //         if ($_POST['new_password'] == '' || $_POST['password_confirm'] == '') {
    //             $this->view('User/changePassword', ['profile' => $profile, 'error' => 'The new password must not be empty']);
    //             return;
    //         }
    //         if (password_verify($_POST['current_password'], $user->password_hash) && $_POST['new_password'] == $_POST['password_confirm']) {
    //             $user->password = $_POST['new_password'];
    //             // echo $user->password_hash;
    //             $user->update();
    //             header("Location:/Profile/index");
    //         } else {
    //             $this->view('User/changePassword', ['profile' => $profile, 'error' => 'The password(s) do not correspond']);
    //         }
    //     } else {
    //         $this->view('User/changePassword', ['profile' => $profile]);
    //     }
    // }
}
