<p>
	<strong>Bonjour <?php echo $username; ?></strong>
</p>
<p>
	To Activate your profile clic here : 
</p>
<p>
	<?php echo $this->Html->link('Activate', $this->Html->url($link, true)); ?>
</p>
 