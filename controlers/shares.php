<?php
class Shares extends Controller{
	protected function Index(){
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->Index(),true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		}

		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->add(),true);
	}
	protected function delete(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		}

		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->delete(),true);
	}

	protected function show(){
		$viewmodel = new ShareModel();
		$this->ReturnView($viewmodel->show(),true);
	}
}