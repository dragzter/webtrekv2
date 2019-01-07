<div class="wrap">
    <div class="nap-content">
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
        <?php  settings_errors(); ?>
    </div>
</div>