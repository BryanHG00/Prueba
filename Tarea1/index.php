
<?php include 'partials/head.php' ?>


    <div>

        <?php
            include 'partials/conexion.php';
        ?>

        <table class="table">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Fecha Nacimiento</th>
                </tr>
            </thead>

            <tbody>
                <?php
                
                    if($result = $mysqli->query($query)){

                        while($row = $result->fetch_assoc()){
                            $id = $row['IdAlumno'];
                            $nombre = $row['Nombre'];
                            $ap = $row['APaterno'];
                            $am = $row['AMaterno'];
                            $fnac = $row['FNac'];

                            echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <th scope="row">'.$nombre.'</th>
                                <th scope="row">'.$ap.'</th>
                                <th scope="row">'.$am.'</th>
                                <th scope="row">'.$fnac.'</th>
                            </tr>';
                        }
                        
                    }
                ?>
            </tbody>
        </table>

    </div>
</body>
</html>