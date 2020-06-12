            </ul>
		</nav>
	</div>
<div class="container">

    <br><h1>wie reserveerd er</h1>
    <br><br>
			<strong>selecteer uw Ruiter</strong>&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>date</strong>&nbsp;&nbsp;&nbsp;&nbsp;
			<strong>selecteer uw paard</strong><br><br>
            <form method="post" action="<?php echo URL ?>plannen/update/">
                <select name="Ruiter" class="custom-select">
                    <option selected>geen Ruiter</option>
                    <?php
                        foreach($Ruiters as $Ruiter){            
                    ?>
                    <option value="<?php echo $Ruiter["name"] ?>"><?php echo $Ruiter["name"] ?></option>
                    <?php
                        }
                    ?>
                </select>
                <select name="Horse" class="custom-select">
                    <option selected>geen paard</option>
                    <?php
                        foreach($Horses as $Horse){            
                    ?>
                    <option value="<?php echo $Horse["name"]?>"><?php echo $Horse["name"] ?></option>
                    <?php
                        }
                    ?>
                </select>
                <select name="begindate">
                    <option selected>vanaf</option>
                    <option value="10:00:00">10:00:00</option>
                    <option value="11:00:00">11:00:00</option>
                    <option value="12:00:00">12:00:00</option>
                    <option value="13:00:00">13:00:00</option>
                    <option value="14:00:00">14:00:00</option>
                    <option value="15:00:00">15:00:00</option>
                    <option value="16:00:00">16:00:00</option>
                    <option value="17:00:00">17:00:00</option>
                    <option value="18:00:00">18:00:00</option>
                    <option value="19:00:00">19:00:00</option>
                    <option value="20:00:00">20:00:00</option>
                    <option value="21:00:00">21:00:00</option>
                    <option value="22:00:00">22:00:00</option>
                </select>
                <select name="enddate">
                    <option selected>tot en met</option>
                    <option value="10:00:00">10:00:00</option>
                    <option value="11:00:00">11:00:00</option>
                    <option value="12:00:00">12:00:00</option>
                    <option value="13:00:00">13:00:00</option>
                    <option value="14:00:00">14:00:00</option>
                    <option value="15:00:00">15:00:00</option>
                    <option value="16:00:00">16:00:00</option>
                    <option value="17:00:00">17:00:00</option>
                    <option value="18:00:00">18:00:00</option>
                    <option value="19:00:00">19:00:00</option>
                    <option value="20:00:00">20:00:00</option>
                    <option value="21:00:00">21:00:00</option>
                    <option value="22:00:00">22:00:00</option>
                </select>
                <input type="submit">
            </form>

