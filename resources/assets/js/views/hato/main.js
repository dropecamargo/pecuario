app || (app = {});

(function($, window, document, undefined){
 app.MainHatoView = Backbone.View.extend({

        el: '#hato-main',

        initialize : function() {

            this.$hatoSearchTable = this.$('#hato-search-table');

            this.$hatoSearchTable.DataTable({
                dom: "<'row'<'col-sm-4'B><'col-sm-4 text-center'l><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('hato.index') ),
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'hato_nombre', name: 'hato_nombre' },
                    { data: 'hato_descripcion', name: 'hato_descripcion' },
                    { data: 'hato_activo', name: 'hato_activo'}
                ],
                buttons: [
                    {
                        text: '<i class="fa fa-user-plus"></i> Nuevo Hato',
                        className: 'btn-sm',
                        action: function ( e, dt, node, config ) {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('hato.create') ) )
                        }
                    }
                ],
                columnDefs: [
                {
                        targets: 0,
                        width: "10%",
                        render: function( data, type, full, row ){
                            return '<a href="'+ window.Misc.urlFull( Route.route('hato.show', {hato: full.id }) )  +'">' + data + '</a>';
                        }
                    },
                    {
                        targets: 3,
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