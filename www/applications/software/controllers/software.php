<?php 
if (!defined("ACCESS")) {
	die("Error: You don't have permission to access here...");
}

class Software_Controller extends ZP_Load
{
	public function __construct()
	{
		$this->application = $this->app("software");
		$this->Templates = $this->core("Templates");
		$this->Templates->theme();
		$this->Default_Model = $this->model("Software_Model");
	}
	
	public function index()
	{ 
		$vars['view'] = $this->view("inicio", true);
		$vars['menu'] = 0;
		$this->render("content", $vars);
	}

/**** PAGINAS REFERENCIADAS DESDE NOSTROS **************/
	public function nosotros(){
		$vars['view'] = $this->view("nosotros", true);
		$vars['menu'] = 1;
		$this->render("content", $vars);
	}

/**** PAGINAS REFERENCIADAS DESDE DESARROLLO DE SOFTWARE **************/
	public function desarrollo($vista = NULL){
		if($vista == NULL || strcmp($vista,"fabrica") == 0)
			$vars['view'] = $this->view("fabrica", true);
		else if($vista == NULL || strcmp($vista,"web") == 0)
			$vars['view'] = $this->view("web", true);
		if($vista == NULL || strcmp($vista,"migracion") == 0)
			$vars['view'] = $this->view("migracion", true);
		$vars['menu'] = 2;
		$this->render("content", $vars);
	}

/**** PAGINAS REFERENCIADAS DESDE MÓVILES **************/
	public function moviles(){
		$vars['view'] = $this->view("moviles", true);
		$vars['menu'] = 3;
		$this->render("content", $vars);
	}

	/**** PAGINAS REFERENCIADAS DESDE ASISTENCIA **************/
	public function asistencia(){
		$vars['view'] = $this->view("asistencia", true);
		$vars['menu'] = 4;
		$this->render("content", $vars);
	}

/**** PAGINAS REFERENCIADAS DESDE CONTACTO **************/
	public function contacto(){
		$vars['view'] = $this->view("contacto", true);
		$vars['menu'] = 6;
		$this->render("content", $vars);
	}

/**** POLITICAS DE PRIVACIDAD **************/
	public function politicas(){
		$vars['menu'] = -1;
		$vars['view'] = $this->view("politicas", true);
		$this->render("content", $vars);
	}

/**** FUNDADORES DE LA EMPRESA **************/
	public function acerca(){
		$vars['menu'] = -1;
		$vars['view'] = $this->view("acercade", true);
		$this->render("content", $vars);
	}
}
