<?php

use ApiCep\Controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
    {
//Exemplo de acesso


        //http://localhost:8000/endereco/by-cep?cep=17210580
        case '/endereco/by-cep':
        EnderecoController::getLogradouroByCep();
        break;
    
        //http://localhost:8000/logradouro/by-bairro?id_cidade=4874&bairro=Jardim América
        case '/logradouro/by-bairro':
        EnderecoController::getLogradouroByBairroAndCidade();
        break;
    
        //http://localhost:8000/cep/by-logradouro?logradouro=Rua Raphael de Almeida Lei
        case '/cep/by-logradouro':
            EnderecoController::getCepByLogradouro();
        break;
    
        //http://localhost:8000/cidade/by-uf?uf=SP
        case '/cidade/by-uf':
        EnderecoController::getCidadesByUf();
        break;
    
        //http://localhost:8000/bairro/by-cidade?id=4874
        case 'bairro/by-cidade':
            EnderecoController::getBairrosByIdCidade();
        break;
    
        default:
            http_response_code(403);
        break;

        
    
    }
    
       