
<?php include 'partials/head.php' ?>
    <div class="">
        <form method="get" action="acciones/alumnosAgregar.php" class=" centrar ">

            <div class="form-floating mb-3 col-auto">
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Brayan José">
                <label for="Nombre" >Nombre</label>
            </div>
            
            <div class="form-floating mb-3 col-auto">
                <input type="text" class="form-control" id="APaterno" name="APaterno" placeholder="Hernández">
                <label for="APaterno">Apellido Paterno</label>
            </div>

            <div class="form-floating mb-3 col-auto">
                <input type="text" class="form-control" id="AMaterno" name="AMaterno" placeholder="Gómez">
                <label for="AMaterno">Apellido Materno</label>
            </div>

            <div class="form-floating mb-3 col-2">
                <input type="date" class="form-control" id="FNac" name="FNac" placeholder="Fecha de nacimiento">
                <label for="FNac">Fecha de Nacimiento</label>
            </div>

            <input type="submit" class="btn btn-primary" name="Agregar" id="Agregar" value="Agregar">
        </form>
    </div>
    
</body>
</html>