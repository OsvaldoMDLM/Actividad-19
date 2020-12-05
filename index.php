<!DOCTYPE HTML>
<html>
<head>
    <title>Envio de informaci&oacute;n</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
</head>
<body>

<?php include("componentes/hero.php") ?>

    <!-- Cuerpo del documento -->
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">       
                <h1 class="title is-1">Ingresar al sistema</h1>

                <form name="frmdatos" action="php/validar.php" method="POST">
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-three-fifths"><input class="input" type="text" id="nombre" name="nombre" placeholder="e.g Alex Smith" required ></div>
                                </div>
                            </div>
                        </div>

                        <div class="field">
                        <label class="label">Email</label>
                        <div class="control"><div class="columns">
                            <div class="column is-two-fifths">
                            <input class="input" type="email" id="correo" name="correo" placeholder="e.g. alexsmith@gmail.com" required ></div>
                            </div>
                        </div>
                    </div>

                    <div class="control">
                        <button id="enviar" name="enviar" class="button is-success">&nbsp;Enviar datos&nbsp;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include("componentes/footer.php")?>
    <script src="js/funciones.js"></script>
</body>
</html>