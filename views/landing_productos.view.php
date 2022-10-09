<div class='productos'>
    <h3 class='productos__titulo'>
        <?php echo $nombre_categoria; ?>
    </h3>
    <div class='scroll'>
        <div class='productos__lista'>
            <?php while ($producto = $productos->fetch_assoc()): ?>             
                <a href='producto.php?producto_id=<?php echo $producto["id"]?>' class='producto'>
                    <div class='producto__img'>
                        <img src='src/img/db_productos/<?php echo $producto["imagen1"]?>' alt='Fotografia de <?php echo $producto["nombre"]?>'>
                    </div>
                    <div class='producto__info'>
                        <p class='producto__nombre'>
                            <?php echo $producto["nombre"]?>
                        </p>
                        <p class='producto__precio'>$<?php echo number_format($producto["precio"], 2, ".", ","); ?></p>
                    </div>
                </a>
            <?php endwhile; ?>
        </div>
    </div>  
        <a 
            href='productos.php?categoria_id=<?php echo $id_categoria; ?>' 
            class='productos__link btn btn-secundario'
        >
            Ver más
        </a>
</div>