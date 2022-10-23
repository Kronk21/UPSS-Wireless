<?php
    $errores = "";
    $exito = "";

    if(isset($_POST["enviar_mensaje"])) {
        $correo = htmlspecialchars(trim($_POST["correo"]));
        $mensaje = wordwrap(htmlspecialchars(trim($_POST["mensaje"])), 70);

        if(empty($correo)) {
            $errores .= "<p><i class='fa-solid fa-circle-exclamation'></i> Correo invalido</p>";
        }

        if(empty($mensaje)) {
            $errores .= "<p><i class='fa-solid fa-circle-exclamation'></i> Mensaje invalido</p>";
        }

        if(empty($errores)) {
            $para = "ejemplo@ejemplo.com";
            $asunto = "Pagina web - Correo";
            $contenido = "De: " . $correo . "\n" . $mensaje;
            $headers = array("From" => $correo);

            // mail($para, $asunto, $contenido, $headers);
            
            $exito = "<p><i class='fa-solid fa-circle-check'></i> Tu correo se envio de manera exitosa</p>";
            $exito .= "Espera nuestra respuesta";
        }
    }
?>

<section id="contacto" class="seccion-formulario">
    <div class="contenedor">
        <div class="formulario__contenido">
            <h3>Envianos un mensaje</h3>
            <form action="#contacto" class="formulario" method="POST">
                <div class="formulario__control">
                    <label for="correo">Tu correo electronico:</label>
                    <input type="email" name="correo" id="correo">
                </div>
                <div class="formulario__control">
                    <label for="mensaje">Escribe un mensaje:</label>
                    <textarea name="mensaje" id="mensaje"></textarea>
                </div>
                <div class="formulario__control">
                    <?php                     
                        if(!empty($errores)){
                            echo $errores;
                        } else {
                            echo $exito;
                        }
                    ?>                    
                </div>
                <input type="submit" name="enviar_mensaje" class="btn btn-secundario" value="Enviar">
            </form>
        </div>
    </div>
</section>