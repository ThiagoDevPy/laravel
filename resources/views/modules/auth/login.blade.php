@extends('layouts.login')

@section('titulo', $titulo)

@section('contenido')
<main>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="#" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Ventas y Almacén</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Login de usuarios</h5>
                  <p class="text-center small">Ingresa tu email y password para acceder</p>
                </div>

                <!-- Formulario de Login -->
                <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('logear') }}">
                  @csrf
                  <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <input type="text" name="email" class="form-control" id="email" required autofocus>
                      <div class="invalid-feedback">Escribe tu correo</div>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="clave_usuario" class="form-control" id="clave_usuario" required>
                    <div class="invalid-feedback">Escribe tu contraseña!</div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                  </div>
                </form>

                <!-- Validación de errores -->
                @if ($errors->any())
                  <div class="alert alert-danger mt-3">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

              </div>
            </div>

            <div class="credits">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
</main>
@endsection
