<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="refresh" content="3">
    <title>Document</title>
<!--    <link rel="stylesheet" href="css/demo.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style>
    .main-form{
        width: 500px;
        margin: auto;
    }


    </style>

    <div class="container">
            <div class="row">
                <div class="col">

                    <form action="#" class="main-form needs-validation novalidate">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="firstname1">Firstname</label>
                                    <input type="text" name="firstname" id="firstname1" class="form-control" required>
                                    <small class="form-text text-muted">This should be your first name.</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="lastname1">Lastname</label>
                                        <input type="lastname" name="password" id="lastname1" class="form-control">
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="username1">Username</label>
                            <input type="text" name="username" id="username1" class="form-control is-invalid">
                            <div>Please enter  a valid username.</div>
                        </div>

                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" name="password" id="password1" class="form-control is-valid">
                            <div class="invalid-feedback">Looks good!</div>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="accept-terms" class="form-check-input">
                            <label for="accept-terms form-check-label">Accept Terms &amp; Conditions</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="dhr">
                            <label for="dhr" class="form-check-label">Dhr.</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="mvr">
                            <label for="mvr" class="form-check-label">Mvr.</label>
                        </div>

                        <button class="btn btn-dark text-danger">test</button>
                    </form>
                    

                </div>
            </div>
    </div>

    <script>
        var form = document.querySelector('.needs-validator');
        form.addEventListener('submit', function(event){
            if(form.checkValidity( == false)){
                event.preventDefault();
                event.stopPropagation();
                form.classList.add('was-validated');
            }
        } )
    </script>


    <!-- source https://www.youtube.com/watch?v=K-ccGZYRWzs&feature=youtu.be -->
    <!-- JQuery (necessary for Bootrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>