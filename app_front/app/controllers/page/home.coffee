Controller = require 'core/controller'

class Home extends Controller

  el:
    navButton: '[data-toggle=animate-nav-button]'

  ##
  # Before
  #
  # Executed before the run action. You can use
  # @stop() in this method to stop the execution
  # of the controller
  #
  ##
  before: (params) ->


  ##
  # Run
  #
  # The main entry of the controller.
  # Your code start here
  #
  ##
  run: (params) ->


    @on 'mouseenter', @el.navButton, @hoverButton

  hoverButton: ->

    $(this).addClass('animated slideInUp')



module.exports = Home
