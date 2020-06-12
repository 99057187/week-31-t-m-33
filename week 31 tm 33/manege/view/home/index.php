                <li class="navbar-brand"><a href="<?= URL ?>home/create"><i class="fas fa-user-plus"></i></a></li>
            </ul>
		</nav>
	</div>
<div class="container">

    <br><h1>alle Ruiters</h1>
    
	<table style="position: absolute; left:500px; top:185px;">
		<tr class="thead" >
			<td>id</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>name</td>
			<td>&nbsp;&nbsp;&nbsp;</td>
			<td>adres</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
			<td>tel-nummer</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<?php
			foreach($Ruiters as $Ruiter){
		?>
		<tr>
			<td><?php echo $Ruiter["id"] ?></td>
			<td></td>
			<td><?php echo $Ruiter["name"] ?></td>
            <td></td>
			<td><?php echo $Ruiter["adres"] ?></td>
            <td></td>
			<td><?php echo $Ruiter["telNummer"] ?></td>
            <td>&nbsp;&nbsp;&nbsp;</td>
			<td><a class="btn btn-dark" href="<?php echo URL ?>home/update/<?php echo $Ruiter["id"] ?>">Wijzigen</a></td>
			<td><a class="btn btn-dark" href="<?php echo URL ?>home/delete/<?php echo $Ruiter["id"] ?>">Verwijderen</a></td>
		</tr>
		<?php
            }
		?>


