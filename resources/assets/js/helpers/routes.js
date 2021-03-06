(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"login","name":"login","action":"App\Http\Controllers\Auth\AuthController@getLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"logout","name":"logout","action":"App\Http\Controllers\Auth\AuthController@getLogout"},{"host":null,"methods":["POST"],"uri":"login","name":"auth.login","action":"App\Http\Controllers\Auth\AuthController@postLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":"dashboard","action":"App\Http\Controllers\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"especies","name":"especies.index","action":"App\Http\Controllers\EspeciesController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"especies\/create","name":"especies.create","action":"App\Http\Controllers\EspeciesController@create"},{"host":null,"methods":["POST"],"uri":"especies","name":"especies.store","action":"App\Http\Controllers\EspeciesController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"especies\/{especies}","name":"especies.show","action":"App\Http\Controllers\EspeciesController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"especies\/{especies}\/edit","name":"especies.edit","action":"App\Http\Controllers\EspeciesController@edit"},{"host":null,"methods":["PUT"],"uri":"especies\/{especies}","name":"especies.update","action":"App\Http\Controllers\EspeciesController@update"},{"host":null,"methods":["PATCH"],"uri":"especies\/{especies}","name":null,"action":"App\Http\Controllers\EspeciesController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"razas","name":"razas.index","action":"App\Http\Controllers\RazasController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"razas\/create","name":"razas.create","action":"App\Http\Controllers\RazasController@create"},{"host":null,"methods":["POST"],"uri":"razas","name":"razas.store","action":"App\Http\Controllers\RazasController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"razas\/{razas}","name":"razas.show","action":"App\Http\Controllers\RazasController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"razas\/{razas}\/edit","name":"razas.edit","action":"App\Http\Controllers\RazasController@edit"},{"host":null,"methods":["PUT"],"uri":"razas\/{razas}","name":"razas.update","action":"App\Http\Controllers\RazasController@update"},{"host":null,"methods":["PATCH"],"uri":"razas\/{razas}","name":null,"action":"App\Http\Controllers\RazasController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"hato","name":"hato.index","action":"App\Http\Controllers\HatoController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"hato\/create","name":"hato.create","action":"App\Http\Controllers\HatoController@create"},{"host":null,"methods":["POST"],"uri":"hato","name":"hato.store","action":"App\Http\Controllers\HatoController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"hato\/{hato}","name":"hato.show","action":"App\Http\Controllers\HatoController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"hato\/{hato}\/edit","name":"hato.edit","action":"App\Http\Controllers\HatoController@edit"},{"host":null,"methods":["PUT"],"uri":"hato\/{hato}","name":"hato.update","action":"App\Http\Controllers\HatoController@update"},{"host":null,"methods":["PATCH"],"uri":"hato\/{hato}","name":null,"action":"App\Http\Controllers\HatoController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"lote","name":"lote.index","action":"App\Http\Controllers\LoteController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"lote\/create","name":"lote.create","action":"App\Http\Controllers\LoteController@create"},{"host":null,"methods":["POST"],"uri":"lote","name":"lote.store","action":"App\Http\Controllers\LoteController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"lote\/{lote}","name":"lote.show","action":"App\Http\Controllers\LoteController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"lote\/{lote}\/edit","name":"lote.edit","action":"App\Http\Controllers\LoteController@edit"},{"host":null,"methods":["PUT"],"uri":"lote\/{lote}","name":"lote.update","action":"App\Http\Controllers\LoteController@update"},{"host":null,"methods":["PATCH"],"uri":"lote\/{lote}","name":null,"action":"App\Http\Controllers\LoteController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"animal","name":"animal.index","action":"App\Http\Controllers\AnimalController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"animal\/create","name":"animal.create","action":"App\Http\Controllers\AnimalController@create"},{"host":null,"methods":["POST"],"uri":"animal","name":"animal.store","action":"App\Http\Controllers\AnimalController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"animal\/{animal}","name":"animal.show","action":"App\Http\Controllers\AnimalController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"animal\/{animal}\/edit","name":"animal.edit","action":"App\Http\Controllers\AnimalController@edit"},{"host":null,"methods":["PUT"],"uri":"animal\/{animal}","name":"animal.update","action":"App\Http\Controllers\AnimalController@update"},{"host":null,"methods":["PATCH"],"uri":"animal\/{animal}","name":null,"action":"App\Http\Controllers\AnimalController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"actividad","name":"actividad.index","action":"App\Http\Controllers\ActividadController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"actividad\/create","name":"actividad.create","action":"App\Http\Controllers\ActividadController@create"},{"host":null,"methods":["POST"],"uri":"actividad","name":"actividad.store","action":"App\Http\Controllers\ActividadController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"actividad\/{actividad}","name":"actividad.show","action":"App\Http\Controllers\ActividadController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"actividad\/{actividad}\/edit","name":"actividad.edit","action":"App\Http\Controllers\ActividadController@edit"},{"host":null,"methods":["PUT"],"uri":"actividad\/{actividad}","name":"actividad.update","action":"App\Http\Controllers\ActividadController@update"},{"host":null,"methods":["PATCH"],"uri":"actividad\/{actividad}","name":null,"action":"App\Http\Controllers\ActividadController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"sanidad","name":"sanidad.index","action":"App\Http\Controllers\SanidadController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"sanidad\/create","name":"sanidad.create","action":"App\Http\Controllers\SanidadController@create"},{"host":null,"methods":["POST"],"uri":"sanidad","name":"sanidad.store","action":"App\Http\Controllers\SanidadController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"sanidad\/{sanidad}","name":"sanidad.show","action":"App\Http\Controllers\SanidadController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"sanidad\/{sanidad}\/edit","name":"sanidad.edit","action":"App\Http\Controllers\SanidadController@edit"},{"host":null,"methods":["PUT"],"uri":"sanidad\/{sanidad}","name":"sanidad.update","action":"App\Http\Controllers\SanidadController@update"},{"host":null,"methods":["PATCH"],"uri":"sanidad\/{sanidad}","name":null,"action":"App\Http\Controllers\SanidadController@update"},{"host":null,"methods":["GET","HEAD"],"uri":"peso","name":"peso.index","action":"App\Http\Controllers\PesoController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"peso\/create","name":"peso.create","action":"App\Http\Controllers\PesoController@create"},{"host":null,"methods":["POST"],"uri":"peso","name":"peso.store","action":"App\Http\Controllers\PesoController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"peso\/{peso}","name":"peso.show","action":"App\Http\Controllers\PesoController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"peso\/{peso}\/edit","name":"peso.edit","action":"App\Http\Controllers\PesoController@edit"},{"host":null,"methods":["PUT"],"uri":"peso\/{peso}","name":"peso.update","action":"App\Http\Controllers\PesoController@update"},{"host":null,"methods":["PATCH"],"uri":"peso\/{peso}","name":null,"action":"App\Http\Controllers\PesoController@update"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                return this.getCorrectUrl(uri + qs);
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if(!this.absolute)
                    return url;

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // Route.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // Route.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // Route.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // Route.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // Route.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // Route.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.Route = laroute;
    }

}).call(this);

