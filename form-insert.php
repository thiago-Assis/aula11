<?php include("cabecalho-cliente.php"); ?>

	<h1>DADOS DO CLIENTE</h1>

		<form action="insert-cliente.php" method="post">      		
    <table class="table">
				<tr>
          			<td>Nome Completo do Cliente:</td>  
        			<td> 
        				<input class="form-control" type="text" placeholder="EX.: ROBERTO CARLOS DA SILVA DIAS" name="nome" autofocus/><br>
        			</td>
        </tr>
				<tr>
          		<td>E-mail do Cliente:</td>  
        			<td> 
        				<input class="form-control" type="text" placeholder="EX.: robertocarlos@robertocarlos.com.br" name="email"/>
                <br>
        			</td>
        		</tr>
				<tr>
		  			<td><input class="btn btn-light" type="submit" value="ADICIONAR"/>
              		<input class="btn btn-light" type="reset"  value="CANCELAR"/>
          			</td>
          			<td></td>
				</tr>
      		</table>
    	</form>
    	
<?php include("rodape.php"); ?>