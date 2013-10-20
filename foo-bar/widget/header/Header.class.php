<?php

PhizView::includeOnce('foo:widget/header/Header.class.php');

class Foo_Bar_Widget_Header extends Foo_Widget_Header {
    
    protected function init(){
        parent::init();
        $this->push($this->load('widget/search'));
    }
    
}