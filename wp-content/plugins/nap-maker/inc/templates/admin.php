<div class="wrap">
    
    <?php  settings_errors(); ?>

    <div class="tab-content">
       
        
            <form method="POST" action="options.php">
                <?php
                    // Settings ID
                    settings_fields('nap_schema_settings');

                    // Page slug of admin page
                    do_settings_sections( 'nap_schema' );

                    // Submit button
                    submit_button();
                ?>
            </form>
        


    </div>
</div>
