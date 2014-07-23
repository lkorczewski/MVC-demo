<!DOCTYPE html>
<head>
<title><?php echo $this->get('title'); ?></title>
<meta charset="UTF-8" />
<?php $this->get_service('html')->print_styles(); ?>
<?php $this->get_service('html')->print_scripts(); ?>
</head>
<body>
<?php echo $this->get('_content'); ?>
</body>
