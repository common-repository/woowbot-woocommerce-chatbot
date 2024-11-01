jQuery(function ($) {
$(document).ready(function () {
    var sbdstoredNoticeId = localStorage.getItem('qcld_wpbot_Notice_set');
    var qcld_chatbot_Notice_time_set = localStorage.getItem('qcld_wpbot_Notice_time_set');
    var notice_current_time = Math.round(new Date().getTime() / 1000);
    if ('promotion-wpchatbot' == sbdstoredNoticeId && qcld_chatbot_Notice_time_set > notice_current_time  ) {
        $('#promotion-wpchatbot').css({'display': 'none'});
    }
    $(document).on('click', '#promotion-wpchatbot .notice-dismiss', function(e){
        var currentDom = $(this);
        var currentWrap = currentDom.closest('.notice');
        currentWrap.css({'display': 'none'});
        localStorage.setItem('qcld_wpbot_Notice_set', 'promotion-wpchatbot');
        var ts = Math.round(new Date().getTime() / 1000);
        var tsYesterday = ts + (24 * 3600);
        localStorage.setItem('qcld_wpbot_Notice_time_set', tsYesterday);
    });
    [].slice.call(document.querySelectorAll('.woo-chatbot-tabs')).forEach(function (el) {
        new CBPFWTabs(el);
    });



    $(document).on('change','#qcld_woo_chatbot_change_bg',function (e) {

         if($(this).is(':checked')){

             $('.qcld-woo-chatbot-board-bg-container').show();

         }else{

             $('.qcld-woo-chatbot-board-bg-container').hide();

         }

    });


        //Custom Backgroud image

        $('.qcld_woo_chatbot_board_bg_button').click(function(e) {

            e.preventDefault();

            var image = wp.media({

                title: 'Custom Agent',

                // mutiple: true if you want to upload multiple files at once

                multiple: false

            })

                .open()

                .on('select', function(e){

                    // This will return the selected image from the Media Uploader, the result is an object

                    var uploaded_image = image.state().get('selection').first();

                    var image_url = uploaded_image.toJSON().url;

                    // Let's assign the url value to the hidden field value and img src.

                    $('#qcld_woo_chatbot_board_bg_image').attr('src',image_url).css({ display: "block" });
                    //$('#qcld_woo_chatbot_board_bg_image').css({ display: "block" });

                    $('#qcld_woo_chatbot_board_bg_path').val(image_url);

                });

        });

        $('.wp_chatbot_custom_agent_button').click(function(e) {

            e.preventDefault();
    
            var image = wp.media({
                title: 'Custom Agent',
                multiple: false
            })
                .open()
                .on('select', function(e){
                    // This will return the selected image from the Media Uploader, the result is an object
                    var uploaded_image = image.state().get('selection').first();
                    var image_url = uploaded_image.toJSON().url;
                    // Let's assign the url value to the hidden field value and img src.
                    $('#wp_chatbot_custom_agent_src').attr('src',image_url);
                    $('#wp_chatbot_custom_agent_path').val(image_url);
                    $('#wp_chatbot_agent_image_custom').val(image_url);
                });
    
        });
        $('.wp_chatbot_custom_icon_button').click(function(e) {

            e.preventDefault();
    
            var image = wp.media({
                title: 'Custom chatbot icon',
                multiple: false
            })
                .open()
                .on('select', function(e){
                    // This will return the selected image from the Media Uploader, the result is an object
                    var uploaded_image = image.state().get('selection').first();
                    var image_url = uploaded_image.toJSON().url;
                    console.log(image_url)
                    // Let's assign the url value to the hidden field value and img src.
                    $('#woo_chatbot_custom_icon').attr('src',image_url);
                    $('#wp_chatbot_custom_icon_path').val(image_url);
                  //  $('#wp_chatbot_agent_image_custom').val(image_url);
                });
    
        });




});
});