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

/*box-shadow: [horizontal offset] [vertical offset] [blur radius] [optional spread radius] [color];*/

.panel {
    background-color: rgba(44,44,44,1) !important;
    border: 0px dashed rgba(205,205,205,.2);
    -webkit-box-shadow: 3px 3px 5px 6px #ccc;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    -moz-box-shadow:    3px 3px 5px 6px #ccc;  /* Firefox 3.5 - 3.6 */
    box-shadow:         3px 3px 5px 6px rgba(44,44,44,1);  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
    min-height: 120px;
}

.panel-heading {
    background-color: rgba(44,44,44,1) !important;
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
    font-size: 2em;
    font-weight: 300;
    margin: 2%;
    color: #ffffff;
}


.endpointStats h4 .sub {
    position: relative;
    top: 8px;
    left: -4px;
    color: #999999;
    font-size: 14px;
    font-style: italic;
    font-weight: 200;
}

.endpointStats h4 .sub .sub {
    position: relative;
    top: 2px;
    left: -3%;
    font-size: 10px;
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

.apdex-bad {
    color: #a94442 !important;
    background-color: rgba(169,68,68,1);
    background-image: none !important; 
    /*box-shadow: 3px 3px 5px 6px rgba(219,15,15,.2);*/
}

.apdex-average {
    color: blue !important;
    background-color: rgba(51,122,183,1);
    background-image: none !important; 
    /*box-shadow: 3px 3px 5px 6px rgba(72,15,219,1);*/
}

.apdex-good {
    color: rgba(18,219,15,1);
    background-color: rgba(60,118,61,1);
    background-image: none !important; 

/*    box-shadow: 3px 3px 5px 6px rgba(18,219,15,.09);*/
}

.endpoint-apdex-level {
    position: absolute;
    top: 80%;
    left: 5%;
    height: 5%;
    width: 95%;
    display: block;
    border-radius: 25px;
    border-color: 1px solid black;
}

/* DASHBOARD Style */

.the-box.rounded {
    border-radius: 10px;
}
.the-box.no-border {
    border: none;
}
.tiles-information {
    overflow: hidden;
    position: relative;
}

.bg-info {
    /*background-color: #3BAFDA;*/
    background-color: rgba(44,44,44,1);
}
.bg-dark, .bg-primary, .bg-success, .bg-info, .bg-danger, .bg-warning {
    color: #fff;
}

.the-box {
    padding: 15px;
    margin-bottom: 30px;
    /*background: #fff;*/
    border: 1px solid #D5DAE0;
    position: relative;
}



.tiles-information .icon-bg {
    position: absolute;
    right: 2.5px;
    bottom: 35%;
    font-size: 2.5em;
    color: #fff !important;
    background-image: none !important;
    background-color: transparent !important; 
    opacity: 0.02;
    filter: alpha(opacity=8);
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.fa {
    display: inline-block;
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.fa-group:before, .fa-users:before {
    content: "\f0c0";
}

.tiles-information .tiles-inner {
    position: relative;
    z-index: 2;
}

.text-center {
    text-align: center;
}

h1.bolded, h2.bolded, h3.bolded, h4.bolded, h5.bolded, h6.bolded {
    position: relative;
    left: 3.5%;
    font-weight: 200;
    font-size: 24px;
}

h1.bolded .sub {
    position: relative;
    width: 0px;
    top: 8px;
    left: -8px;
    font-weight: 150;
    font-size: 14px;
    font-style: italic;
    color: #FFFFFF;

}
.tiles-information .progress {
    margin: 20px -15px;
}

.progress.no-rounded {
    border-radius: 0px;
}

.progress.progress-xs {
    height: 5px;
}

.progress {
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0);
}

.progress {
    height: 20px;
    margin-bottom: 20px;
    overflow: hidden;
    /*background-color: #f5f5f5;*/
    background-color: #1E1E1E;
   /* background-color: rgba(44,44,44,1);*/
    background-image: none !important; 
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
}

small {
    font-size: 105%;
    font-weight: 300;
}

small .sub{
    font-size: 75%;
    font-style: italic;
}




</style>

@stop

@section('content')

        <div class="endpints col-xs-12 col-sm-10" data-spy="scroll" data-target="#sidebar-nav">
          
          <br/><br/>

          <div class="row">



            @foreach ($endpoints as $endpoint)

            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                <div class="the-box no-border bg-info rounded tiles-information">

                    <!-- <i class="fa {{$endpoint['traces']['apdex']['level']}} icon-bg"></i> -->

                    <div class="tiles-inner text-center">

                        <!-- <a href="{{ url( 'endpoints/' . $endpoint->id . '' ) }}" >

                            {{$endpoint->name}}

                        </a> -->

                        <p>{{$endpoint->name}}</p>

                        <h1 class="bolded">{{$endpoint['traces']['apdexScore']}} <span class="sub"> 4 </span></h1> 

                        <div class="progress no-rounded progress-xs">

                          <div class="progress-bar {{$endpoint['traces']['apdex']['level']}}" role="progressbar" aria-valuenow="{{$endpoint['traces']['apdex']['pct']}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$endpoint['traces']['apdex']['pct']}}%">
                          </div>

                        </div>

                        <!-- <a href="{{ url( '/endpoints/' . $endpoint->id . '/edit' ) }}" >

                            <span class="pull-right glyphicon glyphicon-bookmark {{$endpoint['traces']['apdex']['level']}}"></span> 

                        </a>  -->

                        <p><small>{{ $endpoint['traces']['avg'] }} </small></p>

                    </div>

                </div>
                
            </div>

            @endforeach

          </div>

        </div>


@stop
 