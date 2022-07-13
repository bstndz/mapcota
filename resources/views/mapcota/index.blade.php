@extends('layouts.nav')

@section('content')

<title>Cuentas mapcotas</title>

<div class="contenedor_servicio">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">

                    <h1 class="texto_foto_servicio">MAPCOTAS</h1>

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
										<th>Apellido</th>
										<th>Rut</th>
										<th>Foto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mapcotas as $mapcota)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $mapcota->nombre }}</td>
											<td>{{ $mapcota->apellido }}</td>
											<td>{{ $mapcota->rut }}</td>
											<td><img src="{{ asset('storage').'/'.$mapcota->foto }}" alt=""></td>

                                            <td>
                                                <form action="{{ route('mapcotas.destroy',$mapcota->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mapcotas.show',$mapcota->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mapcotas.edit',$mapcota->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $mapcotas->links() !!}
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
