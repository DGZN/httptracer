@extends('layouts.theme-default')

@section('header')

<style>

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

</style>

@stop

@section('content')

        <div class="col-xs-12 col-sm-10" data-spy="scroll" data-target="#sidebar-nav">
          
          <br/><br/>

          <div class="row">        
            <div class="col-sm-12">
                 <div class="panel panel-default">
                   <div class="panel-heading"><h3>Analytics</h3></div>
                    <div class="panel-body">

                        @foreach ($endpoints as $endpoint)

                          <!-- <div class="endpointCards well col-md-4"> 
                             
                             <form class="form">
                                
                                <h4>{{ $endpoint['name'] }} <span class="text-primary pull-right"> {{ $endpoint['traces']['avg'] }} ms</span></h4>
                                
                                <div class="input-group text-center">

                                    <div id="endpoint_analytics_graph_{{ $endpoint['id'] }}" ></div>
                                
                                </div>

                            </form>

                         </div> -->

                         <div class="panel panel-default col-md-4" >
                           <div class="panel-heading"><a href="#" class="pull-right">{{ $endpoint['traces']['avg'] }} ms</a> <h4>{{ $endpoint['name'] }}</h4></div>
                            <div class="panel-body">
                              <div class="endpointAvgCircle img-circle pull-right">
                                  
                                  <div> {{ $endpoint['traces']['avg'] }} </div>

                              </div>
                              <div class="clearfix"></div>
                              <hr>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                              Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                              dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                              Aliquam in felis sit amet augue.
                              <hr>
                              <div class="btn-group pull-right btn-toggle"> 
                                <button class="btn btn-default">ON</button>
                                <button class="btn btn-primary active">OFF</button>
                              </div>
                            </div><!--/panel-body-->
                         </div><!--/panel-->

                        @endforeach

                    </div><!--/panel-body-->
                 </div><!--/panel-->
              </div><!--/col-->
          </div><!--/row-->

        </div>


@stop

@section('footer-scripts')



@stop