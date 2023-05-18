
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Library MS</title>
</head>
<body>
  
  <div class="container">
    <div class="title">Add & Edit</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Title</span>
            <input align="center" type="text" placeholder="Enter your the title" required>
          </div>
          <div class="input-box">
            <span class="details">Author</span>
            <input align="center" type="text" placeholder="Enter your the author" required>
          </div>
		  <div class="input-box">
            <span class="details">Isbn</span>
            <input align="center" type="number" placeholder="Enter your the isbn" required>
          </div>
		  <div class="input-box">
            <span class="details">Publisher</span>
            <input align="center" type="text" placeholder="Enter your the Publisher" required>
          </div>
		  <div class="input-box">
			<label for="birthday">Birthday</label>
			<input align="center" type="date" id="birthday" name="birthday">
          </div>
		  <div class="input-box">
            <span class="details">picture</span>
            <input align="center" type="text" placeholder="Enter your the picture" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="saving file">
		  <input type="submit" value="reset">
        </div>
      </form>
    </div>
  </div>

  </body>
</html>
