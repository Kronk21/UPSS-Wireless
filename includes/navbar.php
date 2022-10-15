<nav class="nav__info">
    <ul class="info contenedor">
        <img src="src/img/Logo-Blanco.png" alt="UPSS Wireless logo blanco" class="logo">
        <div class="info__telefono">
            <h2>Llamanos</h2>
            <p>(+52) 012 345 6789</p>
        </div>
        <div class="info__redes">
            <h2>Siguenos en:</h2>
            <a href="#">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
        </div>
    </ul>
</nav>

<nav class="navbar">
    <div class="bar contenedor">
        <a href="
        <?php
            echo basename($_SERVER['PHP_SELF']) == "index.php" ?  '#' : 'index.php'; 
        ?>
        ">
            <img src="src/img/Logo-Color.png" alt="UPSS Wirelles logo" class="logo">
        </a>
        <div class="links">       
            <ul>
                <li>
                    <a href="
                    <?php 
                        echo basename($_SERVER['PHP_SELF']) == "index.php" ?  '#internet' : 'index.php#internet'; 
                    ?>">Internet</a>
                </li>
                <li>
                    <a href="
                    <?php 
                        echo basename($_SERVER['PHP_SELF']) == "index.php" ?  '#productos' : 'index.php#productos'; 
                    ?>
                    ">Productos</a>
                </li>
                <li>
                    <a href="productos.php">Explorar</a>
                </li>
                <li>
                    <a href="#contacto">Contacto</a>
                </li>
            </ul>
            <div>
                <a href="
                <?php 
                        echo basename($_SERVER['PHP_SELF']) == "index.php" ?  '#internet' : 'index.php#internet'; 
                    ?>
                " class="btn btn-primario">Contrata ya</a>
                <!-- <a href="#" class="carrito">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="numero-items">
                        <p>0</p>
                    </div>
                </a> -->
            </div>
        </div>

        <?php
            //  Obtener el numero de productos en el carrito
            if(!isset($_COOKIE["pc_id"])) {
                $total_de_productos = "0";
            } else {
                $pc_id = $_COOKIE["pc_id"];

                $query = "SELECT SUM(cantidad) AS total FROM carritos WHERE id = ?";
                $statement = $conexion->prepare($query);
                $statement->execute([$pc_id]);
                
                $total_de_productos = $statement->get_result()->fetch_assoc()["total"];
                $total_de_productos = is_null($total_de_productos) ? "0" : $total_de_productos;
            }
        ?>
        
        <a href="carrito.php" class="carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            <div class="numero-items">
                    <p>
                        <?php echo $total_de_productos; ?>
                    </p>
            </div>
        </a>
        <button class="btn-menu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>