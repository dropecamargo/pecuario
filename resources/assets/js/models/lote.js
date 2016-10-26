app || (app = {});

( function(window,document,undefined){

app.LoteModel = Backbone.Model.extend({

urlRoot: function(){
return window.Misc.urlFull( Route.route('lote.index'));
},
idAttribute: 'id',
defaults:{
'lote_nombre':'',
'lote_descripcion':'',
'lote_color':'',
'lote_activo': true,
'lote_superficie':'',
'lote_hato':'',
'lote_alerta_sin_pesaje':true,
'lote_alerta_peso_inferior':'',
'lote_alerta_peso_superior':''

}
});
})(this, this.document);