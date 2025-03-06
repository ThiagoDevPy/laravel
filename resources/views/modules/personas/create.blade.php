@extends('layouts.main')

@section('titulo', $titulo)

@section('contenido')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Agregar Persona</h1>

        </div><!-- End Page Title --> 

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Agregar nueva Persona</h5>
                            <form method="POST" action="{{ route('personas.store') }}">
                              @csrf
                                <div class="mb-3">
                                    <label for="nombre_persona" class="form-label">Nombre(*)</label>
                                    <input type="text" class="form-control" id="nombre_persona" required
                                        name="nombre_persona">
                                </div>

                                <div class="mb-3">
                                    <label for="apellido_persona" class="form-label">Apellido(*)</label>
                                    <input type="text" class="form-control" id="apellido_persona" required
                                        name="apellido_persona">
                                </div>

                                <div class="mb-3">
                                    <label for="ci_persona" class="form-label">N° de documento(*)</label>
                                    <input type="number" class="form-control" id="ci_persona" required name="ci_persona">
                                </div>

                                <div class="mb-3">
                                    <label for="ci_persona" class="form-label">Teléfono(*)</label>
                                    <input type="number" class="form-control" id="telefono_persona" required name="telefono_persona">
                                </div>


                                <div class="mb-3">
                                    <label for="direccion_persona" class="form-label">Direcciónn(*)</label>
                                    <input type="text" class="form-control" id="direccion_persona" required name="direccion_persona">
                                </div>


                                <div class="mb-3">
                                    <label for="sexo" class="form-label">Sexo(*)</label>
                                    <select name="sexo_persona" id="sexo_persona" class="form-control" required>
                                        <option value="">Seleccione el sexo</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="estado_civil_id" class="form-label">Estado Civil(*)</label>
                                    <select name="id_est_civl" id="id_est_civl" class="form-control" required>
                                        <option value="">Seleccione un estado civil</option>
                                        @foreach ($estadosCiviles as $estadoCivil)
                                            <option value="{{ $estadoCivil->id }}">{{ $estadoCivil->nombre_est_civil }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button class="btn btn-primary"> <i class="fa-regular fa-bookmark"></i> Guardar</button>
                                <a href="{{ route('personas') }}" class="btn btn-info"><i
                                        class="fa-regular fa-rectangle-xmark"></i> Cancelar</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
