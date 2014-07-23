<?php $this->extend( __DIR__ . '../index'); ?>
<table>
<tr><td>author:</td><td><?php echo $this->author; ?></td></tr>
<tr><td>title:</td><td><?php echo $this->get('title'); ?></td></tr>
</table>
<?php
	$router = $this->application->get('router');
	$next_link = $router->make_link('book', 'show', [$router->get_parameter(0) + 1]);
?>
<div><a href="<?php echo $next_link; ?>">next</a></div>
