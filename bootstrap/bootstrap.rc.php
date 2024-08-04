<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * @package bootstrap
 * @version 1.03
 * @author Dmitri Beliavski
 * @copyright Copyright (c) sed.by 2017-2024
 */

defined('COT_CODE') or die('Wrong URL');

if ($env['ext'] == 'admin' && !empty(Cot::$cfg['plugin']['bootstrap']['back'])) {
  Resources::linkFileFooter(Cot::$cfg['plugins_dir'].'/bootstrap/' . Cot::$cfg['plugin']['bootstrap']['back'].'/css/bootstrap.min.css', 'css', 49);
  Resources::linkFileFooter(Cot::$cfg['plugins_dir'].'/bootstrap/' . Cot::$cfg['plugin']['bootstrap']['back'].'/js/bootstrap.bundle.min.js', 'js', 98);
}
elseif (!empty(Cot::$cfg['plugin']['bootstrap']['front'])) {
  Resources::linkFileFooter(Cot::$cfg['plugins_dir'].'/bootstrap/' . Cot::$cfg['plugin']['bootstrap']['front'].'/css/bootstrap.min.css', 'css', 49);
  Resources::linkFileFooter($cfg['plugins_dir'].'/bootstrap/' . Cot::$cfg['plugin']['bootstrap']['front'].'/js/bootstrap.bundle.min.js', 'js', 90);
}
