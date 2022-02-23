
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
</head>
<body>

    <form action="add.php" method="post">

        <div>
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" required autofocus>
        </div>
        
        <div>
            <label for="email">Your Email</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="message">Your Message</label>
            <textarea name="message" required></textarea>
        </div>

        <div>
            <input type="submit" value="Send">
        </div>

    </form>
    
</body>
</html>