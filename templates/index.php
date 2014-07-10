<!DOCTYPE html>
<head>
<title><?php echo $this['title'];?></title>
<meta charset="UTF-8" />
<?php $this->get_styles(); ?>
<?php $this->get_scripts(); ?>
</head>
<body>
<?php $this->render_content(); ?>
</body>