<?php  require_once "./mvc/core/libs.php"; require_once "./mvc/core/route.php";
	class core{
		public function view($view, $data=[]){
			require_once "./mvc/views/".$view.".php";
		}

		public function model($model){
			require_once "./mvc/models/".$model.".php";
			return new $model;
		}

		public function loginSession($session){
			$_SESSION['truyenhay_id'] = $session['id'];
			$_SESSION['truyenhay_user'] = $session['tendangnhap'];
			$_SESSION['truyenhay_quyen'] = $session['quyen'];
		}

		public function logOut(){
			unset($_SESSION['truyenhay_id']);
			unset($_SESSION['truyenhay_user']);
			unset($_SESSION['truyenhay_quyen']);
		}
	}
?>