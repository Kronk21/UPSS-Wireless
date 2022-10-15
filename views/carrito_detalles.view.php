<p class="detalles__titulo">Detalles</p>
<p class="detalles__total">Total:</p>
<p class="detalles__num">$<?php echo number_format($total, 2, ".", ",")?></p>
<form action="" method="POST" class="form__detalles">                        
    <label for="correo">Correo electronico:</label>
    <input type="email" name="correo" id="correo">
    <input type="hidden" name="carrito_id" value="<?php $pc_id; ?>">
    <input type="hidden" name="total" value="<?php $total; ?>">

    <button type="submit" class="btn btn-primario btn-detalles">Enviar solicitud</button>
</form>