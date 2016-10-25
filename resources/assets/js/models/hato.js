app || (app = {});

( function(window,document,undefined){

	app.HatoModel = Backbone.Model.extend({
		
		urlRoot: function(){
			return window.Misc.urlFull( Route.route('hato.index'));
		},
		idAttribute: 'id',
		defaults:{
			'hato_nombre':'',
			'hato_descripcion':'',
			'hato_color':'',
			'hato_activo': true
		}
	});
})(this, this.document);