<?php while($producto =  $productos->fetch_assoc()): ?>
    <li class="carrito__producto">
        <div class="carrito__img">
            <img src="src/img/db_productos/<?php echo $producto["imagen1"]; ?>" alt="">
        </div>
        <div class="carrito__info">
            <a href="producto.php?producto_id=<?php echo $producto["producto_id"]; ?>" class="info__nombre">
                <?php echo $producto["nombre"]; ?>
            </a>
            <p class="info__precio">
                <span class="precio__individual">Precio por unidad: $<?php echo number_format($producto["precio"], 2, ".", ","); ?></span>
            </p>
            <p class="info__precio">
                <span class="precio__conjunto">Precio en conjunto: </span>$<?php echo number_format($producto["precio_sum"], 2, ".", ","); ?>
            </p>
            <form method="POST" class="carrito__acciones" action="carrito.php">
                <p class="info__cantidad">Cantidad:</p>
                <input 
                    type="number" 
                    name="cantidad" 
                    value="<?php echo $producto["carrito_cantidad"]; ?>" 
                    min="1" 
                    max="<?php echo $producto["producto_cantidad"]; ?>">
                <input type="hidden" name="producto_id" value="<?php echo $producto["producto_id"]; ?>">
                <button type="submit" name="update" class="carrito__btn">Actualizar</button>
                <button type="submit" name="delete" class="carrito__eliminar">
                    <i class="fa-solid fa-trash-can"></i>
                </button>
            </form>
        </div>
    </li>
<?php endwhile; ?>
