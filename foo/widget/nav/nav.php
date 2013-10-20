<?php

    $data  = $this->input('menu', $this->getPageData('menu', array()));

?>

<ul class="nav nav-pills">
    <?php foreach ($data as $item) { $clazz = isset($item['active']) ? ' class="active"' : ''; ?>
        <li<?php echo $clazz; ?>><a href="<?php echo $item['href'];?>"><?php echo $item['title'];?></a></li>
    <?php } ?>
</ul>