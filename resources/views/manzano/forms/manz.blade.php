<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control ','placeholder'=>'Ingresa el nombre del manzano'])!!}
</div>

<div class="form-group">
    {!!Form::label('id_proyecto','Tipo de Proyecto:')!!}
    {!!Form::select('id_proyecto',$proyectos,null,array('class'=>'form-control'))!!}
</div>
