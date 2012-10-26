<?php
    session_start();
    if(!empty($_SESSION['usuario'])){
 ?>
    <link rel='stylesheet' type='text/css' href='estilos.css'>
    <div id='principal'>
        <div id='opciones'>
            <div id='elusuario'>Usuario :<?php echo $_SESSION['usuario'];?></div>
            <a href='cerrarsesion.php'><div id='sesion'>Cerrar Sesion</div></a>
        </div>
        <div id='espacio'></div>
        <div id='contenido'>
            <table width=100%>
                <tbody>
                    <th>Articulo</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Sub Total</th>
                </tbody>
                <tr>
                    <?php //echo $_SESSION['pedido'];
                    $a=0.00;
                    if(!empty($_SESSION['pedido'])){
                        foreach($_SESSION['pedido'] as $resultado){
                            list($articulo, $cantidad, $precio) = split(',',$resultado);
                            echo '<td>'.$articulo.'</td>';
                            echo '<td align=right>'.$cantidad.'</td>';
                            echo '<td align=right>'.$precio.'</td>';
                            $subtotal = $cantidad*$precio;
                            echo '<td align=right>'.$subtotal.'</td></tr>';
                            $a = $a + $subtotal;
                        }
                    }
                    ?>
                <tbody><th></th><th></th><th>Total</th><th><? echo $a;?></th></tbody>
            </table>
        </div>
        <div id='agregar'>
            <div id='p'>Agregrar Articulo</div>
            <form method='post' action='agregararticulo.php'>
                <label>Nombre del Articulo</label><br>
                <input type='text' name='articulo' required><br>
                <label>Cantidad</label><br>
                <input type='text' name='cantidad' required><br>
                <label>Precio</label><br>
                <input type='text' name='precio' required><br>
                <input type='submit' value='Agregar'>
                <input type='reset' value='Cancelar'>
            </form>
        </div>
        <div id='espacio'></div>
    </div>
    
 <?php
    }else{
        header("Location: inicio.html");
    }
?>