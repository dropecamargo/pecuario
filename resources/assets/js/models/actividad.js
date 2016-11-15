app || (app = {});

( function(window,document,undefined){

	app.ActividadModel = Backbone.Model.extend({
		
		urlRoot: function(){
			return window.Misc.urlFull( Route.route('actividad.index'));
		},
		idAttribute: 'id',
		defaults:{
			'actividad_nombre':'',
			'actividad_activa': true
		}
	});
})(this, this.document);