<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=rc
[END_COT_EXT]
==================== */

/**
 * Bootstrap Plugin
 * @package bootstrap
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
