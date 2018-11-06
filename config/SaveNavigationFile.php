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
        'default_action' => 'CmdDefaultLogin', 
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
                        'view' => 'Form_Wellcome.tpl',
                        'redirect' => 0
                    )
                )
            ),

        //Comando por defecto ejemplo de uso de Smarty Engine
            'CmdDefaultSample' => array(
                'class' => 'CmdDefaultSample',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_Default_Sample.tpl',
                        'redirect' => 0
                    )
                )
            ),

        //Comando por defecto cuando no se esta usando Chrome
            'default_CHROME' => array(
                'class' => 'default_CHROME',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_Default_Chrome.tpl',
                        'redirect' => 0
                    )
                )
            ),

            'CmdDefaultHome' => array(
                'class' => 'CmdDefaultHome',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_Dashboard.tpl',
                        'redirect' => 0
                    )
                )
            ),		

            'CmdDefaultLogin' => array(
                'class' => 'CmdDefaultLogin',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_Login.tpl',
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
        // Desarrollado por Kevin Villa - Tabla: Usuario
            'CmdLogin' => array(
                'class' => 'CmdLogin',
                'validated' => 'false',
                'desc' => 'Inicio de sesion',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_HomeAdmin.tpl',
                        'redirect' => 0
                    ),
                    'fail' => array(
                        'view' => 'Form_Login.tpl',
                        'redirect' => 0
                    )
                )
            ),
        // Desarrollado por Anderson Alban
            'CmdRegister' => array(
                'class' => 'CmdRegister',
                'validated' => 'false',
                'desc' => 'Adicionar un usuario',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_Login.tpl',
                        'redirect' => 0
                    ),
                    'fail' => array(
                        'view' => 'Form_Register.tpl',
                        'redirect' => 0
                    )
                )
            ),

            'CmdDefaultRegister' => array(
                'class' => 'CmdDefaultRegister',
                'validated' => 'false',
                'views' => array(
                    'success' => array(
                        'view' => 'Form_Register.tpl',
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
