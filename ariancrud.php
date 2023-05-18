<!DOCTYPE html>
<html>
<head>
  <title>Add/Delete Post</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Add/Delete Post</h1>
  </header>

  <div class="container">
    <h2>Add New Post</h2>
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
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit" name="submit">Add Post</button>
      </div>
    </form>

    <h2>Manage Posts</h2>

    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Content</th>
          <th>Action</th>
          <th>Photo</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // PHP code to display all posts
          // Use a loop to display all posts in the table
        ?>
        <tr>
          <td>UBT lancon "UBT Accelerator"</td>
          
          <td>Në Parkun Shkencor Inovativ të UBT-së u hap qendra e parë inovative në rajon “UBT Accelerator”, e cila do të jetë në shërbim të studentëve për zhvillimin e ideve kreative, inovative dhe krijimin e avantazheve teknologjike.
       
        
          <td>
            <form action="delete.php" method="POST">
              <input type="hidden" name="id" value="1">
              <button type="submit" name="submit">Delete</button>
            </form>

            <form action="delete.php" method="POST">
              <input type="hidden" name="id" value="1">
              <button type="submit" name="submit">Update</button>
            </form>
            <td><img id="Photo1" src="ubt-780x439-1.jpg" alt=""></td> </td>
          </td>
          <tr>
          <td>Nisja e qendres me te madhe te shkences,teknologjise dhe inovacionit</td>
          <td>UBT hap qendren e re me ambiemte shume te pershtatshme per student</td>
        <td>
            <form action="delete.php" method="POST">
              <input type="hidden" name="id" value="1">
              <button type="submit" name="submit">Delete</button>
            </form>
            <form action="delete.php" method="POST">
              <input type="hidden" name="id" value="1">
              <button type="submit" name="submit">Update</button>
            </form>
            <td><img id="Photo2" src="https://www.ubt-uni.net/wp-content/uploads/2021/12/IMG_2065-Medium.jpg"   alt=""></td> </td>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>


<style>
header {
  /* background-color: dodgerblue;
  color: #fff;
  padding: 20px;
  text-align: center;
  margin-left: 450px;
  margin-right: 450px;
  border-radius: 25px; */
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
  background-color: dodgerblue;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  /* background-color: #3e8e41; */
}
#Photo1{
  width: 100px;
  height: 100px;
}
#Photo2{
  width: 100px;
  height: 100px;
}


</style>