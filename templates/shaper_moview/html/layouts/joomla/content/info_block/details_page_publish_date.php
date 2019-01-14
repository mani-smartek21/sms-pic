<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;
?>

<time class="entry-date-wrapper" datetime="<?php echo JHtml::_('date', $displayData->publish_up, 'c'); ?>" itemprop="datePublished" data-toggle="tooltip" title="<?php echo JText::_('COM_CONTENT_PUBLISHED_DATE'); ?>">

	<div class="entry-date-day">
		<?php echo JHtml::_('date', $displayData->publish_up, JText::_('d')); ?>
	</div>
	<div class="entry-date-month-year">
		<?php echo JHtml::_('date', $displayData->publish_up, JText::_('M y')); ?>
	</div>
</time>
