app || (app = {});

( function(window,document,undefined){

	app.PesoModel = Backbone.Model.extend({
		
		urlRoot: function(){
			return window.Misc.urlFull( Route.route('peso.index'));
		},
		idAttribute: 'id',
		defaults:{
			'peso_animal':'',
			'peso_fecha':moment().format('YYYY-MM-DD'),
			'peso_observaciones':'',
			'peso_lote':'',
			'peso_cambialote':''

		}
	});
})(this, this.document);