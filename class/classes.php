<?php

        #verifica se existe alguma lista:
            #se houver alguma lista então contar quantos itens possui.
            #while pra mesclar todos os itens string e por na variavel.
            #variavel recebe essa mesclagem.
            #mostrar variavel na tela em option.
        #se não existir nenhuma lista então:
            #criar lista.

        # JS ação de clicar em botão
            #esmaecer a tela /abrir uma div, com as informações, alem da tabela com as informações ;
require_once "class/Controller.php";
class verif  {
    
    public $op001;
    public $op002;
    public $op003;
    public $op004;
    public $urt;
    public $urt2;
    public $urt3;
    public $urt4;
    public $c;
    public $e;
    public $g;
    public $h;
    public $mas;
    public $ims;
    public $acs;
    public $mus;

        
    function verify(){
         #verifica se existe alguma lista.
         #Se existeir uma lista então fazer contagem e colocar nas variaveis especificas.
         #se não existir uma lista(array) então rodar a função de criação de lista.
        
        $ve = (isset($op001[0]));
        if ($ve == true) {
            #essa verificação se não existir uma chamada, irá notificar que ainda não possui uma lista, a lista é criada dentro do box de edição de itens.
            $this->$c = count($op001);
            $this->$e = count($op002);
            $this->$g = count($op003);
            $this->$h = count($op004);
            if ($this->$c == 1 or $this->$e == 1 or $this->$g == 1 or $this->$h == 1) {
                
                while ($this->$c != 0 and $this->$e != 0 and $this->$g != 0 and $this->$h != 0) {
                $this->$urt = $urt."<option>".$op001[$c]."</option></n>";
                $this->$urt2 = $urt."<option>".$op002[$e]."</option></n>";
                $this->$urt3 = $urt."<option>".$op003[$g]."</option></n>";
                $this->$urt4 = $urt."<option>".$op004[$h]."</option></n>";
                $this->$c = $c - 1;
                $this->$e = $e - 1;
                $this->$g = $g - 1;
                $this->$h = $h - 1;
                }}
            else {
                $this->$urt = "<option>Criar item</option>";
                #$this->$urt2 = "<option>Criar item</option>";
                #$this->$urt3 = "<option>Criar item</option>";
                #$this->$urt4 = "<option>Criar item</option>";
                }
            
            
        }
        else {
                    $op001 = array();
                    $op002 = array();
                    $op003 = array();
                    $op004 = array();
                    $urt = "<option>Criar item</option>";
                    #$urt2 = "<option>Criar item</option>";
                    #$urt3 = "<option>Criar item</option>";
                    #$urt4 = "<option>Criar item</option>";
                    
           } }
        
    function recdefadd(){
        #criar o sistema de adição do item à lista "urt".
        if (isset($_GET['ma'])){
            $this->$mas = $_GET["ma"]; #recebe do arquivo index o valor do input com name 'ma'.
            $v->verify(); #verifica pra ver se ja foi criado/cria ou define da urt a lista.
            $this->$mas = array_push($op001, $mas); #adiciona o item ao array $op001.
               
        }
        if (isset($_GET['im'])){
            $this->$ims = $_GET["im"];
            $v->verify();
            $this->$op002 = array_push($op002, $ims);
            
        }
        if (isset($_GET['ac'])){
            $this->$acs = $_GET["ac"];
            $v->verify();
            $this->$op003 = array_push($op003, $acs);
            
        }
       if (isset($_GET['mu'])){
            $this->$mus = $_GET["mu"];
            $v->verify();
            $this->$op004 = array_push($op004, $mus);
            
       }
    }
    

}?> 