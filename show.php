<?php

    include_once('include/DBConnection.php');

    $users = $db->getRecords();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Records</title>

    <style>
        .container {
            max-width: 80rem;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .modified-card {
            border-right: 1px solid darkblue;
            border-bottom: 1px solid darkblue;
            width: 15rem;
            height: 18rem; 
            display: block;
            margin-top: 1rem;
        }
    </style>

</head>
<body>
    <div class="container">
        <?php foreach ($users as $user): ?>
            <span class="modified-card">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $user['name']; ?></li>
                    <li class="list-group-item"><?= $user['email']; ?></li>
                    <li class="list-group-item"><?= $user['message']; ?></li>
                </ul>
            </span>
        <?php endforeach; ?>
    </div>
</body>
</html>