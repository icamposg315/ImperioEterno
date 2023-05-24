<?php
session_start();
session_destroy();
header('location: ../LenguajesDeMarcas/index.php');
