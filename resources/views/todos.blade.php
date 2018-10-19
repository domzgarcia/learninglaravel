<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DomzG Playground</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('site/css/bootstrap4/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/bootstrap4/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/bootstrap4/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
        <!-- Styles -->
    </head>
    
    <body>  
        <div class="dgpanel -top-gutter -bottom-gutter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Create User
                            </div>
                            <div class="card-body">
                                <!-- Form Start-->
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>

                                    <div class="form-group">
                                        <label for="confirmpw">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmpw" name="confirmpw" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                                <!-- Form End-->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                User list
                            </div>
                            <div class="card-body">
                                <!-- no content -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
