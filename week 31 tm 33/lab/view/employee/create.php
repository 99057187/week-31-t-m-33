<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="<?php echo URL ?>employee/store">
	<input type="text" name="name" placeholder="name" required></input>
	<input type="number" name="age" placeholder="age" required></input>
	<input type="submit">
</form>