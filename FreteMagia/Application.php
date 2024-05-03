<?php
	
	namespace FreteMagia;
	class Application
	{
		private $controller;
		private function setApp(){

		$loadName = 'FreteMagia\Controllers\\';
		$url = !empty($_GET['url']) ?? '';
		$url = explode('/', @$_GET['url']);

		if(empty($url[0])){
			$loadName.='Home';

		}else{
			$loadName.=ucfirst(strtolower($url[0]));
		}

		$loadName.='Controller';
		//invertendo a barra para funcionar em servidores linux
		$load = str_replace('\\','/',$loadName);

		if(file_exists($load.'.php')){
			$this->controller = new $loadName();
		}else{
			include('Views/pages/404.php');
		die();
		}
		}
		
		public function run(){
			$this->setApp();
			$this->controller->index();
		}

	}

?>