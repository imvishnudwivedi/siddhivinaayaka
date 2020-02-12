@extends('website.layouts.main')

@section('page_title', 'Siddhivinaayak Temple - Subscribe Page')

@section('description', 'Lord Ganesha is the chief deity of this powerful Pooja. He is considered the ‘God of Luck’ and he blesses his devotees with smooth success in all their endeavors!')


@section('content')
<h1></h1>

<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">

      <ul class="w3_short">
        <li><a href="{{URL::route('home')}}">Home</a><span>|</span></li>
        <li>Subscribes List</li>
      </ul>
    </div>
</div>

<div class="container" style="min-height:500px;">
	<h3>  Subscribers List</h3>
<div id="view" hidden>
    <div class="pull-right">

   <a class="btn bg-olive btn-flat margin" style="background-color: #6666ff; color: #fff; margin-bottom: 20px;" id="xport" data-toggle="tooltip" data-placement="top" title="Click to Export below Report to Excel">

          <i class="glyphicon glyphicon-export" style="color:#fff;"></i>

          Export to Excel

        </a>

      </div>
      <br>
      <div class="clearfix"></div>
                    <table class="table table-bordered" id="view">
                        <thead>
                            <tr>
                               
                                <th>Name</th>
                                <th>Email Id</th>
                                 <th>Country</th>
                                <th>Number</th>
                            </tr>
                        </thead>
                        <tbody>

                        	  <?php $r=0; ?>
                    @foreach($subscribe as $c)   
                         
                            <tr>
                              
                                <td>{{$c->name}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->country}}</td>
                                <td>    &#43; {{$c->cc}} &#45; {{$c->phone_number}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
</div>






@section('script')
@parent

<script type="text/javascript">
    var password = prompt("What is your password?");
    pass="uspooja";
    if(password==pass){
        $('#view').show();
    }else{
        window.location.replace('http://siddhivinaayak.org/');
    }


    $('#xport').click(function(e){

     var dt = new Date();
     var day = dt.getDate();
     var month = dt.getMonth() + 1;
     var year = dt.getFullYear();
     var hour = dt.getHours();
     var mins = dt.getMinutes();
     var postfix = day + "_" + month + "_" + year + "_" + hour + ":" + mins;
     var a = document.createElement('a');
     var data_type = 'data:application/vnd.ms-excel';
     var table_div = document.getElementById('view');
     var table_html = table_div.outerHTML.replace(/ /g, '%20');
     a.href = data_type + ', ' + table_html;
     a.download = 'subscriberlist@'+ postfix + '.xls';
     a.click();
     e.preventDefault();

   });
</script>

@endsection
@stop
