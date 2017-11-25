<html>
<head>
	<meta charset="UTF-8">
	
</head>
<body>			
	<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
		<div class="form-group">
			<label for="titulo">Titulo</label>
			<input type="text"  id="nombres" name="titulo" required value="{{old('titulo')}}" 
			class="form-control" placeholder="Ingrese el Titulo">
		</div>
	</div>
	<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
		<div class="form-group">
			<label for="resumen">Descripcion</label>
			<input type="text"  name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="Ingrese la Descripcion">
		</div>
	</div>
	<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
		<div class="form-group">
			<label for="foto">Archivo</label>
			<!-- la propiedad required value="{{old('nombre')}}" validara de que si e archivo es muygrande mostrata el texto en la vista pero con la condicio de que no cumple con los caracteres -->
			<input type="file" id="logo" name="archivo" required value="{{old('archivo')}}" class="form-control">
		</div>
	</div>
	<div class="col-lg-6 col-sm-6 col-m-6 col-xs-12">
		<div class="form-group">
			<label>Tipo</label>
			<select name="tipo" class="form-control selectpicker" data-live-search="true">
				<option value="Documentos">Documentos</option>
				<option value="Videos">Videos</option>
				<option value="Imagenes">Imagenes</option>
				<option value="Juegos">Juegos Educativos</option>
			</select>
		</div>
	</div>

</body>
</html>