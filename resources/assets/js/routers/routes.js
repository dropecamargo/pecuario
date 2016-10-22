/**
* Class AppRouter  of Backbone Router
* @author KOI || @dropecamargo
* @link http://koi-ti.com
*/

//Global App Backbone
app || (app = {});

(function ($, window, document, undefined) {

    app.AppRouter = new( Backbone.Router.extend({
        routes : {
            'login(/)': 'getLogin',

            //Rutas Modulo Especies
            'especies(/)': 'getEspeciesMain',
            'especies/create(/)': 'getEspeciesCreate',
            'especies/:especies/edit(/)': 'getEspeciesEdit',

            //Rutas Modulo Razas
            'razas(/)': 'getRazasMain',
            'razas/create(/)': 'getRazasCreate'

        },

        /**
        * Constructor Method
        */
        initialize : function ( opts ){
            // Initialize resources
      	},

        /**
        * Start Backbone history
        */
        start: function () {
            var config = { pushState: true };

            if( document.domain.search("localhost") != '-1')
                config.root = '/pecuario/public/';

            Backbone.history.start( config );
        },

        /**
        * show view login
        * @param String show
        */
        getLogin: function () {

            if ( this.loginView instanceof Backbone.View ){
                this.loginView.stopListening();
                this.loginView.undelegateEvents();
            }

            this.loginView = new app.UserLoginView( );
        },

        //Modulo de Especies

        getEspeciesMain: function () {

            if ( this.mainEspeciesView instanceof Backbone.View ){
                this.mainEspeciesView.stopListening();
                this.mainEspeciesView.undelegateEvents();
            }

            this.mainEspeciesView = new app.MainEspeciesView();
        },

        getEspeciesCreate: function(){
            this.especiesModel = new app.EspeciesModel();

            if ( this.createEspeciesView instanceof Backbone.View ){
                this.createEspeciesView.stopListening();
                this.createEspeciesView.undelegateEvents();
            }

            this.createEspeciesView = new app.CreateEspeciesView({ model: this.especiesModel, parameters: { callback: 'toShow' } });
            this.createEspeciesView.render();
        },

        getEspeciesEdit: function(especies){
            this.especiesModel = new app.EspeciesModel();
            this.especiesModel.set({'id': especies}, {silent: true});
             if ( this.createEspeciesView instanceof Backbone.View ){
                this.createEspeciesView.stopListening();
                this.createEspeciesView.undelegateEvents();
            }

            this.createEspeciesView = new app.CreateEspeciesView({ model: this.especiesModel, parameters: { callback: 'toShow' } });
            this.especiesModel.fetch();
        },

        // Modulo de Razas

        getRazasMain: function(){
            if (this.mainRazasView instanceof Backbone.View){
                this.mainRazasView.stopListening();
                this.mainRazasView.undelegateEvents();
            }
            this.mainRazasView = new app.MainRazasView();
        },

        getRazasCreate: function(){
            this.razasModel = app.RazasModel();
            if(this.createRazaView instanceof Backbone.View){
                this.createRazaView.stopListening();
                this.createRazaView.undelegateEvents();
            }
            this.createRazaView = new app.CreateRazaView({ model: this.razasModel, parameters: { callback: "toShow" } });
            this.createRazaView.render();
        }



    }));

})(jQuery, this, this.document);