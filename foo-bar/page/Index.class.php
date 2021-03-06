<?php

PhizView::includeOnce('foo:page/Index.class.php');

class Foo_Bar_Page_Index extends Foo_Page_Index {
  
    
    protected function getLibWidget($id){
        
    }
    
    protected function loadTemplate(){
        return $this->load('common:layout/skeleton')
                    ->title('foo-bar page')
                    ->description( $this->getDescription() )
                    ->keywords( $this->getKeywords() )
                    ->content(
                        $this->load('foo:block/main')
                             ->header(
                                 $this->load('widget/header/Header.class.php')
                               )
                             ->left(
                                 $this->load('widget/left')
                               )
                             ->footer(
                                 $this->load($this->input('footer', 'widget/footer/Footer.class.php'))
                               )
                      )
                    ->fetch();
    }
    
}