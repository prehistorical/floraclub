(function( $ ) {
    $(function(){

        'use strict';


        //Создать что-угодно, категорию, опцию, ...
        $(document).anycreate('.any_create');


        //Сохранить категорию
        $('.category_container').anysave(function(id){

            var prefix = '.cat_';
            var sufix = '[data-id="'+id+'"]';

            var makeSelector = function(name){return prefix + name + sufix};

            var makeOptions = function(variant){
                var options = {};

                $('.cat_option[data-id="'+id+'"][data-variant="'+variant+'"]').each(function(){
                    var $this = $(this);
                    options[""+$this.data('option-id')] = $this.is(':checked');
                });

                return options;
            };

            var optionsv1 = makeOptions(1);
            var optionsv2 = makeOptions(2);
            var optionsv3 = makeOptions(3);

            return {
                id_or_name: id,
                id: id,
                ent_name: 'category',
                title: this.find(makeSelector('title')).val(),
                descr: this.find(makeSelector('descr')).val(),

                optionsv1: optionsv1,
                optionsv2: optionsv2,
                optionsv3: optionsv3,

                image: this.find(makeSelector('image')).val(),
                image_preview: this.find(makeSelector('image_preview')).val(),
                image_alt: this.find(makeSelector('image_alt')).val(),
                price: this.find(makeSelector('price')).val(),
                sorter: this.find(makeSelector('sorter')).val(),
                show: this.find(makeSelector('show')).is(':checked'),
                main: this.find(makeSelector('main')).is(':checked'),

                titlev1: this.find(makeSelector('titlev1')).val(),
                descrv1: this.find(makeSelector('descrv1')).val(),
                pricev1: this.find(makeSelector('pricev1')).val(),
                oldpricev1: this.find(makeSelector('oldpricev1')).val(),
                warrimagev1: this.find(makeSelector('warrimagev1')).val(),
                warrimagev1_preview: this.find(makeSelector('warrimagev1_preview')).val(),

                paramv1p1: this.find(makeSelector('paramv1p1')).val(),
                paramv1p2: this.find(makeSelector('paramv1p2')).val(),
                paramv1p3: this.find(makeSelector('paramv1p3')).val(),

                titlev2: this.find(makeSelector('titlev2')).val(),
                descrv2: this.find(makeSelector('descrv2')).val(),
                pricev2: this.find(makeSelector('pricev2')).val(),
                oldpricev2: this.find(makeSelector('oldpricev2')).val(),
                warrimagev2: this.find(makeSelector('warrimagev2')).val(),
                warrimagev2_preview: this.find(makeSelector('warrimagev2_preview')).val(),

                paramv2p1: this.find(makeSelector('paramv2p1')).val(),
                paramv2p2: this.find(makeSelector('paramv2p2')).val(),
                paramv2p3: this.find(makeSelector('paramv2p3')).val(),

                titlev3: this.find(makeSelector('titlev3')).val(),
                descrv3: this.find(makeSelector('descrv3')).val(),
                pricev3: this.find(makeSelector('pricev3')).val(),
                oldpricev3: this.find(makeSelector('oldpricev3')).val(),
                warrimagev3: this.find(makeSelector('warrimagev3')).val(),
                warrimagev3_preview: this.find(makeSelector('warrimagev3_preview')).val(),

                paramv3p1: this.find(makeSelector('paramv3p1')).val(),
                paramv3p2: this.find(makeSelector('paramv3p2')).val(),
                paramv3p3: this.find(makeSelector('paramv3p3')).val()
            };
        });



        //Сохранить опцию
        $('.option_container').anysave(function(id){

            var prefix = '.opt_';
            var sufix = '[data-id="'+id+'"]';

            var makeSelector = function(name){return prefix + name + sufix};

            return {
                id_or_name: id,
                id: id,
                ent_name: 'option',
                title: this.find(makeSelector('title')).val(),
                descr: this.find(makeSelector('descr')).val(),

                image: this.find(makeSelector('image_name')).val(),
                image_preview: this.find(makeSelector('image_preview_name')).val(),
                image_alt: this.find(makeSelector('image_alt')).val(),
                icon: this.find(makeSelector('icon_name')).val(),
                icon_preview: this.find(makeSelector('icon_preview_name')).val(),
                icon_alt: this.find(makeSelector('icon_alt')).val(),
                price: this.find(makeSelector('price')).val(),
                sorter: this.find(makeSelector('sorter')).val(),
                show: this.find(makeSelector('show')).is(':checked')
            };
        });


        //Сохранить дополнительную опцию
        $('.addition_container').anysave(function(id){

            var prefix = '.addit_';
            var sufix = '[data-id="'+id+'"]';

            var makeSelector = function(name){return prefix + name + sufix};

            return {
                id_or_name: id,
                id: id,
                ent_name: 'addition',
                title: this.find(makeSelector('title')).val(),
                descr: this.find(makeSelector('descr')).val(),
                price: this.find(makeSelector('price')).val(),
                image: this.find(makeSelector('image')).val(),
                image_preview: this.find(makeSelector('image_preview')).val(),
                image_alt: this.find(makeSelector('image_alt')).val(),
                sorter: this.find(makeSelector('sorter')).val(),
                show: this.find(makeSelector('show')).is(':checked')
            };
        });


        //Сохранить сертификат
        $('.certificate_container').anysave(function(id){

            var prefix = '.cert_';
            var sufix = '[data-id="'+id+'"]';

            var makeSelector = function(name){return prefix + name + sufix};

            return {
                id_or_name: id,
                id: id,
                ent_name: 'certificate',
                title: this.find(makeSelector('title')).val(),
                descr: this.find(makeSelector('descr')).val(),

                image: this.find(makeSelector('image')).val(),
                image_preview: this.find(makeSelector('image_preview')).val(),
                image_alt: this.find(makeSelector('image_alt')).val(),
                certtype: this.find(makeSelector('certtype')).val(),
                sorter: this.find(makeSelector('sorter')).val(),
                show: this.find(makeSelector('show')).is(':checked')
            };
        });


        //Сохранить этап
        $('.mountstep_container').anysave(function(id){

            var prefix = '.mount_';
            var sufix = '[data-id="'+id+'"]';

            var makeSelector = function(name){return prefix + name + sufix};

            return {
                id_or_name: id,
                id: id,
                ent_name: 'mountstep',
                title: this.find(makeSelector('title')).val(),
                descr: this.find(makeSelector('descr')).val(),

                image: this.find(makeSelector('image')).val(),
                image_preview: this.find(makeSelector('image_preview')).val(),
                image_alt: this.find(makeSelector('image_alt')).val(),
                sorter: this.find(makeSelector('sorter')).val(),
                show: this.find(makeSelector('show')).is(':checked')
            };
        });

        //Сохранить сотрудника
        $('.sotr_container').anysave(function(id){

            var prefix = '.sotr_';
            var sufix = '[data-id="'+id+'"]';

            var makeSelector = function(name){return prefix + name + sufix};

            return {
                id_or_name: id,
                id: id,
                ent_name: 'sotr',
                title: this.find(makeSelector('title')).val(),
                subtitle: this.find(makeSelector('subtitle')).val(),
                descr: this.find(makeSelector('descr')).val(),

                image: this.find(makeSelector('image')).val(),
                image_preview: this.find(makeSelector('image_preview')).val(),
                image_alt: this.find(makeSelector('image_alt')).val(),
                sorter: this.find(makeSelector('sorter')).val(),
                show: this.find(makeSelector('show')).is(':checked')
            };
        });



        //Сохранение обособленных данных
        $(document).staticsave(function(block_type, block_name){

            var obj =
            {
                name: block_name,
                block_type: block_type,
                addField: function(field)
                {
                    var val = $('.'+block_type+'_'+field+'[data-name="'+this.name+'"]').val();
                    if (val === undefined){
                        this[field] = '';
                    } else {
                        this[field] = val;
                    }
                }
            };

            if(block_type == "contact")
            {
                obj.addField('firstpart');
                obj.addField('secondpart');
                obj.addField('thirdpart');
                obj.addField('phone1');
                obj.addField('phone2');
                obj.addField('phone3');
                obj.addField('map');
                obj.addField('email');

                obj.show = $('.contact_show[data-name="'+block_name+'"]').is(':checked');
            }
            else if(block_type == "static")
            {
                obj.addField('title');
                obj.addField('subtitle');
                obj.addField('descr');
                obj.addField('image');
                obj.addField('image_preview');
                obj.addField('image_alt');
            }
            else if(block_type == "profit")
            {
                obj.addField('title');
                obj.addField('descr');
                obj.addField('price');
            }

            delete obj.addField;//сериализуйся без функции

            return obj;

        });



    });

})(jQuery);






















