<?php include 'view/header.php' ?>
<main>
    <article>
        <h3 id="top">Calculator</h3>
        <form action="calc_controller.php" method="post">
            <input type="hidden" name="action" value="roll_calc">
            <fieldset>
                <legend>Character Burden</legend>
                <label for="weapon">Weapon:</label>
                <select name="weapon" id="weapon">
                    <?php foreach ($weapons as $weapon) : ?>
                        <?php if ($weapon['name'] == $_SESSION['weapon']) {$selected = 'selected';} else {$selected = '';} ?>
                        <option value="<?php echo $weapon['weaponID']?>" <?php echo $selected ?>><?php echo $weapon['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <label for="helmet">Helmet:</label>
                <select name="helmet" id="helmet">
                    <?php foreach ($armour['helms'] as $helmet) : ?>
                        <?php if ($helmet['name'] == $_SESSION['helmet']) {$selected = 'selected';} else {$selected = '';} ?>
                        <option value="<?php echo $helmet['armourID']?>" <?php echo $selected ?>><?php echo $helmet['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <label for="chest">Chest:</label>
                <select name="chest" id="chest">
                    <?php foreach ($armour['chests'] as $chest) : ?>
                        <?php if ($chest['name'] == $_SESSION['chest']) {$selected = 'selected';} else {$selected = '';} ?>
                        <option value="<?php echo $chest['armourID']?>" <?php echo $selected ?>><?php echo $chest['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <label for="gauntlets">Gauntlets:</label>
                <select name="gauntlets" id="gauntlets">
                    <?php foreach ($armour['gauntlets'] as $gauntlets) : ?>
                        <?php if ($gauntlets['name'] == $_SESSION['gauntlets']) {$selected = 'selected';} else {$selected = '';} ?>
                        <option value="<?php echo $gauntlets['armourID']?>" <?php echo $selected ?>><?php echo $gauntlets['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <label for="leggings">Leggings:</label>
                <select name="leggings" id="leggings">
                    <?php foreach ($armour['leggings'] as $leggings) : ?>
                        <?php if ($leggings['name'] == $_SESSION['leggings']) {$selected = 'selected';} else {$selected = '';} ?>
                        <option value="<?php echo $leggings['armourID']?>" <?php echo $selected ?>><?php echo $leggings['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <label for="endurance">Endurance Level:</label>
                <input type="text" name="endurance" id="endurance" value="<?php echo $endurance ?>">
                <br>
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </article>
    <section>
        <h3 id="top">Results</h3>
        <p><?php echo $roll ?></p>
    </section>
    <aside>
        <h3 id="top">Helpful Resources</h3>
        <ul>
            <li><a href="https://darksouls.wiki.fextralife.com/Dark+Souls+Wiki">The Dark Souls Wiki</a></li>
            <li><a href="https://www.youtube.com/@VaatiVidya/featured">VaatiVidya's YouTube Channel</a></li>
            <li><a href="https://discord.com/invite/darksouls3">Join the Dark Souls Discord</a></li>
        </ul>
    </aside>
</main>
<?php include 'view/footer.php' ?>