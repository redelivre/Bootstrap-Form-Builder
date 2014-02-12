<?php
/*
	Plugin Name: Bootstrap-Form-Builder
	Plugin URI: https://github.com/redelivre/Bootstrap-Form-Builder
	Description: Bootstrap-Form-Builder.
	Version: 1.0.3
	Author: Rede Livre
	Author URI: http://redelivre.org.br
	
	Copyright (C) 2012 Adam Moore

	Permission is hereby granted, free of charge, to any person obtaining a copy of
	this software and associated documentation files (the "Software"), to deal in
	the Software without restriction, including without limitation the rights to
	use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
	of the Software, and to permit persons to whom the Software is furnished to do
	so, subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.
*/

define('BootstrapFormBuilder_URL', WP_PLUGIN_URL.'/Bootstrap-Form-Builder/');

class BootstrapFormBuilder
{
	function __construct()
	{
		add_action('init', array($this, 'init'));
		add_filter('query_vars', array($this, 'print_variables'));
		add_filter( 'template_include', array($this, 'custom_template'));
	}
	
	function init()
	{
		if($_REQUEST['BootstrapFormBuilder'] == 1)
		{
			add_action( 'wp_print_scripts', array($this, 'print_scripts') );
			add_action( 'wp_print_scripts', array($this, 'print_styles') );
			add_action( 'wp_head', array($this, 'header') );
		}
	}
	
	function print_styles()
	{
		wp_enqueue_style('bootstrap', BootstrapFormBuilder_URL.'assets/css/lib/bootstrap.min.css');
		wp_enqueue_style('bootstrap-responsive', BootstrapFormBuilder_URL.'assets/css/lib/bootstrap-responsive.min.css', array('bootstrap'));
		wp_enqueue_style('BootstrapFormBuilder', BootstrapFormBuilder_URL.'assets/css/custom.css', array('bootstrap-responsive'));
	}
	
	function print_scripts()
	{
		
	}

	function header()
	{
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		echo '
			<!--[if lt IE 9]>
    			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    		<![endif]-->
		';
	}
	
	function print_variables($public_query_vars) {
		$public_query_vars[] = 'BootstrapFormBuilder';
		return $public_query_vars;
	}
	
	function custom_template( $template )
	{
		if( isset( $_GET['BootstrapFormBuilder']) && 1 == $_GET['BootstrapFormBuilder'] )
			$template = plugin_dir_path( __FILE__ ) . 'BootstrapFormBuilder-custom-page.php';
	
		return $template;
	}
	
}

new BootstrapFormBuilder();

?>
