<?php

//interface
require_once __DIR__ . '/../interfaces/RedeSocial.php';

//Dao
require_once __DIR__ . '/../Dao/FacebookDao.php';

class Facebook implements RedeSocial
{

    private $redeSocialID;
    private $nomeRedeSocial;

    public function getRedeSocialID()
    {
        return $this->redeSocialID;
    }

    public function setRedeSocialID($redeSocialID)
    {
        $this->redeSocialID = $redeSocialID;
    }

    public function getNomeRedeSocial()
    {
        return $this->nomeRedeSocial;
    }

    public function setNomeRedeSocial($nomeRedeSocial)
    {
        $this->nomeRedeSocial = $nomeRedeSocial;
    }

    public static function find($nomeRedeSocial)
    {
        $facebookDao = new FacebookDao;

        $facebook = $facebookDao->load($nomeRedeSocial);
        return $facebook;
    }

    public static function insere($nomeRedeSocial)
    {
        $facebookDao = new FacebookDao;

        $facebookDao->insert($nomeRedeSocial);
    }

    public static function insereMensagem(Mensagem $mensagem)
    {
        $FacebookDao = new FacebookDao;

        return $FacebookDao->insertMensagem($mensagem);
    }

    public static function removerMensagem($codigoMensagem)
    {
        $FacebookDao = new FacebookDao;

        return $FacebookDao->deleteMensagem($codigoMensagem);
    }

    public static function criarUsuario(Usuario $u)
    {
        $facebookDao = new FacebookDao;
        $facebookDao->insertUsuario($u);
    }

    public static function removerUsuario($codigoUsuario)
    {
        $FacebookDao = new FacebookDao;

        return $FacebookDao->removeUsuario($codigoUsuario);
    }
}
