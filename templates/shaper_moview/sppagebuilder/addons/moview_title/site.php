<?php
/**
* @package SP Page Builder
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2016 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonMoview_title extends SppagebuilderAddons{

		public function render() {
		$title 				= (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';

		$icon 				= (isset($this->addon->settings->icon) && $this->addon->settings->icon) ? $this->addon->settings->icon : '';

		$icon_color 		= (isset($this->addon->settings->icon_color) && $this->addon->settings->icon_color) ? $this->addon->settings->icon_color : '';

		$link_url 			= (isset($this->addon->settings->link_url) && $this->addon->settings->link_url) ? $this->addon->settings->link_url : '';

		$link_text 			= (isset($this->addon->settings->link_text) && $this->addon->settings->link_text) ? $this->addon->settings->link_text : '';

		$class 				= (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';


		$output 			= '';


		if($title) {
			$output  = '<div class="sppb-addon-moview-title clearfix">';

			if($icon) {
				$style = ($icon_color) ? ' style="color: '. $icon_color .'"' : ''; 
				$output .= '<i class="moview-before-title-icon sp-moview-icon-' . $icon . ' pull-left"' . $style . '></i>';
			}

			$output .= '<h3 class="sppb-addon-title pull-left">' . $title . '</h3>';

			if($link_url && $link_text) {
				$output .= '<a href="'. $link_url .'" class="sppb-title-link pull-right">' . $link_text . '</a>';
			}

			$output .= '</div>';

			return $output;
		}

	}

}
















// //no direct accees
// defined ('_JEXEC') or die ('restricted aceess');

// AddonParser::addAddon('sp_moview_title','sp_moview_title_addon');

// function sp_moview_title_addon($atts){

// 	extract(spAddonAtts(array(
// 		"title" 				=> '',
// 		"icon" 					=> '',
// 		"icon_color" 			=> '',
// 		"link_url"				=> '',
// 		"link_text"				=> '',
// 		"class"					=> '',
// 		), $atts));

// 	if($title) {
// 		$output  = '<div class="sppb-addon-moview-title clearfix">';

// 		if($icon) {
// 			$style = ($icon_color) ? ' style="color: '. $icon_color .'"' : ''; 
// 			$output .= '<i class="moview-before-title-icon sp-moview-icon-' . $icon . ' pull-left"' . $style . '></i>';
// 		}

// 		$output .= '<h3 class="sppb-addon-title pull-left">' . $title . '</h3>';

// 		if($link_url && $link_text) {
// 			$output .= '<a href="'. $link_url .'" class="sppb-title-link pull-right">' . $link_text . '</a>';
// 		}

// 		$output .= '</div>';

// 		return $output;
// 	}
// }




