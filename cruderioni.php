<!DOCTYPE html>
<html>
<head>
  <title>Ad Managment System</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Krijoni nje reklame</h1>
  </header>

  <div class="container">
    <h2>Shtoni nje post</h2>
    <input type="file" accept="image/*" onchange="loadFile(event)">
      <p><img id="output" width="200"/></p>
      <script>
          var loadFile = function(event) {
              var image = document.getElementById('output');
              image.src=URL.createObjectURL(event.target.files[0]);
          };
      </script>

    <form action="create.php" method="POST">
      <div class="form-group">
        <label for="title">Titulli:</label>
        <input type="text" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="content">Pershkrimi:</label>
        <textarea id="content" name="content" required></textarea>
      </div>
			<p>*Pagesa eshte cash deri sa e bejme online!</p>
		



      <div class="form-group">
        <button type="submit" name="submit">Perfundo</button>
      </div>
    </form>

    <h2>Menagjimi postimeve</h2>

    <table>
      <thead>
        <tr>
				<th>Foto</th>
          <th>Titulli</th>
          <th>Pershkrimi</th>
          <th>Menagjimi</th>
				

					
				
        </tr>
      </thead>
      <tbody>
        <?php
          // PHP code to display all posts
          // Use a loop to display all posts in the table
        ?>
        <tr>
					
				<td><img id="myImage1" src="intersport.jpg" alt="Image"></td>

          <td>Intersport</td>
          
          <td>Intersport ofron zbritje verore deri ne -40% nga data 05/18/2023 deri me 06/06/2023.
        </td>
        
          <td>
            <form action="delete.php" method="POST">
              <input type="hidden" name="id" value="1">
              <button type="submit" name="submit">Fshini</button>
            </form>

            <form action="delete.php" method="POST">
              <input type="hidden" name="id" value="1">
              <button type="submit" name="submit">Permireso</button>
            </form>
						
          </td>
          <tr>
					<td><img id="myImage2" src="gjirafa1.png" alt="Image"></td>
          <td>Gjirafa dhe rritja e saj si kompani!</td>
          <td>Gjirafa është një nga kompanitë e teknologjisë me rritjen më të shpejtë në Evropën Qendrore dhe është ndërtuar për të qëndruar. Ne jemi të përqendruar te klientët, të orientuar drejt rezultateve dhe kemi standarde të larta të pamëshirshme. Misioni ynë përfundimtar është të ndërtojmë ekonominë e internetit në rajonin e CE.

        </td>
        <td>
            <form action="delete.php" method="POST">
              <input type="hidden" name="id" value="1">
              <button type="submit" name="submit">Fshini</button>
            </form>
            <form action="delete.php" method="POST">
              <input type="hidden" name="id" value="1">
              <button type="submit" name="submit">Permireso</button>
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>


<style>
header {
  background-color: RoyalBlue;
  color: #fff;
  padding: 20px;
  text-align: center;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  margin: 0;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

form {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.form-group {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

label {
  margin-bottom: 5px;
}

input[type="text"], textarea {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

button[type="submit"] {
  background-color:  dodgerBlue;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: royalBlue;
}
#myImage2 {
  width: 130px; /* Adjust the desired width */
  height: 80px; /* Automatically adjust the height while maintaining the aspect ratio */
}
#myImage1 {
  width: 120px; /* Adjust the desired width */
  height: 90px; /* Automatically adjust the height while maintaining the aspect ratio */
}


</style>