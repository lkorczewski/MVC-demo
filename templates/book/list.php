<?php $this->extend('index'); ?>
<?php $this->get_service('html')->add_style('table.css'); ?>
<table>
<?php foreach($this->books as $book): ?>
<tr><td><?= $book['author']; ?></td><td><?= $book['title']; ?></td></tr>
<?php endforeach; ?>
</table>
