<?php
    if(function_exists('pesquisa_digimon')){// Verifica se a função existe
        $result = pesquisa_digimon();// Chama a função
        $qtd = sizeof($result);// Pega o tamanho do array
        if($pesq_nome && $qtd == 3){// Se pesquisa por nome e encontrou 3 digimons
            echo '<div class="row result_pesq_nome">'.'<div class="col-md-12">'.'<img src="'.$result[1].'" class="img-fluid"><br><hr>'.'<p><span>Nome: </span>'.$result[0].'</p>'.'<p><span>Nível: </span>'.$result[2].'</p><br>'.'</div>'.'</div>';
        }else if($pesq_nivel && $qtd > 3){
            $cont = 0;// Contador
            for($i = 0; $i < count($result); $i++){// Percorre o objeto
                $cont++;// Incrementa o contador
                if($cont == 94 && $GLOBALS['cont_retorno'] == 31){// Se encontrou 31 digimons
                    break;
                }else if($cont == 202 && $GLOBALS['cont_retorno'] == 67){// Se encontrou 67 digimons
                    break;
                }else if($cont == 139 && $GLOBALS['cont_retorno'] == 46){// Se encontrou 46 digimons
                    break;
                }else if($cont == 97 && $GLOBALS['cont_retorno'] == 32){// Se encontrou 32 digimons
                    break;
                }else if($cont == 37 && $GLOBALS['cont_retorno'] == 12){// Se encontrou 12 digimons
                    break;
                }else if($cont == 28 && $GLOBALS['cont_retorno'] == 9){// Se encontrou 9 digimons
                    break;
                }else{
                    echo '<div class="row result_pesq_nivel">'.'<div class="col-md-6">'.'<img src="'.$result[3+$cont].'" class="img-fluid"><br><hr>'.'<p><span>Nome: </span>'.$result[3+$cont-1].'</p>'.'<p><span>Nível: </span>'.$result[2].'</p><br>'.'</div>'.'<div class="col-md-6">';
                    $cont += 3;
                }
                if($cont == 94 && $GLOBALS['cont_retorno'] == 31){// Se encontrou 31 digimons
                    break;
                }else if($cont == 202 && $GLOBALS['cont_retorno'] == 67){// Se encontrou 67 digimons
                    break;
                }else if($cont == 139 && $GLOBALS['cont_retorno'] == 46){// Se encontrou 46 digimons
                    break;
                }else if($cont == 97 && $GLOBALS['cont_retorno'] == 32){// Se encontrou 32 digimons
                    break;
                }else if($cont == 37 && $GLOBALS['cont_retorno'] == 12){// Se encontrou 12 digimons
                    break;
                }else if($cont == 28 && $GLOBALS['cont_retorno'] == 9){// Se encontrou 9 digimons
                    break;
                }else{// Se não
                    echo '<img src="'.$result[3+$cont].'" class="img-fluid"><br><hr>'.'<p><span>Nome: </span>'.$result[3+$cont-1].'</p>'.'<p><span>Nível: </span>'.$result[2].'</p><br>'.'</div>'.'</div>';
                    $cont += 2;
                }
            }
        }
    }












?>