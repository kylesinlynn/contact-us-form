
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Contact Us</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Rubik&display=swap');

        .container {
            margin: auto;
            max-width: 80rem;
            min-height: 50rem;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .item {
            align-self: center;
        }

        .form-group {
            padding-bottom: 1rem;
        }

        .form-label {
            margin-bottom: 1rem;
            letter-spacing: 0.1rem;
            word-spacing: 0.2rem;
            font-size: 1.2rem;
        }

        .form-input {
            width: 20rem;
            height: 3rem;
            font-size: 1.2rem;
            padding: 0 1rem;
            font-family: 'Rubik', sans-serif;
            border: 0.1rem blue solid;
            border-radius: 0.8rem;
        }

        .button {
            background-color: #691bef;
            width: 100%;
            min-height: 4rem;
            color: white;
            margin-top: 1rem;
            padding: 1rem;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            letter-spacing: 0.1rem;
            font-size: 1.2rem;
            font-family: 'Rubik', sans-serif;
            vertical-align: middle;
        }

        .button:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }

        .blue-text {
            color: #691bef;
        }

        .desktop-view img {
            max-width: 38rem;
        }

        .responsive-image {
            width: 100%;
            max-width: 35rem;
            height: auto;
        }

        .inline-block {
            display: inline-block;
        }

        .block {
            display: block;
        }

        .mobile-view {
            display: none;
        }

        @media only screen and (max-width: 888px) {
            .desktop-view {
                display: none;
            }

            .mobile-view {
                display: block;
            }
        }        


    </style>
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