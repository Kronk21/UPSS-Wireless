<p class='categorias__titulo'>Categorias</p>
<ul>
    <?php while($categoria = $categorias->fetch_assoc()): ?>
        <li >
            <a 
                href='productos.php?categoria_id=<?php echo $categoria["id"]; ?>' 
                class='categoria__nombre <?php echo $focus == $categoria["id"] ? "focus" : ""?>'
            >
                <?php echo $categoria["nombre"]; ?>
            </a>
        </li>
    <?php endwhile; ?>
</ul>