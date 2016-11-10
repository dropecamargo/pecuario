var app = app || {};

(function ($, window, document, undefined) {

    var InitComponent = function(){

        //Init Attributes
        $.ajaxSetup({
            cache: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }

    InitComponent.prototype = {

        /**
        * Constructor or Initialize Method
        */
        initialize: function () {
            //Initialize
            this.initApp();
            this.initDatePicker();
            this.initSelect2();
            this.initToUpper();
        },

        /**
        * Init Backbone Application
        */
        initApp: function () {
            window.app.AppRouter.start();
        },

        initDatePicker: function () {

            $('.datepicker').datepicker({
                autoclose: true,
                language: 'es',
                format: 'yyyy-mm-dd'
            });
        },
        /**
        * Init select2
        */
        initSelect2: function () {
            $('.select2-default').select2({ language: 'es', placeholder: 'Seleccione', allowClear: false });
            $('.select2-default-clear').select2({ language: 'es', placeholder: 'Seleccione', allowClear: true });
        },

        /**
        * Init toUpper
        */
        initToUpper: function () {
            $('.input-toupper').keyup(function(){
                $(this).val( $(this).val().toUpperCase() );
            });
        },
    };

    //Init App Components
    //-----------------------
    $(function() {
        window.initComponent = new InitComponent();
        window.initComponent.initialize();
    });

})(jQuery, this, this.document);
