
(function( $ ) {
    $(function(){

        'use strict';

        var Adminka = document.adminkaInterpro;
        Adminka.init({});

        var uploadImage = function(){

            var $this = $(this);

            var entity_name  = $this.data('entity');
            var block_name   = $this.data('block');
            var field_name   = $this.data('field-name');

            var messagecontainer;
            var item_id;

            var preview;
            var preview_file_name;
            var file_name;

            var formData = new FormData();

            if(entity_name == 'block') {

                preview           = $('.preview[data-block="'+block_name+'"][data-field-name="'+field_name+'"]');
                preview_file_name = $('.preview_link[data-block="'+block_name+'"][data-field-name="'+field_name+'"]');
                file_name         = $('.primary_link[data-block="'+block_name+'"][data-field-name="'+field_name+'"]');

                //Информатор:
                messagecontainer = $('.block_messenger[data-block="'+block_name+'"]');

            } else if(entity_name == 'groupitem') {

                item_id = $this.data('item-id');

                formData.append("id", item_id);

                preview           = $('.preview[data-block="'+block_name+'"][data-field-name="'+field_name+'"][data-item-id="'+item_id+'"]');
                preview_file_name = $('.preview_link[data-block="'+block_name+'"][data-field-name="'+field_name+'"][data-item-id="'+item_id+'"]');
                file_name         = $('.primary_link[data-block="'+block_name+'"][data-field-name="'+field_name+'"][data-item-id="'+item_id+'"]');

                //Информатор:
                messagecontainer = $('.group_messenger[data-block="'+block_name+'"]');
            }

            formData.append("imagefile", this.files[0]);
            formData.append("name",      block_name+'_'+field_name);

            //Сброс информатора:
            messagecontainer.removeClass('alert-success');
            messagecontainer.removeClass('alert-info');
            messagecontainer.removeClass('alert-danger');
            messagecontainer.text('');
            //-------------------------------------------

            $(this).adminka(
                'postimage',
                {
                    data: formData,
                    url: '/adm/uploadimage'
                },
                {
                    done_callback: function(data){
                        if (data.status === 'OK') {

                            preview.attr('src', '/images/' + data.preview_file_name);
                            preview_file_name.val(data.preview_file_name);
                            file_name.val(data.file_name);

                            messagecontainer.addClass('alert-success');
                            messagecontainer.text('Картинка загружена.');
                        }else{
                            messagecontainer.addClass('alert-warning');
                            messagecontainer.text('Картинка НЕ загружена. Статус ошибки: ' + data.status);
                        }
                    },
                    fail_callback: function(data){
                        messagecontainer.addClass('alert-danger');
                        messagecontainer.append('Что-то пошло не по плану: <br>'+JSON.stringify(data));
                    },
                    always_callback: function(data){
                        //Убрать индикатор загрузки, если появится
                    }
                }

            );

        };



        $(document).on('change', '.input_file', uploadImage);

    });
})(jQuery);