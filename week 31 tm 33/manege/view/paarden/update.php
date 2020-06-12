            </ul>
		</nav>
	</div>
    <?php
        foreach($Horse as $Horse){
    ?>
<h1 class="text-center">wijzig <?php echo $Horse["name"] ?></h1><br>
<form name="create" method="post" action="<?php echo URL ?>paarden/edit/<?php echo $Horse["id"] ?>">
	<input type="text" name="name" placeholder="name" value="<?php echo $Horse["name"] ?>" required></input>
	<input type="text" name="Ras" placeholder="Ras" value="<?php echo $Horse["Ras"] ?>" required></input><br><br>
    <input type="text" name="lengte" placeholder="lengte" value="<?php echo $Horse["lengte"] ?>" required></input>
        <select name="image" class="custom-select" id="inputGroupSelect01" style="width:184px;">
            <option value="<?php echo $Horse["image"] ?>" selected><?php echo $Horse["image"] ?></option>
            <option value="agitato.jpg">agitato.jpg</option>
            <option value="Conaire.jpg">Conaire.jpg</option>
            <option value="Furieux.jpg">Furieux.jpg</option>
            <option value="morgan.jpg">morgan.jpg</option>
            <option value="Quatro.jpg">Quatro.jpg</option>
            <option value="schimmel.jpg">schimmel.jpg</option>
            <option value="thunder.jpg">thunder.jpg</option>
            <option value="velvet.jpg">velvet.jpg</option>
            <option value="mekker.jpg">mekker.jpg</option>
            <option value="zorro.jpg">zorro.jpg</option>
            <option value="Soumra.jpg">Soumra.jpg</option>
            <option value="Dagur.jpg">Dagur.jpg</option>
            <option value="Fiero.jpg">Fiero.jpg</option>
            <option value="swen.jpg">swen.jpg</option>
        </select><br><br>
    <input type="text" name="schofthoogte" placeholder="schofthoogte" value="<?php echo $Horse["schofthoogte"] ?>"required></input>
    <input type="text" name="soort" placeholder="soort" value="<?php echo $Horse["soort"] ?>"required></input><br><br>
    <input type="text" name="age" placeholder="age" value="<?php echo $Horse["age"] ?>"required></input>
    <input type="text" name="description" placeholder="description" value="<?php echo $Horse["description"] ?>"required></input><br><br>
	<input type="submit">
</form>
        <?php } ?>