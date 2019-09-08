<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8"/>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script > 
        
        $(document).ready(function(){
            $("#b_c").show();
            $("#bt").hide();
            $("#cd").click(function(){
            $("#b_c").show(100)
            });
            
            $("#edt").click(function(){
            $("#bt").show(100),
            $("#b_c").hide(100)
            });
            $("#out").click(function(){
            $("#bt").hide(100),
            $("#b_c").show(100)
            
            });
            
        });
        
        </script>

  </head>
  <body>
      <h1>Familias de produtos</h1>
        <button id="ex">Exportar</button>
        <button id="im">Importar</button>
        <button id="cd">Cadastrar</button>



        <div id="b_c">
                <table border="1" style="margin: 1px; padding: 0px;">

                <tr>
                <td>Quantidade</td>
                <td>Material</td>
                <td>Impressão</td>
                </tr>
                <tr>
                <td><input type="number" name="num" alt="Quantidade" placeholder="1000"></td>
                <td>
                    <select name="" id="">
                    <option value="" placeholder="Selecionar" ></option>
                    <option value="" name="" >
                    </option>

                        
                    </select>
                </td> 
                <td><input type="text" name="" alt="Impressão" placeholder="Escolha.." ></td>
                </tr>
                <tr>
                <td colspan="3">Acabamento</td>
                </tr>
                <tr>
                <td colspan="3"><input type="text" style="width: 99.2%;"  placeholder="Escolha.." ></td>    
                </tr>
                <tr>
                <td>Multiplicador</td>
                <td>Preço</td>
                <td>Peso(Gramas)</td>
                </tr>
                <tr>
                <td><input type="text" placeholder="Escolha.."></td>
                <td><input type="text" placeholder="Escolha.."></td>
                <td><input type="text" placeholder="Escolha.."></td>    
                </tr>
                <tr>
                <td><form action="index.php" method="get"><input type="button" value="Editar" name="uutb" id="edt" ></form></td>
                <td></td>
                <td><form action="" method="get"><input type="submit" value="Cadastrar" name="uutbb" id="edr" style="float:right;" ></form></td>
                </tr>
            </table>
       </div>



        <div id="bt">
        <table border="1" style="margin: 1px; padding: 0px;">

                <tr>
                    <td>Material:</td>
                    <td><input type="text"></td>
                    <td><form action="index.php" method="get"><input type="submit" value="Cria Material" name="ma"></form></td>
                </tr>
                <tr>
                    <td>Impressão:</td>
                    <td><input type="text"></td>
                    <td><form action="index.php" method="get"><input type="submit" value="Cria Impressão" name="im"></form></td>
                </tr>
                <tr>
                    <td>Acabamento:</td>
                    <td><input type="text"></td>
                    <td><form action="index.php" method="get"><input type="submit" value="Cria Acabamento" name="ac"></form></td>
                </tr>
                <tr>
                    <td>Multiplicador:</td>
                    <td><input type="text"></td>
                    <td><form action="index.php" method="get"><input type="submit" value="Cria Mutiplicador" name="mu"></form></td>
                </tr>
                <td></td>
                <td></td>
                <td colspan="3" id="outd"><button id="out">Sair</button></td>
            </table>
        </div>

    <?php
      
      require_once "class/classes.php";
        
         $v = new verif();
         $v->op001="aa";
         $v->op002="aa";
         $v->op003="aa";
         $v->op004="aa";
         $v->urt="aa";
         $v->urt2="aa";
         $v->urt3="a";
         $v->urt4="aa";
         $v->c=0;
         $v->e=0;
         $v->g=0;
         $v->h=0;
         $v->mas="aa";
         $v->ims="a";
         $v->acs="aa";
         $v->mus="aa";   
         $v->verify();
         
        if (isset($_GET['edt'])){
            $v->verify(); #verificar se existe algo, se não existir cria um array.
            $v->verify(); #verifica novamente, após criado vai setar a variavel urt.
        }
        
        if (isset($_GET['ma'])){
            $v->recdefadd();
        }
        if (isset($_GET['im'])){
            $v->recdefadd();
        }
        if (isset($_GET['ac'])){
            $v->recdefadd();
        }
        if (isset($_GET['mu'])){
            $v->recdefadd();
        }
        
        
    ?>
     
          
               
                    
                         
                              
                                   
                                             

  </body>
</html>