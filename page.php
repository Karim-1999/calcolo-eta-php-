<?php
if(isset($_POST['submit'])) {
  $dob = $_POST['dob'];
  $today = date("Y-m-d");
  $diff = date_diff(date_create($dob), date_create($today));
  echo "Hai " . $diff->format('%y anni, %m mesi e %d giorni.');
}
?>

<form method="POST">
  <label for="dob">Inserisci la tua data di nascita:</label>
  <input type="date" name="dob" required>
  <button type="submit" name="submit">Calcola età</button>
</form>