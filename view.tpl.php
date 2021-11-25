<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>

    <div class="container">
        <h3 class="text-info"> Fill out to Sign up</h3>
        <?php include('./customerForm.php'); ?>

        <p>Your first name is <?= $firstName; ?> </p>
        <p>Your last name is <?= $lastName; ?></p>
        <p>Your email is <?= $email; ?></p>
        <p>Your phone number is <?= $phoneNum?></p>
        <?php include('./userTable.php'); ?>


        <?php echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; ?>
        <?php echo "Joe is " . $ages['Joe'] . " years old."; ?>

        <table>
            <?php foreach ($ages as $key => $age) : ?>
                <tr>
                    <td><?= $key; ?></td>
                    <td><?= $age; ?></td>
                </tr>
            <?php endforeach; ?>
        </table><br>



        <?= 
        $characterName."   is ". $characterAge.
         $nameA." ".
         $is." ".
         $ageA ." ".
         strtolower($characterName).
         strtoupper($nameA).
         $nameA[3].
         str_replace("giraffe", "panda", $phrase); ?>

        <form action="index.php" method="get">
            Enter Name: <input type="text" name="fname">
            <input type="Submit">
        </form><br>
        <?php echo $_GET["fname"]; ?>
    </div>
</body>

</html>