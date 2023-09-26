<div class="vh-100 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="border border-3 border-primary"></div>
        <div class="card bg-white">
          <div class="card-body p-5">
            <form class="mb-3 mt-md-4">
              <h2 class="fw-bold mb-2 text-uppercase ">Registrar</h2>
              <div class="mb-3">
                <label for="email" class="form-label ">Usuario</label>
                <input type="email" class="form-control" id="user" placeholder="usuario@example.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label ">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="*******">
              </div>
             
              <div class="d-grid">
              <button class="btn btn-outline-dark" id="sigIn" >Registrar</button>
              </div>
            </form>
            <div>
              <p class="mb-0  text-center">Tienes una cuenta? 
                <a href="./home" class="text-primary fw-bold">Iniciar sesion</a>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
    require "./app/controller/sigIn.controller.php"
?>