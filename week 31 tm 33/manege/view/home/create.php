            </ul>
		</nav>
	</div>
<h1 class="text-center">Voeg een Ruiter toe</h1><br>
<form name="create" method="post" action="<?php echo URL ?>home/store">
	<input type="text" name="name" placeholder="name" required></input>
	<input type="text" name="adres" placeholder="adres" required></input>
    <input type="text" name="telNummer" placeholder="tel-nummer" required></input>
	<input type="submit">
</form>