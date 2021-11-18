<?php 

    function carrega_pagina(){
        if (isset($_GET ['p']) && !empty ($_GET ['p'])) {
            $pagina = filter_input(INPUT_GET,'p',FILTER_SANITIZE_URL);
        require_once ($pagina);
           } else{
            echo '';
           }
        }
    
        
  

?>