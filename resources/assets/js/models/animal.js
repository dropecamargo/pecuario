app || (app = {});

( function(window,document,undefined){

app.AnimalModel = Backbone.Model.extend({

urlRoot: function(){
return window.Misc.urlFull( Route.route('animal.index'));
},
idAttribute: 'id',
defaults:{
'animal_numero':'',
'animal_nombre':'',
'animal_especie':'',
'animal_raza': '',
'animal_pedigree':'',
'animal_macho':'',
'animal_nacimiento': moment().format('YYYY-MM-DD'),
'animal_destete': moment().format('YYYY-MM-DD'),
'animal_ingreso': moment().format('YYYY-MM-DD'),
'animal_peso_nacido':'',
'animal_padre':'',
'animal_madre': '',
'animal_indice_corporal':'',
'animal_lote':'',
'animal_observaciones':'',
'animal_rdfi':'',
'animal_activo':true,


}
});
})(this, this.document);