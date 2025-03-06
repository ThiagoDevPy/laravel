@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Persona</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Administrar Personas</h5>
              <p>Administrar a las personas del sistema</p>

              <!-- Table with stripped rows -->
             <a href="{{ route("personas.create") }}" class="btn btn-primary">
              <i class="fa-solid fa-circle-plus"></i> Agregar Persona
              </a> 
              <hr>
              <table class="table datatable">
                <thead>
                  <tr>
                   <th>Nombre</th>
                   <th>Apellido</th>
                  <th>C.I.</th> <!--podríamos poner numero de documento más adelante-->
                  <th>Teléfono</th> 
                  <th>Estado Civil</th> 
                  <th>Sexo</th> 
                  <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $items as $item)
                  <tr>
                    <td>{{ $item->nombre_persona }}</td>
                    <td>{{ $item->apellido_persona }}</td>
                    <td>{{ $item->ci_persona }}</td>
                    <td>{{ $item->telefono_persona }}</td>
                    
                    <td>{{ $item->estadoCivil->nombre_est_civil }}</td>  
                    <td>{{ $item->sexo_persona }}</td>                     
                    <td>
                      <a href="{{ route("personas.edit", $item->id ) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="{{ route("personas.show", $item->id ) }}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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


