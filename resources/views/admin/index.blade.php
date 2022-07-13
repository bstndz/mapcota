@extends('layouts.nav')

@section('content')

<div class="contenedor_servicio">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">

                <h1 class="texto_foto_servicio">ADMINISTRADOR</h1>

                <div style="display: block; margin-left: auto; margin-right: auto; padding: 5px;">
                    <a href="{{ route('admins.create') }}" class="btn btn-primary btn-sm float-right">
                      {{ __('Agregar') }}
                    </a>
                    <hr>
                </div>

              @if ($message = Session::get('success'))
              <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="thead">
                            <tr>
                                <th>No</th>

                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Rut</th>
                                <th>Email</th>
                                <th>Contraseña</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $admin->nombre }}</td>
                                <td>{{ $admin->apellido }}</td>
                                <td>{{ $admin->apellido2 }}</td>
                                <td>{{ $admin->rut }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->contraseña }}</td>

                                <td>
                                    <form action="{{ route('admins.destroy',$admin->id) }}" method="POST">
                                        <a class="btn btn-sm btn-primary " href="{{ route('admins.show',$admin->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                        <a class="btn btn-sm btn-success" href="{{ route('admins.edit',$admin->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        {!! $admins->links() !!}
    </div>
</div>
</div>

<!-- FOOTER -->

<footer>
<div class="contenedor_footer">


<div class="contenedor_logo_footer">
<img style="margin: 50px" id="logofooter" src="{{asset('img/logos/LOGO COLOR BLANCO.png')}}">
</div>

</div>
</footer>

<!-- ----------------------- -->

@endsection
