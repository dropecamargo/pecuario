app || (app = {});

(function($, window, document, undefined){
 app.MainRazasView = Backbone.View.extend({

        el: '#razas-main',

        initialize : function() {

            this.$razasSearchTable = this.$('#razas-search-table');

            this.$razasSearchTable.DataTable({
                dom: "<'row'<'col-sm-4'B><'col-sm-4 text-center'l><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('razas.index') ),
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'raza_nombre', name: 'raza_nombre' },
                    { data: 'raza_activa', name: 'raza_activa' }
                ],
                buttons: [
                    {
                        text: '<i class="fa fa-user-plus"></i> Nueva raza',
                        className: 'btn-sm',
                        action: function ( e, dt, node, config ) {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('razas.create') ) )
                        }
                    }
                ],
                columnDefs: [
                {
                        targets: 0,
                        width: "10%",
                        render: function( data, type, full, row ){
                            return '<a href="'+ window.Misc.urlFull( Route.route('razas.show', {razas: full.id }) )  +'">' + data + '</a>';
                        }
                    },
                    {
                        targets: 2,
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