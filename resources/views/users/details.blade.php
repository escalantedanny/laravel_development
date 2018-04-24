@include('templates.header')

<div class="container">
    <div class="row justify-content-center">
        <div class="col justify-content-center">
            <form method='POST' action="{{ url("usuarios/{$user->id}") }}"> 
                {{-- para enviar metodo PUT en laravel necesitamos enviar metodo oculto --}}
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <h1 class="mt-5 mb-5" align="center">USUARIO s# {{ $user->id }}</h1>
                
                    <div class="form-group mt-5 align-content-center">
                                <legend class="text-center header">Detalle: {{ $user->fname }}</legend>
                                
                                @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <h6>Por favor corrige los errores debajo</h6>
                                            <ul>
                                                @foreach ($errors->all() as $error)--}}
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif 
                                <div class="col-md-12 col-12 mb-2">
                                    <label form="fname">Nombres</label>
                                    <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control" value="{{old('fname', $user->fname)}}">
                                </div>

                            
                                <div class="col-md-12 mb-2">
                                    <label form="lname">Apellidos</label>
                                    <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control" value="{{old('lname',$user->lname)}}">
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label form="password">Contraseña</label>
                                    <input id="pass" name="password" type="password" placeholder="***********" class="form-control">
                                </div>
                                
                                <div class="col-md-12 mb-2">
                                    <label form="email">Email</label>
                                    <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" value="{{old('email',$user->email)}}">
                                </div>
                                                                
                                <div class="col-md-12 mb-2">

                                    <label for="profession">Profession</label>
                                        <select class="form-control" id="profession_id" name="profession_id">
                                            <option>Select..</option>
                                                <option value="{{ $user->profession_id }}">{{ $user->profession_id }}</option>
                                            {{-- @foreach ($user->profession_id as $pr)
                                                
                                            @endforeach    --}}
                                        </select>
                                </div>
                                                                
                                <div class="col-md-12 mb-2">
                                    <label form="phone">Telefono</label>
                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control" value="{{old('phone',$user->phone)}}">
                                    
                                </div>
                                <div class="col-md-12 text-center mb-2">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar Usuario</button>
                                </div>

                    </div>
            </form>
        </div>
    </div>
</div>


@include('templates.footer')
