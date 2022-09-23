<?php
    function generarHtmlProducto($producto) {
        //  Generar carta del producto

        $html = 
            "
            <a href='producto.php' class='producto'>
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

        return $html;
    }

    function mostrarProductosPorCategoria($categoria) {
        //  Obtener nombre de la categoria

        //  Generar la lista de productos
        $htmlProductos = "";
        for($i = 0; $i < 4; $i++) {
            $htmlProductos .= generarHtmlProducto(2);
        }

        $html = 
            "
            <div class='productos'>
                <h3 class='productos__titulo'>Camaras de seguridad</h3>
                <div class='scroll'>
            <div class='productos__lista'>
                $htmlProductos
            </div>
            </div>
                <a href='productos.php' class='productos__link btn btn-secundario'>Ver más</a>
            </div>
            ";

        echo $html;
    }

    function generarHtmlCategoria($categoria) {
        $html = 
            "
            <div class='producto-sm'>
                <div class='producto-sm__info'>
                    <h3 class='producto-sm__titulo'>Audio</h3>
                    <p class='producto-sm__desc'>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, perferendis?
                    </p>
                    <a href='productos.php' class='producto-sm__link'>Ver más</a>
                </div>
                <div class='producto-sm__img'>
                    <img src='src/img/productos/714slNN0VIL._AC_SL1500_.jpg' alt=''>
                </div>
            </div>
            ";

        return $html;
    }

    function mostrarCategorias($categoria1, $categoria2) {
        $htmlCategoria1 = generarHtmlCategoria(2);
        $htmlCategoria2 = generarHtmlCategoria(2);
        
        $html = 
            "
            <div class='productos-sm'>
                $htmlCategoria1
                $htmlCategoria2
            </div>
            ";
        
        echo $html;
    }
?>

<!-- <div class="productos">
    <h3 class="productos__titulo">Camaras de seguridad</h3>
    <div class="scroll">
        <div class="productos__lista">
            <a href="#" class="producto">
                <div class="producto__img">
                    <img src="src/img/714slNN0VIL._AC_SL1500_.jpg" alt="Fotografia de blablabla">
                </div>
                <div class="producto__info">
                    <p class="producto__nombre">
                        EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                    </p>
                    <p class="producto__precio">$4,200.00</p>
                </div>
            </a>
            <a href="#" class="producto">
                <div class="producto__img">
                    <img src="src/img/714slNN0VIL._AC_SL1500_.jpg" alt="Fotografia de blablabla">
                </div>
                <div class="producto__info">
                    <p class="producto__nombre">
                        EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                    </p>
                    <p class="producto__precio">$4,200.00</p>
                </div>
            </a>
            <a href="#" class="producto">
                <div class="producto__img">
                    <img src="src/img/714slNN0VIL._AC_SL1500_.jpg" alt="Fotografia de blablabla">
                </div>
                <div class="producto__info">
                    <p class="producto__nombre">
                        EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                    </p>
                    <p class="producto__precio">$4,200.00</p>
                </div>
            </a>
            <a href="#" class="producto">
                <div class="producto__img">
                    <img src="src/img/714slNN0VIL._AC_SL1500_.jpg" alt="Fotografia de blablabla">
                </div>
                <div class="producto__info">
                    <p class="producto__nombre">
                        EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
                    </p>
                    <p class="producto__precio">$4,200.00</p>
                </div>
            </a>
        </div>
    </div>
    <a href="#" class="productos__link btn btn-secundario">Ver más</a>
</div> -->

<!-- <div class="productos-sm">
    <div class="producto-sm">
        <div class="producto-sm__info">
            <h3 class="producto-sm__titulo">Audio</h3>
            <p class="producto-sm__desc">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, perferendis?
            </p>
            <a href="#" class="producto-sm__link">Ver más</a>
        </div>
        <div class="producto-sm__img">
            <img src="src/img/714slNN0VIL._AC_SL1500_.jpg" alt="">
        </div>
    </div>

    <div class="producto-sm">
        <div class="producto-sm__info">
            <h3 class="producto-sm__titulo">Audio</h3>
            <p class="producto-sm__desc">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, perferendis?
            </p>
            <a href="#" class="producto-sm__link">Ver más</a>
        </div>
        <div class="producto-sm__img">
            <img src="src/img/714slNN0VIL._AC_SL1500_.jpg" alt="">
        </div>
    </div>
</div> -->