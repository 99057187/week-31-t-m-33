	<h1><?php $employee["name"]?> wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>employee/update">
	    <input type="hidden" name="id" value="<?=$employee["id"] ?>"/>
		<input type="text" name="name" placeholder="name" value="<?=$employee["name"] ?>"/>
		<input type="text" name="age" placeholder="age" value="<?=$employee["age"] ?>"/>
		<input type="submit">
	</form>
