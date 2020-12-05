<?php
session_start();
    require_once "../php/db.php";
    $conexion=conexion();
    
    include("hero.php");

?>
<head>
    <script src="../js/script.js"></script>
</head>


<h1 class="title is-1 has-text-centered pt-3">Control de Usuario</h1>
    <div class="container is-max-desktop buttons is-right">
        <a class="button is-primary PX-5 modal-button" data-toggle="modal" data-target="modalnuevo" aria-haspopup="true">Agregar Usuario</a>
    </div>


<div class="container" >
    <div class="level-item">
        <table class="table is-hoverable is-narrow is-striped">
            <thead>
                <tr>
                <th class="pr-6">#</th>
                <th class="px-6">Nombre</th>
                <th class="px-6">Correo</th>
                <th class="px-6">Login</th>
                <th class="pl-6">Acciones</th>
                <th></th>
                <th></th>
                <th></th>
                </tr>
            </thead>
        <?php
            if(isset($_SESSION['consulta']))
            {
                if($_SESSION['consulta'] > 0)
                {
                    $idp=$_SESSION['consulta'];
                    $sql="SELECT * from usuarios where id='$idp'";
                }
                else
                {
                    $sql="SELECT * from usuarios";
                }
            }
            else
            {
                $sql="SELECT * from usuarios";
            }

            $result=mysqli_query($conexion,$sql);
            while($ver=mysqli_fetch_row($result)){ 

                $datos=$ver[0]."||".
                        $ver[1]."||".
                        $ver[2]."||".
                        $ver[3];
        ?>
                        <tbody>
                            <tr>
                            <th><?php echo $ver[0] ?></th>
                            <td class="px-6"><?php echo $ver[1] ?></td>
                            <td class="px-6"><?php echo $ver[2] ?></td>
                            <td class="px-6"><?php echo $ver[3] ?></td>
                            <td class="px-6">
                                <div class="buttons">
                                    <a class="button is-link PX-5" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">Editar</a>
                                    <a class="button is-danger PX-5 ml-2" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">Borrar</a>
                                </div>
                            </td>
                            </tr>
                        </tbody>
        <?php
                    }
        ?>
        </table>
    </div>
</div>

<!-- pié de página -->
<?php include("footer.php")?>