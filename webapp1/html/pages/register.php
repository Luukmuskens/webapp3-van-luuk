<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ravelijn | Online webshop Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body style="margin-bottom:200px">

    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
            <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
        <h1>WitcherWorld </h1>
            <p>Welcome to our register page</p>
            <p>go down</p>
            <a href="index.php" class="btn btn-warning btn-lg text-white">Home</a>
            <a href="webshop.php" class="btn btn-warning btn-lg text-white">store</a>
            <a href="webshop.php" class="btn btn-warning btn-lg text-white">login</a>
            <a href="faq.php" class="btn btn-warning btn-lg text-white">FAQ</a>
            </div>
            </div>

        </div>
    </div>
<body2>
  <div class="box">
    <div class="content">
        <h1>register</h1>
    <form action='register_logic.php' name='register_logic' method="POST">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username" required class="text-input">
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required class="text-input">
        <label>email</label>
        <input type="email" name="email" placeholder="email" required class="text-input">
        <div class="l-parent">
        <input type="submit" value="login">
    </form>