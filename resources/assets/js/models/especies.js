app || (app = {});

( function(window,document,undefined){

	app.EspeciesModel = Backbone.Model.extend({
		
		urlRoot: function(){
			return window.Misc.urlFull( Route.route('especies.index'));
		},
		idAttribute: 'id',
		defaults:{
			'especie_nombre':'',
			'especie_activa': true
		}
	});
})(this, this.document);