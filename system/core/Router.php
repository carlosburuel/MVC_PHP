<?php
	class Router
	{
		public $uri;
		public $controller;
		public $method;
		public $param;

		function __construct()
		{
			$this->setUri();
			$this->setController();
			$this->setMethod();
			$this->setParam();
		}

		//Obtencion de URI
		public function setUri()
		{
			$this->uri = explode('/', URI);
		}

		//Obtencion de segmento de controlador
		public function setController()
		{
			$this->controller = !empty($this->uri[2]) ?  $this->uri[2] : 'Home';
		}

		//Obtencion de segmento de metodo
		public function setMethod()
		{
			$this->method = !empty($this->uri[3]) ? $this->uri[3] : 'exec';
		}

		//Obtencion de parametros
		public function setParam()
		{
			$this->param = !empty($this->uri[4]) ? $this->uri[4] : '';
		}

		public function getUri()
		{
			return $this->uri;
		}

		public function getController()
		{
			return $this->controller;
		}

		public function getMethod()
		{
			return $this->method;
		}

		public function getParam()
		{
			return $this->param;
		}
	}