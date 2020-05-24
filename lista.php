<div class="js-upload-finished">
            <h3>Seus arquivos salvos em nosso sistema</h3>
            <div class="list-group">
            <table>
<?php
$pasta = "arquivos/";
if(is_dir($pasta))
{
$diretorio = dir($pasta);
while(($arquivo = $diretorio->read()) !== false)
{
if($arquivo != "." && $arquivo != "..")
{
?>
        <tr>
          <td>
           <br>
            </td>
             </tr>
              <tr>
                <div class="container">
                 <form name="arquivos" method="post" action="">
                  <div class="box"> 
                 <td><button type="" class="btn btn-xs btn-danger" name="excluir" class="btn btn-sm btn-danger" id=""><span class="glyphicon glyphicon-remove"></span>Excluir</button></td>
               <td><a href="../tcc/arquivos/<?php echo $logado."/".$arquivo ?>" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-save"></span>Baixar</a></td>
             <td><span class="badge alert-success pull-right"><?php echo $arquivo ?></span></td></span>
        
        </form>
           
          <?php
            
            if(isset($_POST['excluir'])){
            unlink("arquivos/"."/$arquivo");
            }
        ?>    
           
        <?php
        }
                 }
            $diretorio->close();
           }
             else
            {
            echo 'A pasta nao existe.';
            }
             ?>
        </div>
         </table>
        </div>
    </tr>
            </div>