<?php

error_reporting(E_ALL);

require_once 'phiz/View.class.php';

$dir = dirname(__FILE__);
PhizView::setTemplateDir($dir . '/template');
PhizView::setMapDir($dir . '/map');
//PhizView::page('foo:page/Index.class.php')->display();
PhizView::page('foo-bar:page/Index.class.php')->display();