###
jQuery scrollUp
(c) 2012 Filip Stefansson, @filipstefansson
Adds an arrow that takes the user to the top of the screen again.
###

# IMPORTANT: This file should not be inlcuded. Check the /min/-folder
# for jquery.auto-placeholders.js. This is a CoffeeScript file.
# Visit http://coffescript.org for more information.

$.extend

	scrollUp: (options)->
		## Create some defaults, extending them with any options that were provided
		settings = $.extend(
			'location': 'right'
			'image_src': 'img/arrow_up.png'
			'wait': 200
			'time': 300
			'anchor': '#'
		, options)


		## Create the up link
		if settings.location is 'right'
			xPos = 'right: 20px;'
		else 
			xPos = 'left: 10px;'

		style = 'display: none; opacity: .9; filter:alpha(opacity=90); position: fixed; bottom: 10px; ' + xPos

		element = '<a href="' + settings.anchor + '" style="' + style + '" id="scrollUp_arrow"><img src="' + settings.image_src + '" alt=""/></a>'

		## Add it to the DOM
		$('body').append element

		## Check users scroll pos, and only show the up link if the user has scrolled down a bit.

		$(document).scroll ->
			if $(document).scrollTop() >= settings.wait
				$('#scrollUp_arrow').stop(true, true).fadeIn(400)
			else
				$('#scrollUp_arrow').fadeOut(200)

		

		# On click, send the user to the element they want
		$('#scrollUp_arrow').click ->
			$('html, body').animate(
				scrollTop: 0
			, 
				settings.time
			)
			return false