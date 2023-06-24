<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * @package bootstrap
 * @version 1.01
 * @author Dmitri Beliavski
 * @copyright Copyright (c) seditio.by 2017-2023
 */

defined('COT_CODE') or die('Wrong URL');

if ($env['ext'] == 'admin') {
  Resources::linkFileFooter($cfg['plugins_dir'].'/bootstrap/'.$cfg['plugin']['bootstrap']['back'].'/css/bootstrap.min.css', 'css');
  Resources::linkFileFooter($cfg['plugins_dir'].'/bootstrap/'.$cfg['plugin']['bootstrap']['back'].'/js/bootstrap.bundle.min.js', 'js');
}
else {
  Resources::linkFileFooter($cfg['plugins_dir'].'/bootstrap/'.$cfg['plugin']['bootstrap']['front'].'/css/bootstrap.min.css', 'css');
  Resources::linkFileFooter($cfg['plugins_dir'].'/bootstrap/'.$cfg['plugin']['bootstrap']['front'].'/js/bootstrap.bundle.min.js', 'js');
}
