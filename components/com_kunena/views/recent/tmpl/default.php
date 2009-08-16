<?php
/**
 * @version		$Id$
 * @package		Kunena
 * @subpackage	com_kunena
 * @copyright	Copyright (C) 2008 - 2009 Kunena Team. All rights reserved.
 * @license		GNU General Public License <http://www.gnu.org/copyleft/gpl.html>
 * @link		http://www.kunena.com
 */

defined('_JEXEC') or die;
JHtml::stylesheet('default.css', 'components/com_kunena/media/css/');
?>
<?php echo $this->loadCommonTemplate('header'); ?>

<?php echo $this->loadTemplate('top'); ?>
		
		<div class="corner1">
			<div class="corner2">
				<div class="corner3">
					<div class="corner4">
						<form action="index.php" method="post" name="">
							<table class="forum_body">
								<thead>
									<tr>
										<td class="head-col1"><?php echo JText::_('K_REPLIES'); ?></td>
										<td class="head-col2">&nbsp;</td>
										<td class="head-col3"><?php echo JText::_('K_TOPICS'); ?></td>
										<td class="head-col4"><?php echo JText::_('K_LAST_POST'); ?></td>
									</tr>
								</thead>
								<tbody>

<?php echo $this->loadTemplate('thread'); ?>

								</tbody>
							</table>
															<input type="hidden" name="Itemid" value="125"/>
															<input type="hidden" name="option" value="com_kunena"/>
															<input type="hidden" name="func" value="bulkactions" />
															<input type="hidden" name="return" value="/forum" />
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>

<?php echo $this->loadTemplate('bottom'); ?>

<?php echo $this->loadCommonTemplate('footer'); ?>