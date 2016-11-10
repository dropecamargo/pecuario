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
            'razas/create(/)': 'getRazasCreate',
            'razas/:razas/edit(/)': 'getRazasEdit',

            //Rutas Modulo Hato
            'hato(/)': 'getHatoMain',
            'hato/create(/)': 'getHatoCreate',
            'hato/:hato/edit(/)': 'getHatoEdit',

            //Rutas Modulo Lote
            'lote(/)': 'getLoteMain',
            'lote/create(/)': 'getLoteCreate',
            'lote/:lote/edit(/)': 'getLoteEdit',

            //Rutas Modulo Animal
            'animal(/)': 'getAnimalMain',
            'animal/create(/)': 'getAnimalCreate',
            'animal/:animal/edit(/)': 'getAnimalEdit',

            //Rutas Modulo Actividad
            'actividad(/)': 'getActividadMain',
            'actividad/create(/)': 'getActividadCreate',
            'actividad/:actividad/edit(/)': 'getActividadEdit',

            //Rutas Modulo Peso
            'peso(/)': 'getPesoMain',
            'peso/create(/)': 'getPesoCreate',
            'peso/:peso/edit(/)': 'getPesoEdit',

            //Rutas Modulo Sanidad
            'sanidad(/)': 'getSanidadMain',
            'sanidad/create(/)': 'getSanidadCreate',
            'sanidad/:sanidad/edit(/)': 'getSanidadEdit'



        },

        /**
        * Constructor Method
        */
        initialize : function ( opts ){
            // Initialize resources
            this.componentCreateResourceView = new app.ComponentCreateResourceView();
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
            this.razasModel = new app.RazasModel();
            if(this.createRazaView instanceof Backbone.View){
                this.createRazaView.stopListening();
                this.createRazaView.undelegateEvents();
            }
            this.createRazaView = new app.CreateRazaView({ model: this.razasModel, parameters: { callback: "toShow" } });
            this.createRazaView.render();
        },

        getRazasEdit: function(razas){
            this.razasModel = new app.RazasModel();
            this.razasModel.set({'id': razas},{silent: true});
                if( this.createRazaView instanceof Backbone.View){
                    this.createRazaView.stopListening();
                    this.createRazaView.undelegateEvents();
                }
                this.createRazaView = new app.CreateRazaView({ model: this.razasModel, parameters: {callback: 'toShow'}});
                this.razasModel.fetch();
        },

        // Modulo de Hato
        getHatoMain: function(){
            if (this.mainHatoView instanceof Backbone.View){
                this.mainHatoView.stopListening();
                this.mainHatoView.undelegateEvents();
            }
            this.mainHatoView = new app.MainHatoView();
        },

         getHatoCreate: function(){
            this.hatoModel = new app.HatoModel();
            if(this.createHatoView instanceof Backbone.View){
                this.createHatoView.stopListening();
                this.createHatoView.undelegateEvents();
            }
            this.createHatoView = new app.CreateHatoView({ model: this.hatoModel, parameters: { callback: "toShow" } });
            this.createHatoView.render();
        },

        getHatoEdit: function(hato){
            this.hatoModel = new app.HatoModel();
            this.hatoModel.set({'id': hato},{silent: true});
                if( this.createHatoView instanceof Backbone.View){
                    this.createHatoView.stopListening();
                    this.createHatoView.undelegateEvents();
                }
                this.createHatoView = new app.CreateHatoView({ model: this.hatoModel, parameters: {callback: 'toShow'}});
                this.hatoModel.fetch();
        },

        //Modulo Lotes

        getLoteMain: function(){
           if (this.mainLoteView instanceof Backbone.View){
               this.mainLoteView.stopListening();
               this.mainLoteView.undelegateEvents();
           }
           this.mainLoteView = new app.MainLoteView();
       },

        getLoteCreate: function(){
           this.loteModel = new app.LoteModel();
           if(this.createLoteView instanceof Backbone.View){
               this.createLoteView.stopListening();
               this.createLoteView.undelegateEvents();
           }
           this.createLoteView = new app.CreateLoteView({ model: this.loteModel, parameters: { callback: "toShow" } });
           this.createLoteView.render();
       },

       getLoteEdit: function(lote){
           this.loteModel = new app.LoteModel();
           this.loteModel.set({'id': lote},{silent: true});
               if( this.createLoteView instanceof Backbone.View){
                   this.createLoteView.stopListening();
                   this.createLoteView.undelegateEvents();
               }
               this.createLoteView = new app.CreateLoteView({ model: this.loteModel, parameters: {callback: 'toShow'}});
               this.loteModel.fetch();
       },

       //Modulo Animal
       getAnimalMain: function(){
            if(this.mainAnimalView instanceof Backbone.View){
                this.mainAnimalView.stopListening();
                this.mainAnimalView.undelegateEvents();
            }
            this.mainAnimalView = new app.MainAnimalView();
       },

         getAnimalCreate: function(){
            this.animalModel = new app.AnimalModel();
            if(this.createAnimalView instanceof Backbone.View){
                this.createAnimalView.stopListening();
                this.createAnimalView.undelegateEvents();
            }
            this.createAnimalView = new app.CreateAnimalView({ model: this.animalModel, parameters: { callback: "toShow" } });
            this.createAnimalView.render();
        },

        getAnimalEdit: function(animal){
            this.animalModel = new app.AnimalModel();
            this.animalModel.set({'id': animal},{silent: true});
                if( this.createAnimalView instanceof Backbone.View){
                    this.createAnimalView.stopListening();
                    this.createAnimalView.undelegateEvents();
                }
                this.createAnimalView = new app.CreateAnimalView({ model: this.animalModel, parameters: {callback: 'toShow'}});
                this.animalModel.fetch();
        },
      //Modulo Actividad

       getActividadMain: function(){
            if (this.mainActividadView instanceof Backbone.View){
                this.mainActividadView.stopListening();
                this.mainActividadView.undelegateEvents();
            }
            this.mainActividadView = new app.MainActividadView();
        },

        getActividadCreate: function(){
            this.actividadModel = new app.ActividadModel();
            if(this.createActividadView instanceof Backbone.View){
                this.createActividadView.stopListening();
                this.createActividadView.undelegateEvents();
            }
            this.createActividadView = new app.CreateActividadView({ model: this.actividadModel, parameters: { callback: "toShow" } });
            this.createActividadView.render();
        },

        getActividadEdit: function(actividad){
            this.actividadModel = new app.RazasModel();
            this.actividadModel.set({'id': actividad},{silent: true});
                if( this.createActividadView instanceof Backbone.View){
                    this.createActividadView.stopListening();
                    this.createActividadView.undelegateEvents();
                }
                this.createActividadView = new app.CreateActividadView({ model: this.actividadModel, parameters: {callback: 'toShow'}});
                this.actividadModel.fetch();
        },
        //Modulo Peso

        getPesoMain: function(){
           if (this.mainPesoView instanceof Backbone.View){
               this.mainPesoView.stopListening();
               this.mainPesoView.undelegateEvents();
           }
           this.mainPesoView = new app.MainPesoView();
       },

        getPesoCreate: function(){
           this.pesoModel = new app.PesoModel();
           if(this.createPesoView instanceof Backbone.View){
               this.createPesoView.stopListening();
               this.createPesoView.undelegateEvents();
           }
           this.createPesoView = new app.CreatePesoView({ model: this.pesoModel, parameters: { callback: "toShow" } });
           this.createPesoView.render();
       },

       getPesoEdit: function(peso){
           this.PesoModel = new app.PesoModel();
           this.PesoModel.set({'id': peso},{silent: true});
               if( this.createPesoView instanceof Backbone.View){
                   this.createPesoView.stopListening();
                   this.createPesoView.undelegateEvents();
               }
               this.createPesoView = new app.CreatePesoView({ model: this.pesoModel, parameters: {callback: 'toShow'}});
               this.pesoModel.fetch();
       },
        //Modulo Sanidad

        getSanidadMain: function(){
           if (this.mainSanidadView instanceof Backbone.View){
               this.mainSanidadView.stopListening();
               this.mainSanidadView.undelegateEvents();
           }
           this.mainSanidadView = new app.MainSanidadView();
       },

        getSanidadCreate: function(){
           this.sanidadModel = new app.SanidadModel();
           if(this.createSanidadView instanceof Backbone.View){
               this.createSanidadView.stopListening();
               this.createSanidadView.undelegateEvents();
           }
           this.createSanidadView = new app.CreateSanidadView({ model: this.sanidadModel, parameters: { callback: "toShow" } });
           this.createSanidadView.render();
       },

       getSanidadEdit: function(Sanidad){
           this.SanidadModel = new app.SanidadModel();
           this.SanidadModel.set({'id': sanidad},{silent: true});
               if( this.createSanidadView instanceof Backbone.View){
                   this.createSanidadView.stopListening();
                   this.createSanidadView.undelegateEvents();
               }
               this.createSanidadView = new app.CreateSanidadView({ model: this.sanidadModel, parameters: {callback: 'toShow'}});
               this.sanidadModel.fetch();
       }

    }));

})(jQuery, this, this.document);