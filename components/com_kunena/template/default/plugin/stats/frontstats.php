<?php
/**
* @version $Id$
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2009 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.com
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Based on Joomlaboard Component
* @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
**/

// Dont allow direct linking
defined( '_JEXEC' ) or die('Restricted access');

$kunena_config =& CKunenaConfig::getInstance();
$forumurl = JRoute::_(KUNENA_LIVEURLREL);
$statslink = JRoute::_(KUNENA_LIVEURLREL.'&amp;func=stats');

if ($kunena_config->fb_profile == "jomsocial")
{
	$userlist = JRoute::_('index.php?option=com_community&amp;view=search&amp;task=browse');
}
else if ($kunena_config->fb_profile == 'cb')
{
    $userlist = CKunenaCBProfile::getUserListURL();
}
else
{
    $userlist = JRoute::_(KUNENA_LIVEURLREL . '&amp;func=userlist');
}

if ($kunena_config->showstats > 0)
{
    if ($kunena_config->showgenstats > 0)
    {
?>
        <!-- BEGIN: GENERAL STATS -->
<div class="<?php echo KUNENA_BOARD_CLASS; ?>_bt_cvr1">
<div class="<?php echo KUNENA_BOARD_CLASS; ?>_bt_cvr2">
<div class="<?php echo KUNENA_BOARD_CLASS; ?>_bt_cvr3">
<div class="<?php echo KUNENA_BOARD_CLASS; ?>_bt_cvr4">
<div class="<?php echo KUNENA_BOARD_CLASS; ?>_bt_cvr5">
        <table  class = "fb_blocktable" id ="fb_frontstats" border = "0" cellspacing = "0" cellpadding = "0" width="100%">
            <thead>
                <tr>
                    <th align="left">
                        <div class = "fb_title_cover fbm">
                            <a class="fb_title fbl" href = "<?php echo $statslink;?>"><?php echo stripslashes($kunena_config->board_title); ?> <?php echo _STAT_FORUMSTATS; ?></a>
                        </div>
                        <img id = "BoxSwitch_frontstats__frontstats_tbody" class = "hideshow" src = "<?php echo KUNENA_URLIMAGESPATH . 'shrink.gif' ; ?>" alt = ""/>
                    </th>
                </tr>
            </thead>

            <tbody id = "frontstats_tbody">
                <tr class = "<?php echo KUNENA_BOARD_CLASS ;?>sectiontableentry1">
                    <td class = "td-1  fbm" align="left">
<?php echo _STAT_TOTAL_USERS; ?>:<b> <a href = "<?php echo $userlist;?>"><?php echo $this->totalmembers; ?></a> </b>
                    &nbsp; <?php echo _STAT_LATEST_MEMBERS; ?>:<b> <?php echo CKunenaLink::GetProfileLink($kunena_config, $this->lastestmemberid, $this->lastestmember, $rel='nofollow'); ?></b>

                <br/> <?php echo _STAT_TOTAL_MESSAGES; ?>: <b> <?php echo $this->totalmsgs; ?></b> &nbsp;
    <?php echo _STAT_TOTAL_SUBJECTS; ?>: <b> <?php echo $this->totaltitles; ?></b> &nbsp; <?php echo _STAT_TOTAL_SECTIONS; ?>: <b> <?php echo $this->totalcats; ?></b> &nbsp; <?php echo _STAT_TOTAL_CATEGORIES; ?>: <b> <?php echo $this->totalsections; ?></b>

                <br/> <?php echo _STAT_TODAY_OPEN_THREAD; ?>: <b> <?php echo $this->todayopen; ?></b> &nbsp; <?php echo
    _STAT_YESTERDAY_OPEN_THREAD; ?>: <b> <?php echo $this->yesterdayopen; ?></b> &nbsp; <?php echo _STAT_TODAY_TOTAL_ANSWER; ?>: <b> <?php echo $this->todayanswer; ?></b> &nbsp; <?php echo _STAT_YESTERDAY_TOTAL_ANSWER; ?>: <b> <?php echo $this->yesterdayanswer; ?></b>

                <br/>

                &raquo; <a href = "<?php echo JRoute::_(KUNENA_LIVEURLREL .'&amp;func=latest');?>"><?php echo _STAT_VIEW_RECENT_POSTS_ON_FORUM; ?></a> <?php if ($kunena_config->showpopuserstats || $kunena_config->showpopsubjectstats) echo '&raquo; <a href = "'.$statslink.'">'. _STAT_MORE_ABOUT_STATS.'</a>'; ?>  &raquo; <a href="<?php echo $userlist;?>"><?php echo _STAT_USERLIST; ?></a>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
</div>
</div>
</div>
</div>
<!-- FINISH: GENERAL STATS -->

<?php
    }
?>

<?php
}
?>