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

Resources::linkFileFooter($cfg['plugins_dir'].'/bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css', 'css');
Resources::linkFileFooter($cfg['plugins_dir'].'/bootstrap/bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js', 'js');
