<div class="main__r col-md-3 col-sm-12 mb-2">
    <div class="sidebar">
        <?php
            if(!is_active_sidebar('sidebar_right')) {
                return;
            }
            dynamic_sidebar('sidebar_right');
        ?>    
    </div>
</div>