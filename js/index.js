var principal = {

	nav: function(action){
		$("li div.nav-link").removeClass();
		$("li div").addClass("nav-link");
		$("#"+action).addClass("active");

		$.post("controller/"+action+".php", function(retorno){
			$("#conteudo").html(retorno);
			$("#cadastro_dt").inputmask("99/99/9999");
		});
	},


	consultaHash: function(){
		var me      = this,
			dados   = {},
		    id_hash = $.trim($("#id").val()), 
		    hash    = $.trim($("#hash").val());
		    $("#resultado_hash").hide();

		if(id_hash != "" && hash != ""){
			$("#erro_id").hide();
			$("#erro_hash").hide();

			dados.id   = id_hash;
			dados.hash = hash;

			$.post("controller/consulta.php", "&dados="+JSON.stringify(dados), function(retorno){
                $("#resultado").val(retorno);
                $("#resultado_hash").show();
            });
		} else {
			(id_hash == "") ? $("#erro_id").show()   : $("#erro_id").hide(); 
			(hash == "")    ? $("#erro_hash").show() : $("#erro_hash").hide(); 
		}    
	},

	limparHash: function(){
		$("#id").val("");
		$("#hash").val("");
		$("#resultado_hash").hide();
	},

	salvar: function(){
		var me      = this,
			dados   = {},
		    hash    = $.trim($("#cadastro_hash").val()), 
		    nome    = $.trim($("#cadastro_nome").val()),
		    data    = $.trim($("#cadastro_dt").val());

		if(hash != "" && nome != "" && data.replace(/[^\d]+/g,'') != ""){
			$("#erro_cadastro_hash").hide(); 
			$("#erro_cadastro_nome").hide();
			$("#erro_cadastro_dt").hide();


			dados.cadastro_hash = hash;
			dados.cadastro_nome = nome;
			dados.cadastro_dt = data;

			$.post("controller/cadastro.php", "&dados="+JSON.stringify(dados), function(retorno){
				$("#cadastro_hash").val("");
				$("#cadastro_nome").val("");
				$("#cadastro_dt").val("");

            	alert(retorno);
            });
		} else {
			(hash == "") 					   ? $("#erro_cadastro_hash").show()   : $("#erro_cadastro_hash").hide(); 
			(nome == "") 					   ? $("#erro_cadastro_nome").show() : $("#erro_cadastro_nome").hide();
			(data.replace(/[^\d]+/g,'') == "") ? $("#erro_cadastro_dt").show() : $("#erro_cadastro_dt").hide();

		}

	}
}






$(document).ready(function () {
	principal.nav("cadastro");
});