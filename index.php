<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 23/01/2018
 * Time: 17:38
 */
require_once 'conf.php';
$mainTmpl = new template('main');
$mainTmpl->set('lang', 'et');
$mainTmpl->set('page_title', 'Lehe pealkiri');
$mainTmpl->set('user', 'Kasutaja');
$mainTmpl->set('title', 'Pealkiri');
$mainTmpl->set('lang_bar', 'Keeleriba');
require_once 'menu.php';
$mainTmpl->set('content', 'Lehe sisu');
echo $mainTmpl->parse();
$link =  '';
$http->addToLink($link, 'control', 'login');
$http->addToLink($link, 'username', 'test');