
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">

        <div class="desktop-view inline-block item">
            <img class="responsive-image" src="images/contact-us.png" alt="Contact Us Image">
        </div>
        <div class="inline-block item">
        <form action="add.php" method="post">

            <div class="mobile-view">
                <h1>Contact Us</h1>
            </div>

            <?php if ($_GET['error'] == true): ?>
                <div class="form-group block" style="color: red; text-align: right;">
                    All fields are required!
                </div>
            <?php endif; ?>


            <div class="form-group block">
                <label class="form-label block" for="name">Your <span class="blue-text">Name</span></label>
                <input class="form-input" type="text" name="name" id="name" max=255 required autofocus>
            </div>

            <div class="form-group block">
                <label class="form-label block" for="email">Your <span class="blue-text">Email</span></label>
                <input class="form-input" type="email" name="email" id="email" max=255 required>
            </div>

            <div class="form-group block">
                <label class="form-label block" for="message">Your <span class="blue-text">Message</span></label>
                <input class="form-input" type="message" name="message" id="message" max=500 required>
            </div>

            <div class="form-group">
                <input class="form-input button" type="submit" value="Send">
            </div>

        </form>
        
        </div>

    </div>
    
</body>
</html>