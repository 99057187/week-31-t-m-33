<div class="alert alert-dark" role="alert">
    <strong>delete</strong> weet je zeker dat je dit persoon wilt verwijderen
</div>
<form  action="<?php echo URL ?>employee/destroy/<?php echo $id ?>">
<button class="btn btn-dark" type="submit" action="<?php echo URL ?>employee/destroy">Verwijderen</button>
<a class="btn btn-dark" href="<?php echo URL ?>employee/index/">annuleren</a>
</form>


