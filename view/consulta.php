<div class="row">
	<div class="col-md-3 mb-3">
  		<label>
  			<b>ID DA HASH</b>
  		</label>
  		<input type="text" class="form-control" id="id" placeholder="Informe o ID">
  		<div id="erro_id" style="color:red; font-weight: bold; display:none">
        	INFORME O ID DA HASH
      	</div>
	</div>
	
	<div class="col-md-4 mb-3">
  		<label>
  			<b>HASH</b>
  		</label>
  		<input type="text" class="form-control" id="hash" placeholder="Informe a Hash">
  		<div id="erro_hash" style="color:red; font-weight: bold; display:none">
        	INFORME O NÚMERO DA HASH
      	</div>
	</div>

	<div class="col-md-4">
		<button style="position:relative; top:32px;" type="button" class="btn btn-success" onclick="principal.consultaHash()">
			CONSULTAR
		</button>

		<button style="position:relative; top:32px;" type="button" class="btn btn-info" onclick="principal.limparHash()">
			LIMPAR
		</button>
	</div>
</div>

<br>
<div class="row">
	<div class="col-md-10" id="resultado_hash" style="display:none">
		<label>
  			<b>Resultado</b>
  		</label>
		<textarea id="resultado" class="form-control" rows="3" ></textarea>
	</div>
</div>