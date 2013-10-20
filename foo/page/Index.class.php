<?php

class Foo_Page_Index extends PhizPage {
    
    protected function init(){
        $this->assign('menu', $this->getMenuData());
    }
    
    protected function getMenuData(){
        return array(
            array(
                'active' => true,
                'title' => 'Home',
                'href'  => '#'
            ),
            array(
                'title' => 'Profile',
                'href'  => '#'
            ),
            array(
                'title' => 'Messages',
                'href'  => '#'
            ),
        );
    }
    
    protected function getDescription(){
        return 'A Demo of Pure PHP Template Engine';
    }
    
    protected function getKeywords(){
        return 'php template view fis phiz';
    }
    
    protected function buildPage(){
        return $this->load('common:layout/skeleton')
                    ->title('foo-bar page')
                    ->description( $this->getDescription() )
                    ->keywords( $this->getKeywords() )
                    ->content( $this->load('block/main') )
                    ->fetch();
    }
    
}