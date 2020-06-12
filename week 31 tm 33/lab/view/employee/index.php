	<h1>Overzicht van personen</h1>
	<table style="position: absolute; left:600px; top:185px;">
		<tr class="thead" >
			<td>naam</td>
			<td></td>
			<td>leeftijd</td>
			<td></td>
			<td></td>
		</tr>
		<?php 
		foreach($data["employees"] as $employee){
			$id=$employee["id"];
			$name=$employee["name"];
			$age=$employee["age"];
			?>
				<tr>
				<td><?php echo $name ?></td>
				<td></td>
				<td><?php echo $age ?></td>
				<td><a class="btn btn-dark" href="<?php echo URL ?>employee/update">Wijzigen</a></td>
				<td><a class="btn btn-dark" href="<?php echo URL ?>employee/delete/<?php echo $id ?>">Verwijderen</a></td>
				</tr>
		<?php
		}
		?>
</table>



