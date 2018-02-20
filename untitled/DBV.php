<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 19/01/2018
 * Time: 16:11
 */

class DBV
{
    private $id;
    private $nome;
    private $data_nascimento;
    private $endereco;
    private $batizado;
    private $nome_pai;
    private $nome_mae;
    private $tipo_sanguineo;
    private $alergia;
    private $remedio;
    private $nao_atividade;

    /**
     * Desbravador constructor.
     * @param $id
     * @param $nome
     * @param $data_nascimento
     * @param $endereço
     * @param $batizado
     * @param $nome_pai
     * @param $nome_mae
     * @param $tipo_sanguineo
     * @param $alergia
     * @param $remedio
     * @param $nao_atividade
     */
    public function __construct($id, $nome, $data_nascimento, $endereco, $batizado, $nome_pai, $nome_mae, $tipo_sanguineo, $alergia, $remedio, $nao_atividade)
    {

        $this->id = $id;
        $this->nome = $nome;
        $this->data_nascimento = $data_nascimento;
        $this->endereço = $endereco;
        $this->batizado = $batizado;
        $this->nome_pai = $nome_pai;
        $this->nome_mae = $nome_mae;
        $this->tipo_sanguineo = $tipo_sanguineo;
        $this->alergia = $alergia;
        $this->remedio = $remedio;
        $this->nao_atividade = $nao_atividade;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereço
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getBatizado()
    {
        return $this->batizado;
    }

    /**
     * @param mixed $batizado
     */
    public function setBatizado($batizado)
    {
        $this->batizado = $batizado;
    }

    /**
     * @return mixed
     */
    public function getNomePai()
    {
        return $this->nome_pai;
    }

    /**
     * @param mixed $nome_pai
     */
    public function setNomePai($nome_pai)
    {
        $this->nome_pai = $nome_pai;
    }

    /**
     * @return mixed
     */
    public function getNomeMae()
    {
        return $this->nome_mae;
    }

    /**
     * @param mixed $nome_mae
     */
    public function setNomeMae($nome_mae)
    {
        $this->nome_mae = $nome_mae;
    }

    /**
     * @return mixed
     */
    public function getTipoSanguineo()
    {
        return $this->tipo_sanguineo;
    }

    /**
     * @param mixed $tipo_sanguineo
     */
    public function setTipoSanguineo($tipo_sanguineo)
    {
        $this->tipo_sanguineo = $tipo_sanguineo;
    }

    /**
     * @return mixed
     */
    public function getAlergia()
    {
        return $this->alergia;
    }

    /**
     * @param mixed $alergia
     */
    public function setAlergia($alergia)
    {
        $this->alergia = $alergia;
    }

    /**
     * @return mixed
     */
    public function getRemedio()
    {
        return $this->remedio;
    }

    /**
     * @param mixed $remedio
     */
    public function setRemedio($remedio)
    {
        $this->remedio = $remedio;
    }

    /**
     * @return mixed
     */
    public function getNaoAtividade()
    {
        return $this->nao_atividade;
    }

    /**
     * @param mixed $nao_atividade
     */
    public function setNaoAtividade($nao_atividade)
    {
        $this->nao_atividade = $nao_atividade;
    }
}