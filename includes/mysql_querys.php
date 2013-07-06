<?php

/**
 * WR-Panel
 *
 * @version 1.0.18
 * @author Miller P. Magalhães
 * @link http://www.millerdev.com.br
 *
 */
/**
 * Inicialização - "Conexão com MySQL"
 */
$site = new MySQL();
if (!$site->Open(radio_db, radio_host, radio_user, radio_pass)) {
    $site->Kill();
}
/**
 * Estatisticas - Conta usuarios Clube
 */
if (isset($_GET['pageid'])) {
    if ($site->Query("SELECT * FROM `pages` WHERE id =" . $_GET['pageid'])) {
        if ($site->RowCount() < 1) {
            $pagina_info = false;
        } else {
            $pagina_info = $site->RecordsArray();
        }
    } else {
        echo "<p>Query Failed</p>";
    }
}
?>
