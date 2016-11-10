app || (app = {});

(function ($, window, document, undefined) {

    app.MainActividadView = Backbone.View.extend({

        el: '#actividad-main',

        /**
        * Constructor Method
        */
        initialize : function() {

            this.$actividadSearchTable = this.$('#actividad-search-table');

            this.$actividadSearchTable.DataTable({
                dom: "<'row'<'col-sm-4'B><'col-sm-4 text-center'l><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('actividad.index') ),
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'actividad_nombre', name: 'actividad_nombre' },
                    { data: 'actividad_activa', name: 'actividad_activa' }
                ],
                buttons: [
                    {
                        text: '<i class="fa fa-user-plus"></i> Nueva actividad',
                        className: 'btn-sm',
                        action: function ( e, dt, node, config ) {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('actividad.create') ) )
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: 0,
                        width: "10%",
                        render: function( data, type, full, row ){
                            return '<a href="'+ window.Misc.urlFull( Route.route('actividad.show', {actividad: full.id }) )  +'">' + data + '</a>';
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