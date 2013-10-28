<?php

PhizView::includeOnce('foo:widget/footer');

class Foo_Bar_Widget_Footer extends phiz_view_foo_widget_footer_footer_php {
    
    protected function init(){
        $this->copyright('11111');
    }
    
}