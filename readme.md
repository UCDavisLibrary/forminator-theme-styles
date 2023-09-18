# Forminator Theme Styles

Style shims to make the Wordpress forms plugin, Forminator, consistent with the UC Davis brand theme.

## How to Use

### Directly Include
1. Copy `UcdlibForminatorStyles.php` and `dist/css` into your Docker image.
2. Inherit the `src/UcdlibForminatorStyles` class - make sure to call `parent::construct()`.
3. Enqueue the css script using [wp_enqueue_style](https://developer.wordpress.org/reference/functions/wp_enqueue_style/)


### Install as plugin
1. Download and place in your plugins directory
