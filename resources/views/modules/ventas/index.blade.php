@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Ventas</h1>
      
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Administrar Contratos-Ventas</h5>
              <p>Administrar las Ventas del sistema</p>

              <!-- Table with stripped rows -->
              <button class="btn btn-primary">
              <i class="fa-solid fa-circle-plus"></i> Agregar Contrato-Ventas
              </button> 
              <hr>
              <table class="table datatable">
                <thead>
                  <tr>
                   <th>Fecha Inicio</th>
                   <th>Fecha Fin</th>
                  <th>Monto</th> 
                  <th>Estado</th> 
                  <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $items as $item)
                  <tr>
                    <td>{{ $item->fecha_inicio }}</td>
                    <td>{{ $item->fecha_fin }}</td>
                    <td>{{ $item->monto }}</td>
                    <td>{{ $item->estado }}</td>
                    
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


