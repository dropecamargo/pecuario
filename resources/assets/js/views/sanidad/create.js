app || (app = {});

(function ($, window, document, undefined) {

    app.CreateSanidadView = Backbone.View.extend({

        el: '#sanidad-create',
        template: _.template( ($('#add-sanidad-tpl').html() || '') ),
        events: {
            'submit #form-sanidad': 'onStore'
        },
        parameters: {
            callback: ''
        },

        initialize : function(opts) {      
          
            if( opts !== undefined && _.isObject(opts.parameters) )
                this.parameters = $.extend({}, this.parameters, opts.parameters);
            
            this.msgSuccess = 'Sanidad Guardado!!'; 
            this.$wraperForm = this.$('#render-form-sanidad');

            this.listenTo( this.model, 'change', this.render );
            this.listenTo( this.model, 'sync', this.responseServer );
            this.listenTo( this.model, 'request', this.loadSpinner );
        },

        onStore: function (e) {

            if (!e.isDefaultPrevented()) {
            
                e.preventDefault();
                var data = window.Misc.formToJson( e.target );
                this.model.save( data, {patch: true, silent: true} );                
            }
        },

        render: function() {

            var attributes = this.model.toJSON();
            this.$wraperForm.html( this.template(attributes) );

            this.ready();  
        },
        
  
        ready: function () {
            if( typeof window.initComponent.initICheck == 'function' )
                window.initComponent.initICheck(); 

            if( typeof window.initComponent.initToUpper == 'function' )
                window.initComponent.initToUpper();

             if( typeof window.initComponent.initDatePicker == 'function' )
                window.initComponent.initDatePicker();
        },
    

     updatenp:function( j ) {
  var n = parseInt( j.text(), 10 );
  j.text( n + 1 );
},




        loadSpinner: function (model, xhr, opts) {
            window.Misc.setSpinner( this.el );
        },

      
        responseServer: function ( model, resp, opts ) {
            window.Misc.removeSpinner( this.el );

            if(!_.isUndefined(resp.success)) {
                var text = resp.success ? '' : resp.errors;
                if( _.isObject( resp.errors ) ) {
                    text = window.Misc.parseErrors(resp.errors);
                }

                if( !resp.success ) {
                    alertify.error(text);
                    return;
                }
                
                var _this = this,
                    stuffToDo = {
                        'toShow' : function() {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('sanidad.show', { sanidad: resp.id })) );            
                        },

                        'default' : function() {
                            alertify.success(_this.msgSuccess);
                        }
                    };

                if (stuffToDo[this.parameters.callback]) {
                    stuffToDo[this.parameters.callback]();
                } else {
                    stuffToDo['default']();
                }
            }
        }
    });

})(jQuery, this, this.document);