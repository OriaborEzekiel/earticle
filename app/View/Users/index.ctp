<?php //echo $AuthUser; ?>
<form class="navbar-form" role="search" action="/users/index" method="post">
	<div class="input-group add-on">
		<input type="text" name="search" class="form-control" id="srch-term" placeholder="Search...">
	<!--	<button class="btn btn-primary" type="submit" name=""><i class="glyphicon glyphicon-search"></i></button> -->
	</div>


	
</form>
<?php
	if($users){

	
?>

<table class="table">
	<tr>
		<th><?php echo $this->paginator->sort("id", "Id");?></th>
		<th><?php echo $this->paginator->sort("username", "Username"); ?></th>
		<th> <?php echo $this->paginator->sort("role", "Role"); ?></th>
		<th>
			Action
		</th>
	</tr>

	<?php
		foreach($users as $user):
	?>
	<tr>
		<td>
			<?php echo $user["User"]["id"]; ?>
		</td>
		<td>
			<?php echo $this->Html->link($user["User"]["username"], array("controller" => "users", "action" => "view", $user["User"]["id"])); ?>
		</td>
		<td>
			<?php echo $user["User"]["role"]; ?>
		</td>

		<td>
			<?php
				echo $this->Html->link("Edit", array("controller" => "users", "action" => "edit", $user["User"]["id"]));

			?>
			 |
			<?php
				echo $this->Html->link("Delete", array("controller" => "users", "action" => "delete", $user["User"]["id"]));

			?>

		<?php  endforeach;?>
		</td>
	</tr>
</table>

<?php
//pagination section

echo "<div class='paging'>";
echo $this->paginator->first("First");

if($this->paginator->hasPrev()){

	echo $this->paginator->prev("Prev");

}

echo $this->paginator->numbers(array("modulus" => 2));

if($this->paginator->hasNext()){

	echo $this->paginator->next("Next");

}
echo $this->paginator->last("Last");

echo "</div>";

}else{

	echo "//";
}

?>
<?php
	if($search){



	

?>
<table class="table">
	<tr>
		<th>
			Username
		</th>
	</tr>
	<tr>
		<tbody>
			<td>
				<?php 

					foreach($search as $ser):

				 echo  $this->Html->link($ser["User"]["username"], array("controller" => "users", "action" => "view", $ser["User"]["id"])); 

				 	endforeach;

				 ?>
			</td>
		</tbody>
	</tr>
	
</table>
<?php

}else{

	echo "Sorry, no user like that in our database";
}
?>
<style type="text/css">
	.navbar-form{

		padding: 0px;
    	margin: 0 0 0 10px;
    	margin-top: 15px;

	}

</style>
