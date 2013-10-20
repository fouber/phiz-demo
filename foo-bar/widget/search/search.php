<?php
    
    $query = $this->input('query', $this->getPageData('query', isset($_GET['search']) ? $_GET['search'] : '' ));
    
?>

<div class="navbar">
    <div class="navbar-inner">
        <form class="navbar-search pull-left">
            <input type="text" class="search-query" placeholder="Search" value="<?php echo $query; ?>">
        </form>
    </div>
</div>