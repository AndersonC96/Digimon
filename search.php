<?php
    $nome_digimon = '';
    $url = '';
    $msg_usuario = '';
    $pesq_nome = false;
    $pesq_nivel = false;
    $cont_retorno = 0;
    if(isset($_POST['btn_pesq_nome'])){// Pesquisa por nome
        $nome_digimon = $_POST['txtDigimon'];// Pega o nome digitado
        /*$pesq_nome = true;
        $pesq_nivel = false;
        $url = 'http://digimon-api.herokuapp.com/api/digimon/name/'.$nome_digimon;
        $json = file_get_contents($url);
        $obj = json_decode($json);
        $cont_retorno = count($obj);
        if($cont_retorno == 0){
            $msg_usuario = 'Nenhum digimon encontrado!';
        }*/
        $url = "https://digimon-api.vercel.app/api/digimon/name/".$nome_digimon;// URL para pesquisa por nome
        $msg_usuario = 'Digimon não encontrado =/';// Mensagem padrão
        $pesq_nome = true;// Pesquisa por nome
        $url = str_replace(' ', "%20", $url);// Substitui espaço por %20
    }else if(isset($_POST['btn_pesq_nivel'])){// Pesquisa por nivel
        //$nivel_digimon = $_POST['txtDigimon'];// Pega o nivel digitado
        /*$pesq_nome = false;
        $pesq_nivel = true;
        $url = 'http://digimon-api.herokuapp.com/api/digimon/level/'.$nivel_digimon;
        $json = file_get_contents($url);
        $obj = json_decode($json);
        $cont_retorno = count($obj);
        if($cont_retorno == 0){
            $msg_usuario = 'Nenhum digimon encontrado!';
        }*/
        /*$url = "https://digimon-api.herokuapp.com/api/digimon/level/".$nivel_digimon;// URL para pesquisa por nivel
        $msg_usuario = 'Digimon não encontrado =/';// Mensagem padrão
        $pesq_nivel = true;// Pesquisa por nivel
        $url = str_replace(' ', "%20", $url);// Substitui espaço por %20*/
        $nivel_digimon = $_POST['txtNivel'];// Pega o nivel digitado
        $url = "https://digimon-api.vercel.app/api/digimon/level/".$nivel_digimon;// URL para pesquisa por nivel
        $msg_usuario = 'Nível não conhecido =/';// Mensagem padrão
        $pesq_nivel = true;// Pesquisa por nivel
        $url = str_replace(' ', "%20", $url);
    }
    if($pesq_nome == true || $pesq_nivel == true){// Se pesquisa por nome ou nivel
        /*$json = file_get_contents($url);// Pega o conteúdo da URL
        $obj = json_decode($json);// Converte o conteúdo em objeto
        $cont_retorno = count($obj);// Conta quantos objetos tem no objeto
        if($cont_retorno == 0){// Se não encontrou nenhum digimon
            $msg_usuario = 'Nenhum digimon encontrado!';// Mensagem padrão
        }*/
        function pesquisa_digimon(){// Função para pesquisar digimon
            /*global $url;// Declara a variável global
            $json = file_get_contents($url);// Pega o conteúdo da URL
            $obj = json_decode($json);// Converte o conteúdo em objeto
            $cont_retorno = count($obj);// Conta quantos objetos tem no objeto
            if($cont_retorno == 0){// Se não encontrou nenhum digimon
                $msg_usuario = 'Nenhum digimon encontrado!';// Mensagem padrão
            }
            return $obj;// Retorna o objeto*/
            $cod_http = '';// Código de retorno da requisição
            $req = curl_init($GLOBALS['url']);// Inicia a requisição
            curl_setopt($req, CURLOPT_RETURNTRANSFER, true);// Retorna o conteúdo da requisição
            curl_setopt($req, CURLOPT_SSL_VERIFYPEER, false);// Ignora certificado SSL
            $result = json_decode(curl_exec($req));// Converte o conteúdo em objeto
            $cod_http = curl_getinfo($req);// Pega o código de retorno da requisição
            switch($cod_http['http_code']){// Verifica o código de retorno
                /*case 200:
                    $msg_usuario = 'Digimon encontrado!';// Mensagem padrão
                    break;
                case 404:
                    $msg_usuario = 'Digimon não encontrado =/';// Mensagem padrão
                    break;
                default:
                    $msg_usuario = 'Erro ao pesquisar digimon!';// Mensagem padrão
                    break;*/
                case 500:
                    echo 'Serviço indisponível';
                    die();
                    break;
                case 400:
                    echo '<div align="center" class="msg-usuario">'.$GLOBALS['msg_usuario'].'</div>';
                    echo '<script>'.'setTimeout(function(){'.'var msg = document.getElementsByClassName("msg-usuario");'.'while(msg.length > 0){'.'msg[0].parentNode.removeChild(msg[0]);'.'}'.'}, 2000);'.'</script>';
                    die();
                    break;
                case 200:
                    $nome = $result[0]->name;
                    $imagem = $result[0]->img;
                    $nivel = $result[0]->level;
                    $array = array($nome, $imagem, $nivel);
                    if(count($result) > 1){// Se encontrou mais de um digimon
                        //$msg_usuario = 'Mais de um digimon encontrado!';// Mensagem padrão
                        for($i = 0; $i < count($result); $i++){// Percorre o objeto
                            /*$nome = $result[$i]->name;
                            $imagem = $result[$i]->img;
                            $nivel = $result[$i]->level;
                            $array[$i] = array($nome, $imagem, $nivel);*/
                            $GLOBALS['cont_retorno'] = count($result);// Conta quantos digimon foram encontrados
                            foreach($result as $digimon){// Percorre o objeto
                                /*$nome = $digimon->name;
                                $imagem = $digimon->img;
                                $nivel = $digimon->level;
                                $array[$i] = array($nome, $imagem, $nivel);*/
                                $nome = $result[$i]->name;
                                $imagem = $result[$i]->img;
                                $nivel = $result[$i]->level;
                            }
                            array_push($array, $nome, $imagem, $nivel);// Adiciona os dados do digimon na array
                        }
                    }
                    return $array;
                    break;
            }
        }
    }
?>