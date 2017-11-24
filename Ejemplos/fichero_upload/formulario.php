<HTML>
	<BODY>
	<FORM ENCTYPE="multipart/form-data" ACTION="respuesta.php" METHOD="post"> 
		<!-- con este input "oculto" establecemos el limite máximo
		# del tamaño del fichero a transferir. En este ejemplo 50.000 bytes //-->
		<INPUT type="hidden" name="lim_tamano" value="50000"> 
		<p><b>Archivo a transferir<b><br> 
		<INPUT type="file" name="archivo"></p> 
		<p><INPUT type="submit" name="enviar" value="Aceptar"></p>
	</FORM>
</BODY>
</HTML>


