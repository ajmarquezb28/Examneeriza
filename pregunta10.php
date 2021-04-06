<script type="text/javascript">
	var usuario = document.getElementById("usuario");
	var clave = document.getElementById("clave");

	if(usuario!="" && clave!="" && usuario.length<=10 && clave.length <=10)
		document.getElementById("div_resultado").innerHTML="exitoso";
	else
		document.getElementById("div_resultado").innerHTML="Inválido";
</script>