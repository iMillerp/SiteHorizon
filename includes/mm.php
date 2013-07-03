<html>
    <head>
        <title>Musica Atual</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <meta http-equiv="refresh" content="10" > 
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                margin: 0;
                padding: 0;
                background: #f5f5f5;
            }
        </style>
    </head>
    <body>
        
    <marquee direction="left">
        <span class="text-error">
            <?php
            $xml = simplexml_load_file("http://stream.maisouvida.com/api/ODc4MCsw");
               echo $xml->musica_atual;
            ?>
        </span>
    </marquee>
</body>
</html>