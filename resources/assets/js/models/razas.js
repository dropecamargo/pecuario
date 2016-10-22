app || (app = {});

( function(window,document,undefined){

	app.RazasModel = Backbone.Model.extend({
		
		urlRoot: function(){
			return window.Misc.urlFull( Route.route('razas.index'));
		},
		idAttribute: 'id',
		defaults:{
			'raza_nombre':'',
			'raza_activa': true
		}
	});
})(this, this.document);