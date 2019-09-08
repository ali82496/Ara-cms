<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="signin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
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
