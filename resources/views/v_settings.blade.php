@extends('layout.v_template')
@section('content')
<section class="content">

<section class="content container-custom">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <div class="card card-primary" style="height: ">
                    <div class="card-header">
                        <h3 class="card-title">Data Profile</h3>
                    </div>

                    <form id="user" action="" method="post"
                        enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value=""
                                    placeholder="Nama" disabled>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email"
                                    name="email" value="" disabled>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" placeholder="Password" name="password" disabled>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>



            <div class="col-md-6">
                <div class="card card-success" style="height: ">
                    <div class="card-header">
                        <h3 class="card-title">Update Profile</h3>
                    </div>

                    <form id="user" action="" method="post" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" value="" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="">
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="password" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


   
</section>
@endsection