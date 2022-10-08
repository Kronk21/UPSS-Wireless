<?php foreach($productos as $producto): ?>    
    <li class="carrito__producto">
        <div class="carrito__img">
            <img src="src/img/productos/81Z0bNjsehL._AC_SL1500_.jpg" alt="">
        </div>
        <div class="carrito__info">
            <a href="producto.php" class="info__nombre">
                EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
            </a>
            <p class="info__precio">$4,200.00</p>
            <form method="POST" class="carrito__acciones">
                <p class="info__cantidad">Cantidad:</p>
                <input type="number" name="cantidad" value="1" min="1" max="4">
                <input type="hidden" name="producto_id" value="">
                <button type="submit"  class="carrito__btn">Actualizar</button>
                <button type="submit" class="carrito__eliminar">
                    <i class="fa-solid fa-trash-can"></i>
                </button>
            </form>
        </div>
    </li>
<?php endforeach; ?>
<!-- <li class="carrito__producto">
    <div class="carrito__img">
        <img src="src/img/productos/714slNN0VIL._AC_SL1500_.jpg" alt="">
    </div>
    <div class="carrito__info">
        <a href="producto.php" class="info__nombre">
            EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
        </a>
        <p class="info__precio">$4,200.00</p>
        <form method="POST" class="carrito__acciones">
            <p class="info__cantidad">Cantidad:</p>
            <input type="number" name="cantidad" value="1" min="1" max="4">
            <input type="hidden" name="producto_id" value="">
            <button type="submit"  class="carrito__btn">Actualizar</button>
            <button type="submit" class="carrito__eliminar">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </form>
    </div>
</li>
<li class="carrito__producto">
    <div class="carrito__img">
        <img src="src/img/productos/41y3e89VIpL._AC_SL1000_.jpg" alt="">
    </div>
    <div class="carrito__info">
        <a href="producto.php" class="info__nombre">
            EASYTAO Kit de Sistema de Cámara de seguridad, 8CH 3MP WiFi NVR + 4 3MP Cámaras de Vigilancia, Sistemas de Seguridad Inalambrico
        </a>
        <p class="info__precio">$4,200.00</p>
        <form method="POST" class="carrito__acciones">
            <p class="info__cantidad">Cantidad:</p>
            <input type="number" name="cantidad" value="1" min="1" max="4">
            <input type="hidden" name="producto_id" value="">
            <button type="submit"  class="carrito__btn">Actualizar</button>
            <button type="submit" class="carrito__eliminar">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </form>
    </div>
</li> -->