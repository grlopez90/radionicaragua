<?php 
/**
 * 
 */
class News extends AppModel {
 	
	public $_name = 'news';
	public $belongsTo = array(
			'categorias' => array(
				'className' => 'Categorias',
				'foreignKey' => 'categoria_id',
				'order' => 'news.fecha_publicacion DESC'
		)
 		
 	);

 } ?>