<html>
    <head>Form Validation</head>
    <body>
        <?php
        $name=$email=$gender=$comment=$website=" ";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name=test_input($_POST["name"]);
            $email=test_input($_POST["email"]);
            $website=test_input($_POST["website"]);
            $comment=test_input($_POST["comment"]);
            $gender=test_input($_POST["gender"]);
        }

        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        ?>
        <h2>Form Validation</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name:<input type="text" name="name"><br><br>
            E-mail:<input type="text" name="email"><br><br>
            Website:<input type="text" name="website"><br><br>
            Comment:<input type="text" name="comment"><br><br>
            Gender:<input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male<br><br>
            <input type="submit" name="submit" value="Submit">
    </form>

       <?php
        echo "<h2>Your Input:</h2>";
        echo "Name: $name<br>";
        echo "E-mail: $email<br>";
        echo "Website: $website<br>";
        echo "Comment: $comment<br>";
        echo "Gender: $gender<br>";
    ?>
    </body>
    </html>

