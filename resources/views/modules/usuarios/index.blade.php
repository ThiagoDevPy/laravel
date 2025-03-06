@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Usuario</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Administrar Usuarios</h5>
              <p>Administrar a los usuarios del sistema</p>

              <!-- Table with stripped rows -->
              <button class="btn btn-primary">
              <i class="fa-solid fa-circle-plus"></i> Agregar Usuario
              </button> 
              <hr>
              <table class="table datatable">
                <thead>
                  <tr>
                   <th>Nombre Usuario</th>
                   <th>Email</th>
                  <th>Rol</th> 
                  <th>Activo</th> 
                  <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $items as $item)
                  <tr>
                    <td>{{ $item->nombre_usuario }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->rol }}</td>
                    <td>{{ $item->activo }}</td>
                    
                    <td>
                      <a href="" class="btn btn-warning"> <i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
@endsection


