<!-- Here is a option of days -->
<label for="jour">Jour :</label>
<select id="jour" name="jour">
  <?php
  for ($jour = 1; $jour <= 31; $jour++) {
    echo "<option value=\"$jour\">$jour</option>";
  }
  ?>
</select>

<!-- Here is the option of Mounth -->
<label for="mois">Mois :</label>
<select id="mois" name="mois">
  <?php
  $mois = array(
    "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
    "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
  );
  foreach ($mois as $key => $value) {
    echo "<option value=\"$key\">$value</option>";
  }
  ?>
</select>

