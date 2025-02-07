(function() {
    'use strict';

    // Uploading files
    var file_frame;
    var file_target_input;
    var file_id_input;

    console.log( 'uploud init' );

    jQuery('.upload_image_button').on('click', function (event) {

        event.preventDefault();

        file_target_input = jQuery(this).closest('.form-field').find('.file_url');
        file_id_input = jQuery(this).closest('.form-field').find('.file_id');

        // If the media frame already exists, reopen it.
        if (file_frame) {
            file_frame.open();
            return;
        }

        // Create the media frame.
        file_frame = wp.media.frames.file_frame = wp.media({
            title: jQuery(this).data('uploader_title'),
            button: {
                text: jQuery(this).data('uploader_button_text')
            },
            multiple: false  // Set to true to allow multiple files to be selected,
        });

        // When an image is selected, run a callback.
        file_frame.on('select', function () {

            console.log( file_frame.state().get('selection') );
            console.log( file_frame.state().get('selection').first() );
            console.log( file_frame.state().get('selection').first().toJSON() );

            // We set multiple to false so only get one image from the uploader
            let image = file_frame.state().get('selection').first().toJSON();

            jQuery(file_target_input).val(image.url);
            jQuery(file_id_input).val(image.id);
        });

        // Finally, open the modal
        file_frame.open();
    });

    jQuery('.upload_image_button').closest('.form-field').find('.file_url').on('change', function (event) {
        file_id_input = jQuery(this).closest('.form-field').find('.file_id');
        jQuery(file_id_input).val('');
    });
    
})();
