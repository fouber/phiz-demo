<?php

PhizView::includeOnce('common:widget/queue/Queue.class.php');

class Foo_Widget_Header extends Common_Widget_Queue {
    
    protected $_deps = array( 'foo:widget/header/header.css' );
    
    protected $_wrapper_left  = '<div class="header-item">';
    protected $_wrapper_right = '</div>';
    
    protected function init(){
        $this->push($this->load('foo:widget/banner'))
             ->push($this->load('foo:widget/nav'));
    }
    
}