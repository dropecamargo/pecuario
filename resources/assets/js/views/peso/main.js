app || (app = {});

(function ($, window, document, undefined) {

    app.MainPesoView = Backbone.View.extend({

        el: '#peso-main',

        /**
        * Constructor Method
        */
        initialize : function() {

            this.$pesoSearchTable = this.$('#peso-search-table');

            this.$pesoSearchTable.DataTable({
                dom: "<'row'<'col-sm-4'B><'col-sm-4 text-center'l><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('peso.index') ),
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'animal_nombre', name: 'animal_nombre' },
                    { data: 'lote_nombre', name: 'lote_nombre' },
                    { data: 'peso_cambialote', name: 'peso_cambialote'}
                   
                    
                    
                ],
                buttons: [
                    {
                        text: '<i class="fa fa-user-plus"></i> Nuevo peso',
                        className: 'btn-sm',
                        action: function ( e, dt, node, config ) {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('peso.create') ) )
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: 0,
                        width: "10%",
                        render: function( data, type, full, row ){
                            return '<a href="'+ window.Misc.urlFull( Route.route('peso.show', {peso: full.id }) )  +'">' + data + '</a>';
                        }
                    }
                ]
            });
        }
    });

})(jQuery, this, this.document);