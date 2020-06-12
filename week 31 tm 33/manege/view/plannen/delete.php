            </ul>
		</nav>
	</div>
<div class="alert alert-dark" role="alert">
    <strong>delete</strong> weet je zeker dat je deze reservering wilt verwijderen?
</div>
<form  action="<?php echo URL ?>plannen/destroy/<?php echo $id ?>">
<button class="btn btn-dark" type="submit">Verwijderen</button>
<a class="btn btn-dark" href="<?php echo URL ?>plannen/index">annuleren</a>
</form>