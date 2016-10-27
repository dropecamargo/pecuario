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
'lote_alerta_sin_pesaje':0,
'lote_alerta_peso_inferior':0,
'lote_alerta_peso_superior':0

}
});
})(this, this.document);