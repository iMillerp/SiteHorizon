<?php
session_start();
include('includes/mobile_device_detect.php');
include('includes/mysql.class.php');
include('includes/radio_config.php');
include('includes/mysql_querys.php');
mobile_device_detect(true, true, true, true, true, true, 'http://radiohorizon.com.br/mobile/', false);
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Rádio Horizon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Icon Barra Favoritos -->
        <link rel="shortcut icon" href="img/1372288651_81199.ico" type="image/x-icon" />
        <!-- CSS -->
        <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
        <link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet">
        <link href="css/social-icons.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body style="margin-left: auto; margin-right: auto;">
        <div id="fb-root"></div>
        <div class="container" style="margin-left: auto; margin-right: auto;">
            <div class="span11">
                <div class="">
                    <div class="" style="margin-left: 30px;">
                        <div class="pull-right" id="pub1">
                            <a href="#"><img class="img-polaroid" src="http://placehold.it/300x80&text=Publicidade+300x100"></a>
                        </div>
                        <div class="pull-right" style="margin-right: 5px;" id="pub2">
                            <a href="#"><img class="img-polaroid" src="http://placehold.it/300x80&text=Publicidade+300x100"></a>
                        </div>
                        <img src="img/logo.png" />
                    </div>
                </div>
                <div class="navbar" id="menu">
                    <div class="navbar-inner">
                        <ul class="nav" id="menu2">
                            <li><a></a></li>
                            <li><a></a></li>
                            <li><a href="?pageid=1">\\ Início //</a></li>
                            <li><a href="?pageid=2">\\ Programação //</a></li>
                            <li><a href="?pageid=3">\\ Notícias //</a></li>
                            <li><a href="?pageid=4">\\ Chat //</a></li>
                            <li><a href="?pageid=5">\\ Locutores //</a></li>
                            <li><a href="?pageid=6">\\ Publicidade //</a></li>
                            <li><a href="?pageid=7">\\ Contato //</a></li>
                            <li><a href="?pageid=8">\\ A Rádio //</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="span11">
                <?php #require_once 'includes/pages/slides.php'; ?>
            </div>
            <div class="span11">
                <div class="row">
                    <div class="span8">
                        <?php
                        if (!isset($_GET['pageid'])) {
                            require_once "includes/pages/home.php";
                        } else {
                            if ($pagina_info) {
                                require_once "includes/pages/" .$pagina_info[0]['arquive'];
                            } else {
                                require_once 'includes/pages/home.php';
                            }
                        }
                        ?>
                        <div id="homeBoxs">
                            <div class="title"><h4>\\ TOP 10 //</h4><i class="icon-boxTitulo visible-desktop"></i></div>
                            <br/>
                            <br/>
                            <br/>
                        </div>
                        <div id="homeBoxs">
                            <div class="title"><i class="icon-boxTitulo visible-desktop"></i><h4>\\ FACEBOOK //</h4></div>
                            <div class="fb-like-box" data-href="https://www.facebook.com/radiohorizonweb" data-width="775" data-show-faces="true" data-stream="false" data-show-border="false" data-header="false"></div>
                        </div>
                    </div>

                    <div class="span3">
                        <div id="boxsLateral">
                            <div class="text"><h4>\\ TOCANDO AGORA //</h4><i class="icon-boxTitulo2 visible-desktop"></i></div>                            

                            <div style="margin: 5px;">
                                <img class="img-polaroid pull-left" src="http://placehold.it/180x150" style="margin-right: 5px;">
                                <div class="btn-group btn-group-vertical clearfix"> 
                                    <a class="btn btn-small" href="#facebook"><img width="32" height="32" title="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAE60lEQVR42sVWW0ibZxiOOZtzjGdQs1UnWFcMg7lctKD1HCcThuJhFMbAC0UMVosgQ9dOrDcR1kmRjREZu4iL5mbrdlEYg3alY1VUNhmy1CnfjRfeeeue519++f1NbKaB/eFR8n7v97zP9x6+PxqdVve/4j8563V6j0Fv6DYajHMmoykK/AA85n+j0fi5wWC4A5+3Mi4AQd9GkEh2drawWW3C4XAIl9Ml3C63BJfLJZxOp7Db7cJqsQqzybwOkbchxnopASDwIvASSRkgJydH5Obmiry8PJGfn38KtHHN4/FIouw2u8g2Z29CfP+FBGCj32Kx/OF0OEkqBSgoKEgLFEQxFMKM4RAhHMactgCkrxun3kNqSUTCi4CimTWWhtn4niV5pQA0kh+qd6FeTvel4cnxCIfdwf4IQ0RKAUx7KWr3ewaDy2AZmQmWg5NyVgCNbrd7Ua45BMjp3+vt7Y2Fw+FQbDU2lxZisbnR0dGvy8vLt8khA/wU8Tey7D0RoNVqJcB41Waz0YkCCKl+PT09q8fHx9eBEqDgPKyurr42MTHxZuK7b3l5eRIcSj5OE2N8qdPppLjSH37B4jecbzrJYBMODAwEccnQJxUo/jZ8dk0mkzCbzb/p9XoNARH5SP+umtNqtQrseUMWQAIXTr+PRao7AdUGAoEPZLVJwEA+XlDYT/K9mpqanxicaxSO1MfJpQR7oaio6C55JUfUuTtBcArMSGtra38qAbT7fL5b3Eux8/Pzn+HUnRAgH0yD1MeT8PK+eEY/qREqKioeUBVJlKCtpaWlnz7aLO0p0AaCh7iSX8CPpDzdM5w6KvtjqljauIqXvizDPtatUvd7vd5HMokSPFlLc3IB3FdYWPgriCiUICnn/S+unQhw58TJpQZ9S0pKav4VUOZ9ymAykZKwubk5pQCk+9bU1NQX3EssLS2FYBtSCkBW4uBKyn3j+o1Wiai0tPQ5DSRRAu8CCjivBJqGmw2D3MsXVnt7e4B8sj/XUfM4uJJxs7ydbCT2wM80kEgJdjcFsKGysrLOgPb6+vpB+hEBPEpfcqPmcXAl5e7q6mqRnPx+/7cwUJUSnOm0BdC3ra3tjADUOw6upNwLCwuVEklHR8d9GkikBG1NTU3nCqirqxukHy8hCqBdLYBcamD0/0S/mCUSNNJ7iVtMCZKmJQB+KQWg4eLkUqO2tvZHrtOR3ZxXVla2ThIlMNOisbGxHz7nCqAfwEsroF5Hw8WT8Y6Pj9/h+onj0NBQiAsK8L4WuOmC9EmFmZmZhmAwGB4ZGQnPzs5eUwlwgGdfzYup2zg4OLgCHwhIfA4PD6uxsM6gMjBG7Ng1jNQV+CT7MHsu4FoCVsWaFad9SA5yKTE9PT0DXy29lETae3fvfap2JgHmWkBEamiJszbUWBj0p/kqKyufI9brclz1abx9fX0RBlWARBeCmgdvxu21F2sfQuBJTPVDEe/gXnhMggyCpXwZjUYnwW/RvOo5Ojp6F+P3HdOYCeCNuI1fS59w2jTpPOwH4ObY2NhXuLVeXiZ4VVXVL1tbW0F18HSFXN3Z2RljNlDDPYyNSBfFxcUboVDoATjeV6b9IiLMzMbGxsbk8PBwuLq6+glquocloQZTjWs9tri4GOKrGvBqMvVwxhOz3gkEgdGVlZX7kUhkbnNz82N+Bz6Sf0Gny/sPLDM1NmUnTAYAAAAASUVORK5CYII="></a>
                                    <a class="btn btn-small" href="#skype"><img width="32" height="32" title="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFdUlEQVR42tVW609bZRyWltLS0kLLXYaBcB1kk9AgELloRrlkgkhGSABFIDrAOMmIQgZGFj8o8MHsAwmYqFninJBKCQPTaIBkCziaOHCJswGHktITCd/gD8DnIYeTs0O5CV9s8qTt+/7e5/f8Lu/vnOf+Vx9/tX+Uxl/TGKAJ6NcGaKcAJzDNb6x9gb0PYJNw5o5B/Bqd6AP1QlBQkBBsChZCQkIEc4iZ4O/dNWOQUdDr9YJOq3uIMw0QozldxP7+6VqtdspgMAjBwcGCxWIRwsLChPDwcCEiIuIZcI17oZZQCqJQCpmHkKL/5BwprTHoDWt0HBoauuskMjLyWKAtxVAIOARwdZ7UeSejNpvNQniYFO2JwawwaywNSjiEkqiPdh4Q0BZkCKJzKd2nADkkEYG6wI+PityK2q1bzJZ9zmNiYtaysrJc5eXlP6Wmpv5+UiEUAW6W442DGk5jMpkWUDfWnAIkwKlz45+Njp2dnRqgGGh0OBz9447x/vHx8f7e3t6vaAORq7Q/COSGjz/QmIZ9AlDzRqPRSKUUIKGmpmYCDm2ARm6P/5EypNHG7XZ/WFhYeJ/nfIDcFCDAz419AmDwULxqEqKiolaXl5eLfWVMrVbHIGsXgZf4LYrSAxU9PT3fgM9LDgWYBQpYxRmTRKbRaM6jPtxk80nIzc2dZeQKxwmwn0KzCpgRErD2AKQFopD0tra275R8hCiAYt6SSGNjYzuxyE0JzIbVanUonGt0Ot0iph2zs1JZWTlZVVV1j795bQMDA59CRAxtt7a2slJSUpbIpQTLEBcXd0cuYBIC6FQCjc7FnJuXC8C4zaBz2g4ODvYh0leBV2ZmZrrR6X9z6CQnJ18Ws6C69v61W+Qhn5Ib9o8lYkyv30DKDQn8T2foWOnh0tXVdQHrXlGsC1fqKvfhLGRsbOzTvs/7hjY3NyV7p9OZi9JKnBKMJgEZW8dZ3a4hyFZJqgQFIM1WWecbW1tbvwWJV3zo8F4TTzAxB9F8lxi5zF6HibhyEHfGixnP7xqiLn9RqRI0qq2tvaC4fla73d5XUVExGR0d7YYNa78nZk2tUhfI7SHA7YubT9bSktKkXSMMiWU2kRIkzszMLNwjU6lUBjRiW1lZ2SWx/u8uLS190tDQMIqoPGhQdvo9WdOqweM5iHtgYCBy1zAxMdHFSJQgYUJCQsceIZy8iS4XcAXd5N4rC5CTnp6+AFKO7AVZtlTI0hMf3BS6Kl3xvLw8Ow8rIUY0j8jVtEONK7Dm5QwARrGeC3AQdWJ9nfY2m+2uvATZ2dk/+uLGFf1FMuru7n6Pw4QESojOqsWIwtvb228jAg/X4ZjgEBJ4vqCgYHptbc0mF5CWlubwwc3m/lIy2tjYiONNoKESooCniPS8KOLi3Nxcb11dnb2oqMhJNDc3fz80NHQLe2XKyYkMPvbFOTw8/Lq8s1Xoajs3fIARMtI/IaJetA8GcgGbiCzgBeXzAvZXcE7Jx8Z+wNnxjDG6uYQPCTrzBRLhigkqP9UdAFft8A9synAtV8QSSUAGvCMjI1eV9oxK29LS8jWNDhWhVu8J8QBOEdNAj5+fXz2+r1MkbZTOiZKSkkn4svhUjY0MPAGnefAwUIQcdEYg5fyW1pXncN1/xaguPjR1Xq+3Mj4+/hEJzhB8IXEvLi6+gyAPfzFlF3s8nkY8iu8zojMAH72P8LkObr3k6CgRQEV1dfUPqJvnNM7z8/N/xjV/G3wGuY/jCnl5dnb2Zk5OzjQaTDgJkpKSXKOjo/3gKFXMhhOLCAEuu1yum01NTXfxSs4RKvgCXmwW8RJrn5iY+Ex8g45U8p1GiAmwAleAju3t7Y8YIYGeucE1oF4cUOHH5f0XNpeUB2CMb3wAAAAASUVORK5CYII="></a>
                                    <a class="btn btn-small" href="#twitter"><img width="32" height="32" title="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEp0lEQVR42sWWX0ibVxjGP/Ply///mhgxpJWBblKCIzBiKNEtKsqgmtgx4q6UwURst66Cd6NsFpywemPZYFaYN4XcWCZlMhkEZllbWGFUVCp1tVnPheClF17Z5z145Ou+k2DMYMov6Dnved7nvOecVxXVpP6vVBRsVs1hzawNWzTLjNVivQ1WwH2LxTKDsZuY61FV1fafGoCgAuGPKZnD7mAul4t5PB7m9XqZz+cj+M8et4c5nU5mt9l3YOgOzMaqNoDEKZvVtupyupjP62OBQIDV1dWxYDDICYVCHP57XZDV1taygD/ADTocDkZVgpHGig1gkYKSjjsdTkpMwjxRfX39qYAhMsuNoGqb2Ej7qQ0guQrnP6DUtBux0zOBatER0dHsYkOXZQYMO8cZ3nC73PpyVwVp+H1+hmPc1TTtYlkDcJnDzim5QSiVSv2ezWR/aWtre3JWE9DewnFEpQYw4XO73dsIpAUCfv7j4+N3j46OBkAX+CQejz+muUqADr0W4i5V+sSAyWTiTw0X5htAu+fBAr/fzxYWFj7E01JQQsVqtSoDAwMLIq4SSIsqDJ33KC/BP8xmcwgTL+nCQFgPdz00NPQOTIpYBcfxnYitFOiRkWWhx3ePc7qC8tOEAapKX1/fBQoWBjKZzCTEijRfKTBOVfgHVfCdGIhEIstIRJMGyFh3d7coGY/HPWgF18D1f3N4eDgxODi4LNMCwgBdzhzp8aeHNvr3cXs1QME48yRdGFONiRCXFgDtTWDCdHBw8AEa0nOZHuCbOhc99xPpkEiYOh4MSHE5DQbKg12RCRjYKqVJBiKNkQe0eSWZTMbRt2lQCroYNwBhJDgd2NT75TSpqjC4zg10dXVRMA1KwRw3AGH9EbyLxffAigGzmf5EF8tpcgOh+k1uYGRkJGG322mnUmiuv78/WVNTowBe4ubm5jH0BYaewGw2mwGhVw5c/L/oQitoMhG4fQWYDAhSG+7RG+jt7f0c4zR/ZlpbWwtkgC6M1tDQsEGuZdAuOzo6PtIbmJub68BZvqT5s0DmOzs7F086IX65R4MyyEA0Gr1FccIETHvW1ta+QkP6OZFIFNAnVgTpdPpXvPUXtLac5ujo6BcnBiYnJ68en6kBjJPrZ4jz6KsAE16QApdAt46e+fn5b2VaAvSCne3t7RbS4oJ7e3vncSmeUjIZaDC08I4woDMiBSYa8d53SumhU+YRo3IDkOKNY2Ji4hYlkmLWGC4MwxO8jXgPKPuNOA0XbVemhd0/39jYSCOGx9KHMPF2S0vL41Im8L7JBLGJxV9iTRyoEgM+xN4AUp2xsbEf6eKLaL1r5dHDR5+SQ1osRZgw8WqUBPPSte3t7b8heUxv940vTDoXFxen0CheUKJy4KxLIY1vamp6sr+/f4nOvewXTISXlpa+xt/7LSFYLbFY7EGxWBymi2fMKDcRXF9fv4Zu9Uc1iVH2V9lsdgl6GaAJ/dOacIDL09PT34fD4acoHasE/ONaWF1dnYLGRYN4hUbeAsOzs7Nz6HT3cUmfYZjJwDn/mcvl8kh887hBBfRa1Ro5D9LgM3A9n8/PCAqFwhSNgRxIVJL4NeQkXBMmcJ3iAAAAAElFTkSuQmCC"></a>
                                    <a class="btn btn-small" href="#email"><img width="32" height="32" title="" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEwUlEQVR42sWWX0hkdRzFxxnHGWecUWf8h6AIm5JI4R/UVUlQNlTIZRMijMUXg6BCQVlWqJCi2EHIygiJxFgUyRFCfDCx7SVYtW0XAxdbDSR35fqi+OK7nc/AHa5Xi/HP0pUz3vn9zvec8/urDpfT9b/iLGS3O9l9LcWd8rknxbPg9XjXBAPwTht9cOBeWoBkV3JQwrdl8pff5zeCgaCRkZ5hZGZmGqFQCPBOW6wPDlxqqL1QAI2m05fq+zMQCMRMwuGwkZ2dbeTk5Bi5ubnHQBt9cOBSQy0aZw6g5G5N6R2/329kZGQYWeEs0zghwKWGWjSk9RmaCQWA6PV6pxkB03u6ceJB0EALzdNC2M0dqd7USNw8KxuRCwENMwTaePxrAG2czrS0NCOUGTKysrIuFWiijcexAE6nM4bk5OSgUm6wbmyk5wG08cDL9I19uFwuRzAY/EidJ47X5OTkF0dHR/3nwcjIyDd2PTzwwhNvc/R+Tc/f6enpkOIoKCjYVOrfPB5PYUpKiuMsUE2R9FYLCwufWDXxwAvPeAB1vEEymcWJvLe2ts4NDQ1FtIMfKHEp3EQgbllqauqjwcHBLzs6OqJ2XbzwhAvZoZQTmhY64yBpdXX1hKayaGxs7GMJ/i5uTQLmVeL+MTw8HFFtSX19/ShaVm288MQ7dvTy8vIe0QjRBN+rqqom3G63Q0L50z9Mf6hr9qH415xJMjsJtBoxHx8f/5Tg1F6tvTrKiO3aeOLN+jtEeCbQEQffCWCeWwnmzM/PD+h6XVXb66eYv6ZzvhaNRgcJzOiora2tHQ2kndTGE2/ue6/P56PBCjaKGQADM0So9MXS++I/VvvbFvNO2opfKH6ws7OTB5d2QhAALbs+nng7urq6AhoVhsfAHV5ZWck6IQYI+05LS8vd3d3d3nAo/KuMbwvv66/gw/X19f7r7de/171/C64ZmgBo2fXxxJtRudXwDJIVJKyoqJhgYyUlJbHBGvPz8+cODw9foWZpaeldTedjcZ8sLi7eUptPqNPmmhO3jRpqa2pqRtGy6+OJjnkK1iBZoc0UDyAUadrubW5uvqUipx6CBxYWFj6YnZ1lzTPMC21jY6NTG+0Xfb9iBkDLro8n/FiRjttPkKzQ2TfKy8tZAr/e56emprjdPIwMIM6eELLNWQJwZmZm+lRzj1ppj6Jl18cT75hQd3f3J7q5MI2D7wTQ76/6+vru2I3ssAULDwwMRHQjfltXV/f1adp4xm/ClZWVSq3LUzqs0Dk2ysrKolwoFvNEQxRrA06goSDHdPHCE545be4bN278CNEKiktKSmZFvAnETQgmX7VRNOy6eOEprgLohyOzvLzcpo22RYEVuiwMrZXhcp4N1FBr18MDLzzx5oMfZsHb09PzHUUn4DofTtPCAy/Tlw9riJeam5sXID4PoI2H1fPYw5rs7e21aeMtM4WXCTTRxuM/HyV0HRwcvNnU1LSgjWRcBtBCE21HIg9E4dXe3t67urW2lNo4D6hFAy27eaJBXt7e3u5vb2+f0/F5mqgxXGqoRcNxkYerVWjc39/vj0Qiow0NDT/rf8VVXadb6jYA77TRBwcuNdQ6Luvh4hCuCK3CTeE9oR/wTht9cOAmqvsPxzF+pHT9UB8AAAAASUVORK5CYII="></a>
                                </div>
                                Locutor/DJ: <span class="text-error" style="width: 200px;">AutoDJ</span><br>
                                Tocando Agora:
                                <iframe style="margin-bottom: -5px;" name="playerMusicaAtual" src="includes/mm.php" width="150" height="20" frameborder="0" scrolling="no"></iframe>
                                <br>
                                <center style="padding-bottom: 5px;"> <button class="btn btn-danger" onclick="abrir('http://radiohorizon.com.br/site/ouvir.php',300,30);"><i class="icon-play icon-white"></i>Clique aqui para ouvir!<i class="icon-headphones icon-white"></i></button></center>
                            </div>
                        </div>
                        <div id="boxsLateral">
                            <div class="text"><h4>\\ PEÇA SUA MÚSICA! //</h4><i class="icon-boxTitulo2 visible-desktop"></i></div>
                            <form method="post" action="" id="pedidoMusica" style="margin-top: 5px; padding-bottom: 5px;">
                                <center>
                                    <input type="text" id="nome" name="nome" placeholder="Nome"/>
                                    <input type="text" id="cidade" name="cidade" placeholder="Cidade"/>
                                    <input type="text" id="Estado" name="estado" placeholder="Estado"/>
                                    <textarea id="pedido" placeholder="Escreva aqui o seu pedido">Pedido Aqui :)</textarea>
                                    <input type="submit" value="Enviar!" class="btn btn-primary" />
                                </center>
                            </form>
                        </div>
                        <div id="boxsLateral">
                            <div class="text"><h4>\\ TWITTER //</h4><i class="icon-boxTitulo2 visible-desktop"></i></div>
                            <a class="twitter-timeline" href="https://twitter.com/radiohorizon_" data-widget-id="350828124486901760">Tweets de @radiohorizon_</a>
                            <script>!function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                    if (!d.getElementById(id)) {
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = p + "://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }
                                }(document, "script", "twitter-wjs");</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer" id="footer">

            <div class="container">
                <center>
                    <span class="muted credit">Rádio Horizon &COPY; 2013 - Todos os Direitos Reservados - Desenvolvido por <a href="http://millerdev.com.br" target="_blank">iMillerp</a></span>
                    <br/>
                    <div style="margin-top: 25px;">
                        <a href="#" class="social44 facebook medialinks">&nbsp;</a>
                        <a href="#" class="social44 twitter medialinks">&nbsp;</a>
                        <a href="#" class="social44 google medialinks">&nbsp;</a>
                        <a href="#" class="social44 youtube medialinks">&nbsp;</a>
                        <a href="#" class="social44 instagram medialinks">&nbsp;</a>
                        <a hrf="#" class="social44 vimeo medialinks">&nbsp;</a>
                    </div>
                </center>
            </div><embed height="1" width="1" flashvars="file=http://74.222.1.212:8780/;type=mp3&amp;volume=0&amp;bufferlength=10&amp;autostart=true" allowscriptaccess="always" quality="high" src="http://stream.maisouvida.com/player.swf" type="application/x-shockwave-flash">
        </div>
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.skitter.min.js"></script>
        <script type="text/javascript" src="js/default.js"></script>
    </body>
</html>