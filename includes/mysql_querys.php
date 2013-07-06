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
$db = new MySQL();
if (!$db->Open(radio_db, radio_host, radio_user, radio_pass)) {
    $db->Kill();
}
/**
 * Estatisticas - Conta usuarios Clube
 */
if (isset($_GET['pageid'])) {
    if ($db->Query("SELECT * FROM `pages` WHERE id =" . $_GET['pageid'])) {
        if ($db->RowCount() < 1) {
            $pagina_info = false;
        } else {
            $pagina_info = $db->RecordsArray();
        }
    } else {
        echo "<p>Query Failed</p>";
    }
}
?>
