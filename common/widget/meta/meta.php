<?php

    /**
     * meta widget
     */

    $description = $this->input('description', '');
    $keywords    = $this->input('keywords', '');

?>

<meta charset="utf-8">
<?php if (!empty($description)) { ?>
<meta name="description" content="<?=$description?>">
<? } ?>
<?php if (!empty($keywords)) { ?>
<meta name="keywords" content="<?=$keywords?>">
<? } ?>