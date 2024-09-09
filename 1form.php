<!-- <html>
    <body>
        welcome<?php echo $_POST["name"]; ?><br>
        your email address is:<?php echo $_POST["email"];?>

        

        </body>
        </html> -->


                <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Form Submission</title>
        </head>
        <body>
          <h2>Form Submission Details</h2>
          <p>Welcome <?php echo htmlspecialchars($_POST["first_name"]) . " " . htmlspecialchars($_POST["middle_name"]) . " " . htmlspecialchars($_POST["last_name"]); ?></p>
          <p>Your email address is: <?php echo htmlspecialchars($_POST["email"]); ?></p>
          <p>Your address is: <?php echo htmlspecialchars($_POST["address"]); ?></p>
          <p>Your comment: <?php echo htmlspecialchars($_POST["comment"]); ?></p>
        </body>
        </html>