        </ul>
	</nav>
</div>
<br><br>
<div class="card" style="width:80%; height:700px; position: relative; left:10%;">
    <div class="card-body"  style="position: absolute; left:40px;">
    <?php foreach($Ruiter as $Ruiter){ ?>
        <br>
        <img class="card-img-top img-fluid" src="<?php echo URL ?>public/img/geen_afbeelding.jpg" style="width:300px;"><br><br>
        <h4 class="card-title"><?php echo $Ruiter["name"]; ?></h4>
		<p class="card-text">adres: <?php echo $Ruiter["adres"]; ?></p>
		<p class="card-text">tel-nummer: <?php echo $Ruiter["telNummer"]; ?></p>
    </div>
   <?php }?>
   <?php foreach($Horse as $Horse){ ?>
    <div class="card-body"  style="position: absolute; left:900px;">
        <img class="card-img-top img-fluid" src="<?php echo URL ?>public/img/<?php echo $Horse['image']?>" style="width:300px;"><br>
        <h4 class="card-title"><?php echo $Horse["name"]; ?></h4>
		<p class="card-text">Ras: <?php echo $Horse["Ras"]; ?></p>
		<p class="card-text">lengte: <?php echo $Horse["lengte"]; ?></p>
		<p class="card-text">schofthoogte: <?php echo $Horse["schofthoogte"]; ?></p>
		<p class="card-text">soort: <?php echo $Horse["soort"]; ?></p>
		<p class="card-text">leeftijd: <?php echo $Horse["age"]; ?></p>
        <p class="card-text">beschrijving:<br><?php echo $Horse["description"];?></p>
    </div>
   <?php } ?>
</div><br><br><br><br>
