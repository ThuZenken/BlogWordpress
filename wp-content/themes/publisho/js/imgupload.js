// Image Uploader
jQuery(document).ready( function() {
    jQuery( ".th-upload-button" ).live( "click", function () {
        var io_attachment_link = wp.media.editor.send.attachment;
        var button = jQuery(this);
        wp.media.editor.send.attachment = function (props, attachment) {
            jQuery(button).prev().prev().attr('src', attachment.url);
            jQuery(button).prev().val(attachment.url);
            wp.media.editor.send.attachment = io_attachment_link;
        };
        wp.media.editor.open(button);
        return false;
    });
});