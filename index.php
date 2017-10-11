<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  		<title>Consulta de Hash</title>
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="../js/index.js"></script>
	</head>
	
	<body>
    	<div class="container">
    		<br>
			<h2 style="text-align:center">Validador HASH</h2>
			<br>

			<div class="row">
				<div class="col-md-3 mb-3">
		      		<label>
		      			<b>ID DA HASH</b>
		      		</label>
		      		<input type="text" class="form-control" id="id" placeholder="Informe o ID">
    			</div>
				
				<div class="col-md-4 mb-3">
		      		<label>
		      			<b>HASH</b>
		      		</label>
		      		<input type="text" class="form-control" id="hash" placeholder="Informe a Hash">
    			</div>

    			<div class="col-md-4">
    				<button style="position:relative; top:32px;" type="button" class="btn btn-success">CONSULTAR</button>
    				<button style="position:relative; top:32px;" type="button" class="btn btn-info">LIMPAR</button>
    			</div>
			</div>

			<br>
			<div class="row">
				<div class="col-md-10">
					<label>
		      			<b>Resultado</b>
		      		</label>
    				<textarea class="form-control" rows="3"></textarea>
				</div>
			</div>
		</div>
	</body>
</html>