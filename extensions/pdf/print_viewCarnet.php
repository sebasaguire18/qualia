<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        *{
            margin: 0%;
            padding: 0%; 
        }
        
        .page{
            width: 100%!important;
            height: 100%!important;
            background: url(../../images/carnet.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            z-index: 1;
        }
        .w-100{
            width: 100%;
        }
        .d-flex{
            display: flex;
        }
        .justify-content-center{
            justify-content:center;
        }
        .justify-content-end{
            justify-content:end;
        }
        .justify-content-start{
            justify-content:start;
        }
        table.page_footer {width: 100%; color: #5e5e5e; border: none; padding: 2mm}
    </style>
    <title></title>
</head>
<body>
    <div style="position:absolute;">
        <img src="../../images/carnet.png" style="width:100%">
    </div>
    <div style="width:100%; text-align: center;padding-top:-2px; padding-right:60px;">
        <h4><?php echo consultarConsecutivo('carnet'); ?></h4>
    </div>
    <div style="width:100%; text-align: left;padding-top:70px; padding-left:65px;">
        <p style="font-size:18px;"><?php echo consultarNombreEstudiante($dni) ?></p>
    </div>
    <div style="width:100%; text-align: left;padding-top:8px; padding-left:180px;">
        <p style="font-size:15px;">CC. <?php echo $dni; ?></p>
    </div>
    <div style="width:100%; text-align: left;padding-top:18px; padding-left:165px;">
        <p style="font-size:15px;"><?php echo fechaVence($today); ?></p>
    </div>
    

    
</body>
</html>