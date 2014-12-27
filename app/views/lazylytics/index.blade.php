@extends('layouts.theme-default')

@section('header')

<style>

.endpoint a {
  font-size: 18px;
  color: #00000;
  font-weight: 300;
  text-decoration: none;
}

.endpointCards {
    margin: 25px;
}

.endpointAvgCircle {
    display: block;
    width: 100px;
    height: 100px;
    background-image: url('//placehold.it/100');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.endpointAvgCircle div {
    position: relative;
    top: 30%;
    text-align: center;
    font-size: 16px;
}

.list-group-item:hover {
  background-color: #337ab7;
  opacity: .5;
}

</style>

@stop

@section('content')

        <div class="endpints col-xs-12 col-sm-10" data-spy="scroll" data-target="#sidebar-nav">
          
          <br/><br/>

          <div class="row">        
            <div class="col-sm-12">
                 <div class="panel panel-default bg-info">
                   <div class="panel-heading"><h3>ENDPOINTS</h3></div>
                    <div class="panel-body">
                      <ul class="list-group">

                        @foreach ($endpoints as $endpoint)

                          <li class="endpoint list-group-item"> {{ link_to( "/endpoints/{$endpoint->id}", $endpoint->name) }} <a href="{{ url( 'endpoints/' . $endpoint->id . '/edit' ) }}" > <span class="pull-right glyphicon glyphicon-th-list"> </span> </a> </li>

                        @endforeach

                      </ul>
                    </div><!--/panel-body-->
                 </div><!--/panel-->
              </div><!--/col-->
          </div><!--/row-->

        </div>


@stop
 