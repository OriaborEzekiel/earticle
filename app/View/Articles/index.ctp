<?php
	if($articles){


?>
<table class="table table-striped">
	<thead>
                  <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Action</th>
                   
                  </tr>
                </thead>
	<?php
	foreach($articles as $article): ?>
                
                <tbody>
                  <tr>
                    <td>
                    	<?php echo $article["Article"]["id"];  ?>
                    </td>
                    <td>
                    	<?php echo $this->Html->link($article["Article"]["title"], array("controller" => "articles", "action" => "view", $article["Article"]["id"] ));   ?>
                    </td>
                    <td>
                    	<?php echo $this->Html->link("Edit", array("controller" => "articles", "action" => "edit", $article["Article"]["id"])) ; ?>

                    	<?php echo  "| " .  $this->Form->postLink("Delete", array("controller" => "articles", "action" => "delete", $article["Article"]["id"]), array("confirm" => "Are U sure ?")) ; ?>
                    </td>
                    <td>
                    	<?php

                    		//echo $this->Auth->user("id");
                    	?>
                    </td>
                  </tr>

                </tbody>

<?php endforeach; ?>
</table>
<?php
}
else{

	echo "<h2> <center> You have not post any article yet  </center> </h2>";
}

?>

