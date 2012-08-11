jQuery ScrollUp
================

A small jQuery plugin that adds "to the top"-link in the bottom of the screen.

The plugin adds a small arrow to the bottom of the screen, and when the user clicks it the page automatically scrolls the user to the top of the screen. With a smooth animaton ofcourse. The arrow is only visible when the user has scrolled down the page, for maximum user experience.

![jQuery ScrollUp in action](http://filipstefansson.github.com/jquery-scroll-up/example.png)


## Features
* Only 4k
* Smooth scrolling
* Only shown if the user has scrolled.

## Usage
Import jquery.scroll-up.js

```<script type="text/javascript" src="min/jquery.scroll-up.js"></script>```

Add this code to initialize the plugin:

```javascript
$.scrollUp()
```

Avaliable options:
```
location - Should be 'right' or 'left'.
image_src: A string with the path to your image. Default: 'img/arrow_up.png'.
wait: An integer with the amout of pixel the user should scroll before the link is displayed.
time: An integer with the amount of milliseconds the smooth scroll animation should last.

```

## Example

```
<script type="text/javascript" src="min/jquery.scroll-up.js"></script>
<script>
$.scrollUp({
	'location': 'right'
	'image_src': 'img/arrow_up.png'
	'wait': 200
	'time': 300
})
</script>
```

## Dependencies

* Tested with jQuery 1.7.2, but probably works with lower versions.