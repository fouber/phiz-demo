<?php

class Common_Widget_Queue extends PhizView {
    
    protected $_wrapper_left  = '';
    protected $_wrapper_right = '';
    
    protected $_widgets = array();
    
    protected function loadTemplate(){
        return $this->_wrapper_left .
               implode($this->_wrapper_right .
               $this->_wrapper_left, $this->_widgets) .
               $this->_wrapper_right;
    }
    
    public function unshift($widget){
        array_unshift($this->_widgets, $widget);
        return $this;
    }
    
    public function push($widget){
        array_push($this->_widgets, $widget);
        return $this;
    }
    
    public function pop(){
        return array_pop($this->_widgets);
    }
    
    public function shift(){
        return array_shift($this->_widgets);
    }
    
}