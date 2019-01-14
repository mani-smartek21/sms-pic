<?php
/**
* @package SP Page Builder
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2016 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

SpAddonsConfig::addonConfig(
	array( 
		'type'=>'content',
		'addon_name'=>'sp_moview_title',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_TITLE'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_TITLE_DESC'),
		'category'=>'moview',
		'attr'=>array(

			'general' => array(

				'admin_label'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
					'std'=> ''
					),

				'title'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
					'std'=>  ''
					),

				'icon'=>array(
					'type'=>'select', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_ICON'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_ICON_DESC'),
					'values'=>array(
						'',
						'angle-left'=>'angle-left',
						'angle-right'=>'angle-right',
						'up'=>'up',
						'down'=>'down',
						'angle-double-left'=>'angle-double-left',
						'angle-double-right'=>'angle-double-right',
						'chair'=>'chair',
						'clock'=>'clock',
						'enter'=>'enter',
						'globe'=>'globe',
						'film'=>'film',
						'glass'=>'glass',
						'history'=>'history',
						'bulb'=>'bulb',
						'like'=>'like',
						'megaphone'=>'megaphone',
						'videocam'=>'videocam',
						'cup'=>'cup',
						'mail'=>'mail',
						'play'=>'play',
						'star-line'=>'star-line',
						'search'=>'search',
						'popcorn'=>'popcorn',
						'book'=>'book',
						'ticket'=>'ticket',
						'top-list'=>'top-list',
						'user'=>'user',
						'pencil'=>'pencil',
						'user-review'=>'user-review',
						'camera'=>'camera',
						'web'=>'web',
						'facebook'=>'facebook',
						'twitter'=>'twitter',
						'instagram'=>'instagram',
						'google-plus'=>'google-plus',
						'vimeo'=>'vimeo',
						'youtube'=>'youtube',
						'pinterest'=>'pinterest',
						'link'=>'link'
						),
					'std'=>'',
					),

				'icon_color'=>array(
					'type'=>'color', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_ICON_COLOR'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_ICON_COLOR_DESC'),
					'std'=> ''
					),

				'link_url'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_TITLE_LINK'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_TITLE_LINK_DESC'),
					'std'=> ''
					),

				'link_text'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_TITLE_LINK_TEXT'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_MOVIEW_TITLE_LINK_TEXT_DESC'),
					'std'=> ''
					),

				'class'=>array(
					'type'=>'text', 
					'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
					'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
					'std'=> ''
					),
				),
			)
		)
	);



