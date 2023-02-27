<?php 

namespace App\DAO;

use App\Model\EnderecoModel;


class EnderecoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();   
    }

    public function selectByCep(int $cep)
    {
        $sql = "SELECT * FROM logradouro WHERE cep = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $cep);
        $stmt->execute();

        $endereco_obj->arr_cidades = 
        $stmt->fetchObject("ApiCep\Model\EnderecoModel");

        $endereco_obj->arr_cidades = 
        $this->selectCidadesByUf($endereco_obj->UF);

        return $endereco_obj;
    }

    public function selectCidadesByUf($UF)
    {
        $sql = "SELECT * FROM cidade WHERE uf = ?
        ORDER BY descricao ";
    }


}