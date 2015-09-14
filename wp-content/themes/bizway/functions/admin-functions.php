<?php
/* ----------------------------------------------------------------------------------- */
/* Head Hook
  /*----------------------------------------------------------------------------------- */

function of_head() {
    do_action('of_head');
}
/* ----------------------------------------------------------------------------------- */
/* Admin Backend */
/* ----------------------------------------------------------------------------------- */

function optionsframework_admin_head() {

    //Tweaked the message on theme activate
    ?>
    <script type="text/javascript">
        jQuery(function(){
        	
            var message = '<p>This theme comes with an <a href="<?php echo admin_url('admin.php?page=optionsframework'); ?>">options panel</a> to configure settings. This theme also supports widgets, please visit the <a href="<?php echo admin_url('widgets.php'); ?>">widgets settings page</a> to configure them.</p>';
            jQuery('.themes-php #message2').html(message);
        
        });
    </script>
    <?php
}

add_action('admin_head', 'optionsframework_admin_head');