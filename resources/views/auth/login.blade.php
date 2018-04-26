@include('templates.auth');

<div class="container">
    <form>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-6 mt-5">
                <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <p class="card-text align-content-center">Usuarios</p>
                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control" id="staticEmail" value="" placeholder="usuario@correo.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            <div class="col-3">
            </div>
        </div>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

@include('templates.footer')
