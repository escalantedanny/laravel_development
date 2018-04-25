@include('templates.header')

<h1 align="center" class="mt-5 mb-5"><strong>{{ $title }}</strong></h1>

    <div class="container">
        <div class="col">
                  {{ csrf_field() }}
                  <a href="{{ url('usuarios/nuevo') }}" class="btn btn-info" >Registrar Nuevo usuario</a>
                  
                  <hr>
                  <p>Hay {{ $users->total() }} usuarios</p>
                <table class="table table-success table-striped table-hover">
                  <thead class="" >
                    <tr>
                            <th scope="col">ID</th> 
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">EMAIL</th>
                            {{-- <th scope="col">Profesion</th> --}}
                            <th scope="col">ACCION</th>
                    </tr>
                        </thead>  
                                  
                           
                        @foreach ($users as $user)
                          <tr data-id="{{ $user->id }}"> 
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->fname }}</td>
                                    <td>{{ $user->lname }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    {{-- <td>{{ $user->porfession_id }}</td> --}}
                                      <td>
                                            <a class="btn btn-primary" href="{{ url('usuarios/'.$user->id) }}"><span class="oi oi-eye"></span></a>
                                            <a class="btn btn-danger ml-1" href="{{ url('usuarios/eliminar/'.$user->id) }}"><span class="oi oi-trash"></span></span></a>
                                      </td>
                          </tr>
                        @endforeach ($users as $user)
                </table> 
            {!! $users->render() !!}
        </div>
    </div>

@include('templates.footer')
