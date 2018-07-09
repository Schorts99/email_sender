<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Sender</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
  </head>
  
  <body>
    <header class="center_content white">
      <h1>Email sender</h1>
    </header>

    <div class="center_content">
      <div class="section white">
        <form action="data_sender.php" method="POST" enctype="multipart/form-data">
          <div class="field">
            <label for="email">Email:</label>
            <input type="email" name="email" />
          </div>

          <div class="field">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" autocomplete="off" />
          </div>

          <div class="field">
            <label for="body">Body:</label>
            <textarea name="body" rows="5" autocomplete="off"></textarea>
          </div>

          <input type="submit" value="Send">
        </form>
      </div>
    </div>
  </body>
</html>