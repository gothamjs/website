(function() {
  'use strict';

  var globals = typeof window === 'undefined' ? global : window;
  if (typeof globals.require === 'function') return;

  var modules = {};
  var cache = {};
  var has = ({}).hasOwnProperty;

  var aliases = {};

  var endsWith = function(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
  };

  var unalias = function(alias, loaderPath) {
    var start = 0;
    if (loaderPath) {
      if (loaderPath.indexOf('components/' === 0)) {
        start = 'components/'.length;
      }
      if (loaderPath.indexOf('/', start) > 0) {
        loaderPath = loaderPath.substring(start, loaderPath.indexOf('/', start));
      }
    }
    var result = aliases[alias + '/index.js'] || aliases[loaderPath + '/deps/' + alias + '/index.js'];
    if (result) {
      return 'components/' + result.substring(0, result.length - '.js'.length);
    }
    return alias;
  };

  var expand = (function() {
    var reg = /^\.\.?(\/|$)/;
    return function(root, name) {
      var results = [], parts, part;
      parts = (reg.test(name) ? root + '/' + name : name).split('/');
      for (var i = 0, length = parts.length; i < length; i++) {
        part = parts[i];
        if (part === '..') {
          results.pop();
        } else if (part !== '.' && part !== '') {
          results.push(part);
        }
      }
      return results.join('/');
    };
  })();
  var dirname = function(path) {
    return path.split('/').slice(0, -1).join('/');
  };

  var localRequire = function(path) {
    return function(name) {
      var absolute = expand(dirname(path), name);
      return globals.require(absolute, path);
    };
  };

  var initModule = function(name, definition) {
    var module = {id: name, exports: {}};
    cache[name] = module;
    definition(module.exports, localRequire(name), module);
    return module.exports;
  };

  var require = function(name, loaderPath) {
    var path = expand(name, '.');
    if (loaderPath == null) loaderPath = '/';
    path = unalias(name, loaderPath);

    if (has.call(cache, path)) return cache[path].exports;
    if (has.call(modules, path)) return initModule(path, modules[path]);

    var dirIndex = expand(path, './index');
    if (has.call(cache, dirIndex)) return cache[dirIndex].exports;
    if (has.call(modules, dirIndex)) return initModule(dirIndex, modules[dirIndex]);

    throw new Error('Cannot find module "' + name + '" from '+ '"' + loaderPath + '"');
  };

  require.alias = function(from, to) {
    aliases[to] = from;
  };

  require.register = require.define = function(bundle, fn) {
    if (typeof bundle === 'object') {
      for (var key in bundle) {
        if (has.call(bundle, key)) {
          modules[key] = bundle[key];
        }
      }
    } else {
      modules[bundle] = fn;
    }
  };

  require.list = function() {
    var result = [];
    for (var item in modules) {
      if (has.call(modules, item)) {
        result.push(item);
      }
    }
    return result;
  };

  require.brunch = true;
  globals.require = require;
})();
require.register("config", function(exports, require, module) {
module.exports = {
  app: {
    name: 'My Gotham Application',
    version: 0.1
  }
};
});

;require.register("controllers/page/home", function(exports, require, module) {
var Controller, Home,
  extend = function(child, parent) { for (var key in parent) { if (hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; },
  hasProp = {}.hasOwnProperty;

Controller = require('core/controller');

Home = (function(superClass) {
  extend(Home, superClass);

  function Home() {
    return Home.__super__.constructor.apply(this, arguments);
  }

  Home.prototype.el = {
    navButton: '[data-toggle=animate-nav-button]'
  };

  Home.prototype.before = function(params) {};

  Home.prototype.run = function(params) {
    return this.on('mouseenter', this.el.navButton, this.hoverButton);
  };

  Home.prototype.hoverButton = function() {
    return $(this).addClass('animated slideInUp');
  };

  return Home;

})(Controller);

module.exports = Home;
});

;require.register("helpers", function(exports, require, module) {
_.mixin({
  isBatman: function(name) {
    if (name.toLowerCase() === "batman") {
      return true;
    }
    return false;
  }
});
});

;require.register("initialize", function(exports, require, module) {
var Bootstrap;

Bootstrap = require('core/bootstrap');

$('#main').smoothState();

$(function() {
  var bootstrap;
  bootstrap = new Bootstrap({
    request: window.location.pathname
  });
  return bootstrap.run();
});
});

;require.register("routes", function(exports, require, module) {
module.exports = function(route) {
  return route.match('/', 'page.home');
};
});

;require.register("start", function(exports, require, module) {
$('[data-toggle=tooltip]').tooltipster();
});

;require.register("validators", function(exports, require, module) {
Validator.errors;

Validator.attributes;
});

;require.register("views/hello", function(exports, require, module) {
var __templateData = function (__obj) {
  if (!__obj) __obj = {};
  var __out = [], __capture = function(callback) {
    var out = __out, result;
    __out = [];
    callback.call(this);
    result = __out.join('');
    __out = out;
    return __safe(result);
  }, __sanitize = function(value) {
    if (value && value.ecoSafe) {
      return value;
    } else if (typeof value !== 'undefined' && value != null) {
      return __escape(value);
    } else {
      return '';
    }
  }, __safe, __objSafe = __obj.safe, __escape = __obj.escape;
  __safe = __obj.safe = function(value) {
    if (value && value.ecoSafe) {
      return value;
    } else {
      if (!(typeof value !== 'undefined' && value != null)) value = '';
      var result = new String(value);
      result.ecoSafe = true;
      return result;
    }
  };
  if (!__escape) {
    __escape = __obj.escape = function(value) {
      return ('' + value)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;');
    };
  }
  (function() {
    (function() {
      __out.push('<style>\n  @import url(http://fonts.googleapis.com/css?family=Lato:300,700);\n\n  body {\n    margin:0;\n    font-family:\'Lato\', sans-serif;\n    text-align:center;\n    color: #999;\n    height: 100%;\n    width: 100%;\n  }\n\n  .gothamjs-welcome {\n    position: relative;\n    margin-top: 15%;\n    text-align: center;\n  }\n\n  .gothamjs-welcome h3 {\n    font-size: 32px;\n    font-weight: 300;\n  }\n\n  .gothamjs-welcome h1 {\n    font-size: 60px;\n    font-weight: 700;\n  }\n\n  .gothamjs-welcome p {\n    font-size: 16px;\n    margin-bottom: 3em;\n  }\n\n  .gothamjs-welcome a {\n    background-color: #02baf2;\n    color: #fff;\n    border-color: #02baf2;\n    font-weight: 300;\n    cursor: pointer;\n    text-decoration: none !important;\n    -ms-touch-action: manipulation;\n    touch-action: manipulation;\n    cursor: pointer;\n    -webkit-user-select: none;\n    -moz-user-select: none;\n    -ms-user-select: none;\n    user-select: none;\n    border-radius: 5px;\n    border: 1px solid transparent;\n    font-size: 21px;\n    padding: 9.6px 19.2px;\n  }\n\n\n</style>\n\n<div class="gothamjs-welcome">\n\n  <h1>');
    
      __out.push(this.framework);
    
      __out.push('</h1>\n  <h3>You just loaded Gotham, it\'s an impressive start.</h3>\n  <p>I\'m executed by `start.coffee` and you can find me in `views/hello.hbs`</p>\n  <a>Documentation</a>\n</div>\n');
    
    }).call(this);
    
  }).call(__obj);
  __obj.safe = __objSafe, __obj.escape = __escape;
  return __out.join('');
};
if (typeof define === 'function' && define.amd) {
  define([], function() {
    return __templateData;
  });
} else if (typeof module === 'object' && module && module.exports) {
  module.exports = __templateData;
} else {
  __templateData;
}
});

;require.register("core/bootstrap", function(exports, require, module) {
var Bootstrap;

Bootstrap = (function() {
  function Bootstrap(options) {
    this.options = options;
  }

  Bootstrap.prototype.run = function() {
    var controller, params, path, response, router;
    require('helpers');
    require('start');
    router = new Router(this.options.request);
    require('routes')(router);
    router.run();
    if (router.passes()) {
      response = router.response();
      params = response.params;
      if (_.isFunction(response.result)) {
        return response.result(params);
      } else {
        path = this._formatPath(response.result);
        controller = require('controllers/' + path);
        controller = new controller();
        if (controller['before'] != null) {
          controller.before(params);
        }
        if (!controller._gothamStop) {
          return controller.run(params);
        }
      }
    }
  };

  Bootstrap.prototype._formatPath = function(str) {
    return str.split('.').join('/').split('#').join('/');
  };

  return Bootstrap;

})();

module.exports = Bootstrap;
});

;require.register("core/controller", function(exports, require, module) {
var Controller;

Controller = (function() {
  Controller.prototype._gothamStop = false;

  function Controller() {}

  Controller.prototype.stop = function() {
    return this._gothamStop = true;
  };

  Controller.prototype.log = function(value) {
    return console.log(value);
  };

  Controller.prototype.on = function(trigger, selector, handler) {
    return $(selector).on(trigger, handler);
  };

  Controller.prototype.off = function(trigger, selector, handler) {
    return $(selector).off(trigger, handler);
  };

  Controller.prototype.delayed = function(trigger, selector, handler) {
    return $(document).on(trigger, selector, handler);
  };

  return Controller;

})();

module.exports = Controller;
});

;require.register("core/view", function(exports, require, module) {
var View;

View = (function() {
  function View() {}

  View.prototype.render = function(template, datas) {
    template = template.split('.').join('/');
    template = require('views/' + template);
    return template(datas);
  };

  return View;

})();

module.exports = View;
});

;
//# sourceMappingURL=app.js.map