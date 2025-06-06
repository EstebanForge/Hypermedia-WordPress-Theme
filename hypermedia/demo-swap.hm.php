<?php
// No direct access.
defined('ABSPATH') || exit('Direct access not allowed.');

// Secure it.
if (!hmapi_validate_request()) {
    hmapi_die('Nonce verification failed.');
}

// Action = demo
if (!isset($hmvals['action']) || $hmvals['action'] != 'demo') {
    hmapi_die('Invalid action.');
}

// Loaded file
$hmapi_template = '/' . wp_get_theme()->get_stylesheet() . strstr(__FILE__, '/' . HMAPI_TEMPLATE_DIR);
?>

<article>
	<header>
		<h5>Hello HTMX!</h5>
	</header>
	<p>Non consequat aliquip, lorem duis exercitation. Laborum ad culpa voluptate duis occaecat dolore.</p>
	<footer>
		End of template
	</footer>
</article>

<hr>

<p>Template loaded from <code><?php echo $hmapi_template; ?></code>
</p>

<p>Received params ($hmvals):</p>

<pre>
<?php var_dump($hmvals); ?>
</pre>
