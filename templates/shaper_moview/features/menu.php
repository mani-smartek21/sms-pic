<?php
/**
 * @package Helix3 Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/
//no direct accees
defined ('_JEXEC') or die('resticted aceess');

class Helix3FeatureMenu {

	private $helix3;

	public function __construct($helix3){
		$this->helix3 = $helix3;
		$this->position = 'menu';
	}

	public function renderFeature() {

		$menu_type = $this->helix3->getParam('menu_type');
		$animation = $this->helix3->getParam('menu_animation');

		ob_start();

		if($menu_type == 'mega_offcanvas') { ?>
			<div class='sp-megamenu-wrapper<?php echo $animation; ?>'>
				<a id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a>
				<?php $this->helix3->loadMegaMenu('hidden-xs'); ?>
			</div>
		<?php } else if ($menu_type == 'mega') { ?>
			<div class='sp-megamenu-wrapper'>
				<i class="fa fa-bars hidden-xs"></i>
				<?php $this->helix3->loadMegaMenu('hidden-xs'); ?>
				<a id="offcanvas-toggler" class="visible-xs" href="#"><i class="fa fa-bars"></i></a>
			</div>
		<?php } else { ?>
			<a id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a>
		<?php }

		return ob_get_clean();
	}    
}