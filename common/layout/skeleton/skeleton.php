<?php
    //resource static
    $this->import('lib/mod/mod.js');
    $this->import('lib/jquery/jquery.js');
    $this->import('lib/bootstrap/bootstrap.css');
    $this->import('lib/bootstrap/bootstrap.js');
    
    //inputs without default value
    $content     = $this->input('content');
    
    //inputs with default value
    $title       = $this->input('title', $this->getPageData('title', 'untitled'));
    $description = $this->input('description', $this->getPageData('description', ''));
    $keywords    = $this->input('keywords', $this->getPageData('keywords', ''));
    $head        = $this->input('head', '');
?>
<!DOCTYPE html>
<!--STATUS OK-->
<html>
<head>
<?php echo $this->load('widget/meta')->description($description)->keywords($keywords); ?>
<title><?php echo $title ?></title>
<script type="text/javascript" src="/lib/html5/html5.js?__inline"></script>
<?php echo $this->css(); ?>
<?php echo $head; ?>
</head>
<body>
<?php echo $content; ?>
<?php echo $this->js(); ?>
<?php echo $this->script(); ?>
</body>
</html>