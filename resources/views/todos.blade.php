@extends('layouts.layout')
    
    @section('title', 'C.R.U.D')
    
    @section('content')
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
    
    @endsection('content')
