(function( $ ) {
    $(function(){
        var customizedButtonPaneTbwOptions = {
            lang: 'ru',
            closable: true,
            fixedBtnPane: true,
            semantic: true,
            resetCss: false,
            removeformatPasted: true,
            btnsDef: {
                // Customizables dropdowns
                align: {
                    dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ico: 'justifyLeft'
                },
                image: {
                    dropdown: ['insertImage', 'upload', 'base64'],
                    ico: 'insertImage'
                }
            },
            btns: ['viewHTML',
                '|', 'formatting',
                '|', 'btnGrp-test',
                '|', 'align',
                '|', 'em',
                '|', 'btnGrp-lists',
                '|', 'image',
                '|', 'foreColor', 'backColor']
        };

        $(document).on("dblclick", ".descrfield", function(event){
            $(this).trumbowyg(customizedButtonPaneTbwOptions);
        });
    });
})(jQuery);
