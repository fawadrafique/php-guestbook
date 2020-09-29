<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Guestbook</title>
</head>
<body class="bg-light d-flex flex-column min-vh-100">
<div class="container">
    <?php if(isset($_POST['submit'])): ?>
    <form action="index.php" method="post">
    <button action="submit" name="back" class="btn btn-info btn-sm mt-1 float-right"><i class="fas fas fa-angle-left pr-1"></i>Back</button>
    </form>
    <?php endif; ?>
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-3" src="../src/icon.png" alt="" width="82" height="82">
        <h1>Digital Guestbook</h1>
        <p class="lead"><?= (isset($_POST['submit'])) ? 'What people say about me!':'Write something to your friend!' ?></p>
    </div>