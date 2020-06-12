            </ul>
		</nav>
	</div>
<h1>Persoon wijzigen</h1>
<br>
<?php foreach($Ruiters as $Ruiter){
    ?>
    <form name="update" method="post" action="<?php echo URL?>home/edit/<?php echo $Ruiter["id"] ?>"><br><br>
	<input type="text" name="name" value="<?php echo $Ruiter["name"]?>"></input><br><br>
	<input type="text" name="adres" value="<?php echo $Ruiter["adres"]?>"></input><br><br>
    <input type="text" name="telNummer" value="<?php echo $Ruiter["telNummer"]?>"></input><br><br>
    <input type="submit">
    </form>
<?php } ?>