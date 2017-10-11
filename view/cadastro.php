<div class="row">
	<div class="col-md-4 mb-3">
  		<label>
  			<b>HASH</b>
  		</label>
  		<input type="text" class="form-control" id="cadastro_hash" placeholder="Informe a Hash">
  		<div id="erro_cadastro_hash" style="color:red; font-weight: bold; display:none">
        	INFORME O NÚMERO DA HASH
      	</div>
	</div>

	<div class="col-md-4 mb-3">
  		<label>
  			<b>NOME</b>
  		</label>
  		<input type="text" class="form-control" id="cadastro_nome" placeholder="Informe o nome">
  		<div id="erro_cadastro_nome" style="color:red; font-weight: bold; display:none">
        	INFORME O NOME
      	</div>
	</div>


	<div class="col-md-2 mb-3">
  		<label>
  			<b>DT DE EXPIRAÇÃO</b>
  		</label>
  		<input type="text" class="form-control" id="cadastro_dt" placeholder="Informe a data">
  		<div id="erro_cadastro_dt" style="color:red; font-weight: bold; display:none">
        	INFORME A DATA
      	</div>
	</div>

	<div class="col-md-2">
		<button style="position:relative; top:32px;" type="button" class="btn btn-success" onclick="principal.salvar()">
			SALVAR
		</button>
	</div>
</div>
