<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p style="position: relative; bottom: 0px;"><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
