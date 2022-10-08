<div class='productos'>
    <h3 class='productos__titulo'>Camaras de seguridad</h3>
    <div class='scroll'>
        <div class='productos__lista'>
            <?php foreach($productos as $producto): ?>
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
            <?php endforeach; ?>
        </div>
    </div>  
        <a href='productos.php' class='productos__link btn btn-secundario'>Ver más</a>
</div>