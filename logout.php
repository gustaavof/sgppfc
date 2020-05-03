<?php
session_start();
// destruição de todas as sessoes que estão abertas no momento
session_destroy();
// retorna para a página de login novamente
header('Location: index.php');
exit();