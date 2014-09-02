<html xnls="http://www.v3.org/1999/xhtml">
    <head
        <title><?php if (isset($this->titulo))echo $this->titulo; ?></title>
        <meta http-equiv="content-Type" content="text/html; charset-utf8"/>
        <link href="<?php echo $_layoutparams['ruta_css']; ?>estilos.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <div id="main">
            <div id="header"
        <h1><?php echo APP_NAME; ?></h1>
            </div>
            
            <div id="menu_top">
                <ul>
                    <?php if(isset($_layoutparams['menu']));?>
                    <?php for($i = 0; $i <count($_layoutparams['menu']); $i++);?>
                    
                    <li><a href="<?php echo $_layoutparams['menu'][$i]['titulo']; ?>" ><?php echo ?>/a>></li>
                    <?php endfor; ?>
                    <?php endif;);?>
                    
                </ul>
            </div>
                 
            
        
    
