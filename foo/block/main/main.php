<?php

    //inputs
    $header = $this->input('header', $this->load('widget/header/Header.class.php'));
    $left   = $this->input('left', $this->load('widget/table'));
    $right  = $this->input('right', $this->load('block/right'));
    $footer = $this->input('footer', $this->load('widget/footer'));

?>
<div class="row-fluid wrapper">
    <div class="span12 header"><?php echo $header; ?></div>
    <div class="row-fluid main">
        <div class="span9 main-left"><?php echo $left; ?></div>
        <div class="span3 main-right"><?php echo $right; ?></div>
    </div>
    <div class="span12 footer"><?php echo $footer; ?></div>
</div>