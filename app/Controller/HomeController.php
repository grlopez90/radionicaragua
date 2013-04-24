<?php  

App::uses('AppController', 'Controller');

/**
* 
*/
class HomeController extends AppController {
	
	public $uses = array('News');

	public function index()	{

		$news = $this->News->find(
			'all'
		);

		$this->set(
			array(
				'title_for_layout' => 'Radio Nicaragua'
			)
		);

	}

}
?>