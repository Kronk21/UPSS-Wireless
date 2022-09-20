<?php
    function mostrarMenuCategorias($focus) {
        $htmlLinks = "";
        for($i = 0; $i < 7; $i++) {
            $htmlLinks .= 
                "
                <li>
                    <a href='' class='categoria__nombre'>Camaras de seguridad</a>
                </li>
                ";
        }
        
        $html = 
            "
            <p class='categorias__titulo'>Categorias</p>
            <ul>
                $htmlLinks
            </ul>
            ";

        echo $html;
    }

    function mostrarProductos($categoria) {
        $html = "";
        
        for($i = 0; $i < 16; $i++) {
            $html .= 
                "
                <a href='#' class='producto'>
                    <div class='producto__img'>
                        <img src='src/img/productos/714slNN0VIL._AC_SL1500_.jpg' alt='Fotografia de blablabla'>
                    </div>
                    <div class='producto__info'>
                        <p class='producto__nombre'>
                            EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                        </p>
                        <p class='producto__precio'>$4,200.00</p>
                    </div>
                </a>
                ";
        }

        echo $html;
    }
?>