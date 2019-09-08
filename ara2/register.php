<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="signin.css">
    <?php include("bootstrap/bootstrap.php") ?>
</head>

<body>
    <div class="container">
        <div id="users">
            <form class="form-signin" action="do-register.php" method="POST">
                <img class="mb-4" src="ara.svg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name"
                        name="user">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email"
                        aria-describedby="basic-addon1" name="email">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="exampleFormControlInput1"
                        placeholder="Your password" name="password">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="exampleFormControlInput1"
                        placeholder="Your password again" name="password-conf">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="do-register">Sign up</button>
            </form>


        </div>
    </div>
</body>

</html>
