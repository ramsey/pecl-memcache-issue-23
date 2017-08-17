<?php
session_start();

$_SESSION['foo'] = 'bar';

?>

<h1>Hello!</h1>

<p>I just stored some data to the session.</p>

<p><a href="next.php">Go to the next page to read data from the session.</a></p>

<ul>
    <li><code>PHP version: <?php echo phpversion(); ?></code></li>
    <li><code>pecl/memcache version: <?php echo phpversion('memcache'); ?></code></li>
    <li><code>session.save_handler = <?php echo ini_get('session.save_handler'); ?></code></li>
    <li><code>session.save_path = <?php echo ini_get('session.save_path'); ?></code></li>
</ul>
