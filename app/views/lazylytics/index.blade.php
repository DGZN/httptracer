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

.panel {
    background-color: rgba(46,46,46, .8) !important;
    border: 1px dashed rgba(205,205,205,.2);
}

.panel-heading {
    background-color: rgba(46,46,46, .8) !important;
    background-image: none !important; 
    border: 2px;
    padding: 4px 10px;
}

.panel-heading a {
    text-decoration: none;
    font-weight: 400;
    color: #999999;
    /*color: #337ab7;*/
}

.endpointStats a {
    text-decoration: none;
}

.endpointStats {
    text-align: center;
}

.endpointStats h4 {
    font-size: 35px;
    font-weight: 400;
    margin: 25px;
}


.endpointStats h4 .sub {
    position: relative;
    top: -5px;
    left: -1%;
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
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

            @foreach ($endpoints as $endpoint)

            <div class="col-sm-12 col-md-4">

                 <div class="panel panel-default">

                    <div class="panel-heading"> 

                        <a href="{{ url( 'endpoints/' . $endpoint->id . '' ) }}" >

                            {{$endpoint->name}}

                        </a>

                        <a href="{{ url( '/endpoints/' . $endpoint->id . '/edit' ) }}" >

                            <span class="pull-right glyphicon glyphicon-bookmark"></span> 

                        </a> 

                    </div>
      
                    <div class="panel-body">
                     
                        <div class="endpointStats row">

                            <div class="col-md-12">

                                <a href="/endpoints/{{$endpoint->id}}">
                                
                                    <h4 class="text-primary"> {{ $endpoint['traces']['avg'] }} <span class="sub">ms</span> </h4>

                                </a>


                            </div>


                        </div>

                    </div>

                </div>

            </div>

            @endforeach

          </div>

        </div>


@stop
 