<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="titulogalpon" class="modal-title" >REGISTRAR LOTE</h4>
      </div>

      <div class="modal-body">
      {!!Form::open(['route'=>'manzano.store', 'method'=>'POST'])!!}
      <input type="text" name="punto" id="punto">

<div class="form-group">
    {!!Form::label('nro_lote','Nro Lote:')!!}
    {!!Form::text('nro_lote',null,['class'=>'form-control ','placeholder'=>'Ingresa el Nro de lote'])!!}
</div>

<div class="form-group">
    {!!Form::label('superficie','Superficie:')!!}
    {!!Form::text('superficie',null,['class'=>'form-control ','placeholder'=>'Ingresa la superficie'])!!}
</div>

<div class="form-group">
    {!!Form::label('id_manzano','Manzano:')!!}
    {!!Form::select('id_manzano',$manzano,null,array('class'=>'form-control'))!!}
</div>

  <div class="form-group">
      {!!Form::label('estado','Estado:')!!}
            {!!Form::select('estado', array('0' => 'DISPONIBLE', '1' => 'RESERVADO', '2' => 'VENDIDO'),null,array('id'=>'estado','class'=>'form-control'))!!}
  </div>  

    {!!Form::submit('REGISTRAR',['class'=>'btn btn-primary pull-right'])!!}
  {!!Form::close()!!}
       
  </div>

      <div class="modal-footer">

<!--footer del modal-->
      </div>
    </div>
  </div>
</div>
