<html>
<head>
    <head>
     <title>Save Navigation Configuration File</title>
 </head>
 <body>
    <h2>Save Navigation Configuration File</h2>
    <hr>
    <?php

//Esto es para independizar librerias del include_path de PHP
//Se afecta el Application.class y el Serializer.php
    global $saveconfiguration;
    $saveconfiguration = "S";

    require_once "config.inc.php";
    require_once "Serializer.class.php";

    $Navigation_config = array(
        'default_action' => 'CmdPaginaInicialUsu', 
        'default_action_CHROME' => 'default_CHROME',
        'error_view' => 'CmdDefaultError',
        'login_view' => 'Login',
        'commands' => array(
    	//Comando por defecto de la aplicacion sino se invoca el action en el REQUEST
            'default' => array(
                'class' => 'DefaultCommand',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'usuario_index.html',
                        'redirect' => 0
                    )
                )
            ),

        //Comando por defecto ejemplo de uso de Smarty Engine
            'CmdPaginaInicialUsu' => array(
                'class' => 'CmdPaginaInicialUsu',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'usuario_index.html',
                        'redirect' => 0
                    )
                )
            ),

        //Comando por defecto cuando no se esta usando Chrome
            'CmdCuentaUsu' => array(
                'class' => 'CmdCuentaUsu',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'cuenta.html',
                        'redirect' => 0
                    )
                )
            ),

            'CmdFactura' => array(
                'class' => 'CmdFactura',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'factura.html',
                        'redirect' => 0
                    )
                )
            ),		

            'CmdReportarUsu' => array(
                'class' => 'CmdReportarUsu',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'reportar.html',
                        'redirect' => 0
                    )
                )
            ),		

            'CmdCarritoUsu' => array(
                'class' => 'CmdCarritoUsu',
                'validated' => 'false',
                'desc' => 'Carga el carrito de compras',
                'views' => array(
                    'success' => array(
                        'view' => 'carrito.html',
                        'redirect' => 0
                    )
                )
            ),		

            'CmdSalirUsu' => array(
                'class' => 'CmdSalirUsu',
                'validated' => 'false',
                'desc' => 'Salir de la sesion',
                'views' => array(
                    'success' => array(
                        'view' => 'index.html',
                        'redirect' => 0
                    )
                )
            ),

        // Desarrollado por Anderson Alban
            'CmdVerPromociones' => array(
                'class' => 'CmdVerPromociones',
                'validated' => 'false',
                'desc' => 'Ver las promociones vigentes',
                'views' => array(
                    'success' => array(
                        'view' => 'promociones.html',
                        'redirect' => 0
                    )
                )
            ),

            'CmdComprarUsu' => array(
                'class' => 'CmdComprarUsu',
                'validated' => 'false',
                'desc' => 'Realizar la compra',
                'views' => array(
                    'success' => array(
                        'view' => 'generar.html',
                        'redirect' => 0
                    )
                )
            ),

            'CmdVerCategorias' => array(
                'class' => 'CmdVerCategorias',
                'validated' => 'false',
                'desc' => 'Ver todas las categorias',
                'views' => array(
                    'success' => array(
                        'view' => 'resultados.html',
                        'redirect' => 0
                    )
                )
            ),

            'CmdProductoDesc' => array(
                'class' => 'CmdProductoDesc',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'producto.html',
                        'redirect' => 0
                    )
                )
            )  
	) // Fin arreglo de comandos	

); //Fin Arreglo Navigation_config

echo "<pre>";
print_r($Navigation_config);
echo "</pre>";

$result = Serializer::save($Navigation_config, 'web.conf.data');

if (@PEAR::isError($result)) {
    echo "Error creating configuration file";
}

?>
</body>
</html>
