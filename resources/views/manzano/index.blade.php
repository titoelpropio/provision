@extends('layouts.inicio')
    
    @section('contenido')
        @if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif
@include('alerts.request')

                @include('manzano.modal')
                <div class="panel panel-success">
     <div class="panel-heading">
          <ul class="nav nav-pills">
               <li class=""><a href="{!!URL::to('mapa')!!}">LOTES</a></li> 
            <li class="active"><a href="#">MANZANO</a></li>                        
        </ul>
    </div>  
                    <div class="panel-body">
                 <button class="btn btn-success" data-toggle='modal' data-target='#myModal'>
                    <i class="fa fa-plus-square" aria-hidden="true"></i>     
                </button>
               
  <div class="row"> 
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
        <H1>Manzano</H1>
        <table class="table table-striped table-bordered table-condensed table-hover">
        <thead>
        <th><CENTER>NOMBRE</CENTER></th>
                
        <th><CENTER>PROYECTO</CENTER></th>
     
        
        
        </thead>
         @foreach ($manzano as $mz)
            <TR>
            <td><CENTER>{{$mz->id}}</CENTER></td>
            <td><CENTER>{{$mz->nombre}}</CENTER></td>
            <td><CENTER>{{$mz->proyecto}}</CENTER></td>

        
            
            <td><CENTER>
            {!!link_to_route('manzano.edit', $title = 'Editar', $parameters = $cat, $attributes = ['class'=>'btn btn-primary'])!!}
            </CENTER></td>
        </TR>
        @endforeach 
        </table>
    {!!$manzano->render()!!}
    </div>
</div>
</div>
                        </div>
    @endsection