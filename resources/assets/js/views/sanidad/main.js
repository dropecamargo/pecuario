app || (app = {});

(function ($, window, document, undefined) {

    app.MainSanidadView = Backbone.View.extend({

        el: '#sanidad-main',

        /**
        * Constructor Method
        */
        initialize : function() {

            this.$sanidadSearchTable = this.$('#sanidad-search-table');

            this.$sanidadSearchTable.DataTable({
                dom: "<'row'<'col-sm-4'B><'col-sm-4 text-center'l><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('sanidad.index') ),
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'sanidad_actividad', name: 'sanidad_actividad'},
                    { data: 'sanidad_animal', name: 'sanidad_animal'},
                    { data: 'sanidad_nombre', name: 'sanidad_nombre'},
                    { data: 'sanidad_lote', name: 'sanidad_lote'}
                    
                    
                ],
                buttons: [
                    {
                        text: '<i class="fa fa-user-plus"></i> Nueva sanidad',
                        className: 'btn-sm',
                        action: function ( e, dt, node, config ) {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('sanidad.create') ) )
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: 0,
                        width: "10%",
                        render: function( data, type, full, row ){
                            return '<a href="'+ window.Misc.urlFull( Route.route('sanidad.show', {sanidad: full.id }) )  +'">' + data + '</a>';
                        }
                    }                    
                ]
            });
        }
    });

})(jQuery, this, this.document);