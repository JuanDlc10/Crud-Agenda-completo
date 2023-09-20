<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5" >Crear contacto</h1>      
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label" >Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" >
                        <div class="form-text" >Ingresa el nombre</div>
                    </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control"  id="telefono" aria-describedby="telefonoHelp"  >
                    <div id="" class="form-text" >Ingresa el telefono</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" class="form-control"  id="email" aria-describedby="emailHelp"  >
                    <div id="" class="form-text" >Ingresa el email</div>
                <div class="mb-3">
                    <label for="rol" class="form-label">Categoria</label>
                    <select id="rol" class="form-select" aria-label="Default select example">
                         <?php foreach ($roles as $rol): ?>
                            <option value="<?php echo $rol['id']?>"> <?php echo $rol["rol"]?> </option>
                        <?php endforeach ?>
                    </select>
                    <div id="categoriaHelp" class="form-text">Ingresa la categoria</div>
                </div>
                    <hr>
                    <button id="crear" class="btn btn-success" >Crear</button>
                </div>
                </div>
        </div>
    </div>
</div>

<?php
    require "./app/controller/create.controller.php"
?>