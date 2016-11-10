app || (app = {});

(function ($, window, document, undefined) {

    app.MainEspeciesView = Backbone.View.extend({

        el: '#especies-main',

        /**
        * Constructor Method
        */
        initialize : function() {

            this.$especiesSearchTable = this.$('#especies-search-table');

            this.$especiesSearchTable.DataTable({
                dom: "<'row'<'col-sm-4'B><'col-sm-4 text-center'l><'col-sm-4'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                processing: true,
                serverSide: true,
                language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('especies.index') ),
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'especie_nombre', name: 'especie_nombre' },
                    { data: 'especie_activa', name: 'especie_activa' }
                ],
                buttons: [
                    {
                        text: '<i class="fa fa-user-plus"></i> Nueva especie',
                        className: 'btn-sm',
                        action: function ( e, dt, node, config ) {
                            window.Misc.redirect( window.Misc.urlFull( Route.route('especies.create') ) )
                        }
                    }
                ],
                columnDefs: [
                    {
                        targets: 0,
                        width: "10%",
                        render: function( data, type, full, row ){
                            return '<a href="'+ window.Misc.urlFull( Route.route('especies.show', {especies: full.id }) )  +'">' + data + '</a>';
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