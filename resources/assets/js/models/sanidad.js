app || (app = {});

( function(window,document,undefined){

	app.SanidadModel = Backbone.Model.extend({
		
		urlRoot: function(){
			return window.Misc.urlFull( Route.route('sanidad.index'));
		},
		idAttribute: 'id',
		defaults:{
			'sanidad_actividad':'',
			'sanidad_animal':'',
			'sanidad_fecha':moment().format('YYYY-MM-DD'),
			'sanidad_nombre':'',
			'sanidad_tratamiento':'',
			'sanidad_comentario':'',
			'sanidad_aplicalote':'',
			'sanidad_lote':'',
			'sanidad_cambialote':''
		}
	});
})(this, this.document);