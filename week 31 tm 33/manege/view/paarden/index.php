				<li class="navbar-brand"><a href="<?= URL ?>paarden/create"><i class="fas fa-plus"></i></a></li>
            </ul>
		</nav>
	</div>
<div class="container">

    <br><h1>alle paarden</h1>
		<?php
			foreach($Horses as $Horse){
		?>
			<div class="card" style="width:10s00px;">
            	<img class="card-img-top img-fluid" src="<?php echo URL ?>public/img/<?php echo $Horse['image']?>" style="width:300px; position: relative; left:400px; top:30px;"><br>
            	<div class="card-body">
            	    <h4 class="card-title"><?php echo $Horse["name"]; ?></h4>
					<p class="card-text">Ras: <?php echo $Horse["Ras"]; ?></p>
					<p class="card-text">lengte: <?php echo $Horse["lengte"]; ?></p>
					<p class="card-text">schofthoogte: <?php echo $Horse["schofthoogte"]; ?></p>
					<p class="card-text">soort: <?php echo $Horse["soort"]; ?></p>
					<p class="card-text">leeftijd: <?php echo $Horse["age"]; ?></p>
            	    <p class="card-text">beschrijving:<br><?php echo $Horse["description"];?></p>
					<a class="btn btn-dark" href="<?php echo URL ?>paarden/update/<?php echo $Horse["id"] ?>">Wijzigen</a></td>
            	    <a class="btn btn-dark" href="<?php echo URL ?>paarden/delete/<?php echo $Horse["id"] ?>">Verwijderen</a>
					<a class="btn btn-dark" href="<?php echo URL ?>plannen/create">reserveren</a>
            	</div>
        	</div>
			<br><br>
		<?php
			}
		?>
		<br><br><br><br>

