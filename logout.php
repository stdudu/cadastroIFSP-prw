<?php
    include('inicia_sessao.php');
    //limpa sessao
    session_unset();
    //destroi sessao
    session_destroy();
    //volta para a pagina inicial
    header('Location: index.php');
?>