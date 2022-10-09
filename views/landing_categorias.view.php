<div class='productos-sm'>
    <?php while($categoria = $categorias->fetch_assoc()): ?>
        <div class='producto-sm'>
            <div class='producto-sm__info'>
                <h3 class='producto-sm__titulo'>
                    <?php echo $categoria["nombre"]; ?>
                </h3>
                <p class='producto-sm__desc'>
                    <?php echo $categoria["descripcion"]; ?>
                </p>
                <a href='productos.php?categoria_id=<?php echo $categoria["id"]; ?>' class='producto-sm__link'>Ver más</a>
            </div>
            <div class='producto-sm__img'>
                <img src='src/img/db_categorias/<?php echo $categoria["imagen"]; ?>' alt=''>
            </div>
        </div>
    <?php endwhile; ?>
</div>