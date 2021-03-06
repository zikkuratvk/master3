<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper;

?>
			<dd class="modified">
				<span data-uk-icon="icon:calendar"></span>
				<time datetime="<?php echo HTMLHelper::_( 'date', $displayData[ 'item' ]->modified, 'c' ); ?>" itemprop="dateModified">
					<?php echo Text::sprintf( 'COM_CONTENT_LAST_UPDATED', HTMLHelper::_( 'date', $displayData[ 'item' ]->modified, Text::_( 'd.m.Y' ) ) ); ?>
				</time>
			</dd>