                <li class="navbar-brand"><a href="<?= URL ?>plannen/create"><i class="fas fa-plus"></i></a></li>
            </ul>
		</nav>
	</div>
    <br><br>
    <?php
    foreach($Plannen as $plan){
    ?>        
        <pre>
            <?php
                $eindtijd=$plan["enddate"];
                $begintijd=$plan["begindate"];
                $antwoord=$eindtijd-$begintijd;
                $totaal=55*$antwoord;
            ?>
        </pre>
    <div class="card d-table" style="width:80%; position: relative; left:10%;">
        <div class="card-body d-inline-flex">
            <h5 class="card-title"><?php echo $plan["Ruiter"] ?></h5>
        </div>
        <h5 class="d-inline-flex">heeft</h5>
        <div class="card-body d-inline-flex">
            <h5 class="card-title"><?php echo $plan["Horse"] ?></h5>
        </div>
        <h5 class="d-inline-flex">gereserveerd vanaf</h5>
        <div class="card-body d-inline-flex">
            <h5 class="card-title"><?php echo $plan["begindate"] ?></h5>
        </div>
        <h5 class="d-inline-flex">gereserveerd tot</h5>
        <div class="card-body d-inline-flex">
            <h5 class="card-title"><?php echo $plan["enddate"] ?></h5>
        </div>
        <br>
        <div class="card-body d-inline-flex">
            <h5 class="card-text">dat is een totaal van <?php echo $antwoord ?> uur paard rijden.</h5>
        </div>
        <br>
        <div class="card-body d-inline-flex">
            <h5 class="card-text">paard rijden kost 55 euro per uur, dus de rekening bedraagd</h5>
        </div>
        <br>
        <div class="card-body d-inline-flex">
            <h5 class="card-text">55 X <?php echo $antwoord ?> = <?php echo $totaal ?> euro</h5>
        </div><br>
        <div class="card-body d-inline-flex">
        <a class="btn btn-dark" href="<?php echo URL ?>plannen/delete/<?php echo $plan["id"] ?>">verwijder</a>&nbsp;&nbsp;&nbsp;
        <a class="btn btn-dark" href="<?php echo URL ?>plannen/update/<?php echo $plan["id"] ?>">wijzig</a>&nbsp;&nbsp;&nbsp;
        <a class="btn btn-dark" href="<?php echo URL ?>plannen/detail/<?php echo $plan["id"] ?>">bekijken</a>
        </div><br>
    </div><br><br>
    <?php
        }
     ?>
     <br><br>