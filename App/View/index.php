
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/style.css">
    <style>
        .positive{
            background-color: rgb(78, 202, 78);
        }
        .negative{
            background-color: rgb(223, 51, 51);
        }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container-flex">

        <?php require('./header.php') ?>   

        <?php require('./main.php')?>

        <?php require('./aside.php')?>
    </div>
</body>

<script>
    const search = document.querySelector("#search_medium")

    search.addEventListener('keypress',()=>{
        console.log(search.value)
    })
</script>
</html>