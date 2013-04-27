<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', '');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('http://necolas.github.io/normalize.css/2.1.1/normalize.css');

		echo $this->Html->css('default');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<header id="header">
			<div class="background"></div>
			<div class="top">
				<div>
					<?php 
					echo $this->Html->image(
						'logo.png', 
						array(
							'alt'=>'Logo Radio Nicaragua',
							'url'=> array(
								'controller' => 'Home',
								'action' => 'index'
							)
						)
					);
					?>
					<ul>
						<li>
						<?php echo $this->Html->link(
							'Inicio',
							array(
								'controller'=>'Home',
								'action'=>'index'
							)
						); ?>
						</li>
						<li>
							<?php echo $this->Html->link(
							'Deportes',
							array(
								'controller'=>'Home',
								'action'=>'index'
							)
						); ?>
						</li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</header>

		<aside class="recientes">
			<div>
				<span>Noticias Breves:</span>
				<span class="breve">Una noticias</span>
			</div>
		</aside>

		<div id="content">
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
