app || (app = {});

(function ($, window, document, undefined) {

    app.MainAnimalView = Backbone.View.extend({

        el: '#animal-main',

        /**
        * Constructor Method
        */
        initialize : function() {

            this.$animalSearchTable = this.$('#animal-search-table');

            this.$animalSearchTable.DataTable({
                dom: "<'row'<'col-sm-4'B><'col-sm-4 text-center'l><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('animal.index') ),
                columns: [
                    { data: 'animal_id', name: 'animal_id'},
                    { data: 'animal_numero', name: 'animal_numero' },
                    { data: 'animal_nombre', name: 'animal_nombre' },
                    { data: 'especie_nombre', name: 'especie_nombre'},
                    { data: 'animal_raza', name: 'animal_raza'},
                    { data: 'animal_lote', name: 'animal_lote'},
                    { data: 'animal_activo', name: 'animal_activo'}
                    
                ],
                buttons: [
                    {
                        text: '<i class="fa fa-user-plus"></i> Nuevo Animal',
                        className: 'btn-sm',
                        action: function ( e, dt, node, config ) {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('animal.create') ) )
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: 0,
                        width: "10%",
                        render: function( data, type, full, row ){
                            return '<a href="'+ window.Misc.urlFull( Route.route('animal.show', {animal: full.id }) )  +'">' + data + '</a>';
                        }
                    },
                    {
                        targets: 6,
                        width: '10%',
                        render: function ( data, type, full, row ) {
                            return data ? 'Si' : 'No';
                        }
                    }
                ]
            });
        }
    });

})(jQuery, this, this.document);