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
				processing: true,
                serverSide: true,
            	language: window.Misc.dataTableES(),
                ajax: window.Misc.urlFull( Route.route('especies.index') ),
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'especie_nombre', name: 'especie_nombre'}
                ]
			});
        }
    });

})(jQuery, this, this.document);