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
        'default_action' => 'CmdDefaultHome', 
        'default_action_CHROME' => 'default_CHROME',
        'error_view' => 'CmdDefaultError',
        'index_view' => 'index',
        'commands' => array(
    	//Comando por defecto de la aplicacion sino se invoca el action en el REQUEST
            'default' => array(
                'class' => 'DefaultCommand',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_index.tpl',
                        'redirect' => 0
                    )
                )
            ),

            'CmdDefaultHome' => array( 
                'class' => 'CmdDefaultMus',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_index.tpl',
                        'redirect' => 0
                    )
                )
            ),	

            'CmdDefaultLogin' => array( 
                'class' => 'CmdDefaultMus',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_iniciar.tpl',
                        'redirect' => 0
                    )
                )
            ),		

            'CmdDefaultAdmin' => array( 
                'class' => 'CmdDefaultMus',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_default_gestion.tpl',
                        'redirect' => 0
                    )
                )
            ),	

            'CmdDefaultProv' => array( 
                'class' => 'CmdDefaultMus',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_proveedor.tpl',
                        'redirect' => 0
                    )
                )
            ),

            'CmdCrearProve' => array( 
                'class' => 'CmdDefaultMus',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_crear_proveedor.tpl',
                        'redirect' => 0
                    ),
                    'fail' => array(
                        'view' => 'Form_crear_proveedor.tpl',
                        'redirect' => 0
                    )
                )
            ),

            'CmdShowByIdProveedor' => array( 
                'class' => 'CmdShowByIdProveedor',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_proveedor.tpl',
                        'redirect' => 0
                    ),
                    'fail' => array(
                        'view' => 'Form_proveedor.tpl',
                        'redirect' => 0
                    )
                )
            ),

            'CmdDeleteProveedor' => array( 
                'class' => 'CmdDeleteProveedor',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_proveedor.tpl',
                        'redirect' => 0
                    ),
                    'fail' => array(
                        'view' => 'Form_proveedor.tpl',
                        'redirect' => 0
                    )
                )
            ),

        // Desarrollado por Kevin Villa - Direccion de interfaz
            'CmdDefaultError' => array(
                'class' => 'CmdDefaultError',
                'validated' => 'false',
                'desc' => 'Cargar Forma Error',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_Error.tpl',
                        'redirect' => 0
                    )
                )
            ),		

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
