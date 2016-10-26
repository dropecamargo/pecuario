app || (app = {});

(function($, window, document, undefined){
 app.MainLoteView = Backbone.View.extend({

        el: '#lote-main',

        initialize : function() {

            this.$loteSearchTable = this.$('#lote-search-table');

            this.$loteSearchTable.DataTable({
                dom: "<'row'<'col-sm-4'B><'col-sm-4 text-center'l><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('lote.index') ),
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'lote_nombre', name: 'lote_nombre' },
                    { data: 'lote_descripcion', name: 'lote_descripcion' },
                    { data: 'lote_color', name: 'lote_color'},
                    { data: 'lote_activo', name: 'lote_activo'}
                ],
                buttons: [
                    {
                        text: '<i class="fa fa-user-plus"></i> Nueva lote',
                        className: 'btn-sm',
                        action: function ( e, dt, node, config ) {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('lote.create') ) )
                        }
                    }
                ],
                columnDefs: [
                {
                        targets: 0,
                        width: "10%",
                        render: function( data, type, full, row ){
                            return '<a href="'+ window.Misc.urlFull( Route.route('lote.show', {lote: full.id }) )  +'">' + data + '</a>';
                        }
                    },
                    {
                        targets: 4,
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