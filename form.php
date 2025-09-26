<?php
// archery_form.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Archery Score Recording</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="container">
    <h1>Archery Score Recording</h1>
    <form method="POST" action="check.php">
      <h2>Player Information</h2>
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>

      <label for="middleName">Middle Name (optional):</label>
      <input type="text" id="middleName" name="middleName">

      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>

      <label for="age">Age:</label>
      <input type="number" id="age" name="age" min="1" max="100" required>

      <label for="club">Club:</label>
      <input type="text" id="club" name="club" required>

      <h2>Shooting Information</h2>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required>

      <label for="round">Round:</label>
      <input type="text" id="round" name="round" required>

      <label for="distance">Distance (m):</label>
      <input type="number" id="distance" name="distance" min="1" max="100" required>

      <label for="target">Target Face (cm):</label>
      <input type="number" id="target" name="target" min="20" max="200" required>

      <label for="category">Category (Age & Gender):</label>
      <select id="category" name="category" required>
        <option value="">--Select Category--</option>
        <option value="Female Open">Female Open</option>
        <option value="Male Open">Male Open</option>
        <option value="50+ Female">50+ Female</option>
        <option value="50+ Male">50+ Male</option>
        <option value="60+ Female">60+ Female</option>
        <option value="60+ Male">60+ Male</option>
        <option value="70+ Female">70+ Female</option>
        <option value="70+ Male">70+ Male</option>
        <option value="Under 21 Female">Under 21 Female</option>
        <option value="Under 21 Male">Under 21 Male</option>
        <option value="Under 18 Female">Under 18 Female</option>
        <option value="Under 18 Male">Under 18 Male</option>
        <option value="Under 16 Female">Under 16 Female</option>
        <option value="Under 16 Male">Under 16 Male</option>
        <option value="Under 14 Female">Under 14 Female</option>
        <option value="Under 14 Male">Under 14 Male</option>
      </select>

      <label for="division">Division (Equipment):</label>
      <select id="division" name="division" required>
        <option value="">--Select Division--</option>
        <option value="Recurve">Recurve</option>
        <option value="Compound">Compound</option>
        <option value="Recurve Barebow">Recurve Barebow</option>
        <option value="Compound Barebow">Compound Barebow</option>
        <option value="Longbow">Longbow</option>
      </select>

      <button type="submit">Submit</button>
      <button type="reset" class="small">Reset</button>
    </form>
  </div>
</body>
</html>
