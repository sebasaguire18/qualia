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
            background: url(../../images/certificado.png);
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
        <img src="../../images/certificado.png" width="100%">
    </div>
    <div style="width:100%; text-align: right;padding-top:5px; padding-right:20px;">
        <h2>001</h2>
    </div>
    <div style="width:100%; text-align: center;padding-top:210px; padding-right:20px;">
        <p style="font-size:40px;"><?php echo consultarNombreEstudiante($dni) ?></p>
    </div>
    <div style="width:100%; text-align: center;padding-top:25px; padding-right:20px;">
        <p style="font-size:25px;">CC. <?php echo $dni; ?> de <?php echo consultarCiudadDni($dni); ?></p>
    </div>
    <!-- <div style="width:100%; text-align: left;padding-top:302px; padding-left:135px;">
        <p style="font-size:18px;">17 <span style="margin-left:85px;">enero</span> <span style="margin-left:45px;">2024</span></p>
    </div> -->
    <table style="width: 100%; border-collapse: collapse; margin: 10px 0; padding-top:290px;">
        <tr style="width: 100%; text-align: center;">
            <td style="width: 30%; font-size:18px; padding-left:65px"><?php echo obtenerDia($today); ?></td>
            <td style="width: 20%; font-size:16px; padding: auto 20px;text-align:left;"><p><?php echo formatoAFecha($today); ?></p></td>
            <td style="width: 20%; font-size:16px; padding: auto 0px;text-align:left;"><p>2024</p></td>
        </tr>
    </table>
    

    
</body>
</html>