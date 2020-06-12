            </ul>
		</nav>
	</div>
<h1 class="text-center">Voeg een paard toe</h1><br>
<form name="create" method="post" action="<?php echo URL ?>paarden/store">
	<input type="text" name="name" placeholder="name" required></input>
	<input type="text" name="Ras" placeholder="Ras" required></input><br><br>
    <input type="text" name="lengte" placeholder="lengte" required></input>
        <select name="image" class="custom-select" id="inputGroupSelect01" style="width:184px;">
            <option value="geen_afbeelding.jpg" selected>geen afbeelding</option>
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
    <input type="text" name="schofthoogte" placeholder="schofthoogte" required></input>
    <input type="text" name="soort" placeholder="soort" required></input><br><br>
    <input type="text" name="age" placeholder="age" required></input>
    <input type="text" name="description" placeholder="description" required></input><br><br>
	<input type="submit">
</form>