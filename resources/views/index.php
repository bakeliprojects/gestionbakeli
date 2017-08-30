


@extends('master')
@section('content')

<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href=" {{asset('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">


    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('bakeliste') }}">bakeliste Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('bakeliste') }}">View All bakeliste</a></li>
     
    </ul>  -->


<!-- affiche all et posiblité de voir le cv en PDF  et show-->

 <h1>All the bakeliste</h1>
<
<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
  


<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>IMAGE</td>  
            <td>NOM</td>
            <td>PRENOM</td>
            <td>DISPONIBLITE</td>
            <td>EDUCATION</td>
        
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    
      <? @foreach($bakeliste as $value): ?>
     <p>This is bakeliste {{ $value->id }}</p>
        <tr>
            <td> <img src="images/{{$value->image}}" alt="profile Pic" height="100" width="200"></td>
            <td>{{ $value->nom }}</td>
            <td>{{ $value->prenom }}</td>
            <td>{{ $value->disponiblite }}</td>
            <td>{{ $value->education}}</td>


           <td><a href="{{action('BakelisteController@downloadPDF', $value->id)}}">PDF</a></td>
        
            we will also add show, edit buttons
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('bakeliste/' . $value->id) }}">Show this bakeliste</a>

            </td>  
        </tr>
     @endforeach 
    </tbody>
</table>

</div>


 <script src="{{ asset('js/app.js') }}"></script>

 @endsection
<!-- </body>
</html> -->



-


<!--CODE GARTER  AFFICHE ALL BAKELISTE -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href=" {{asset('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">


</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">

  <div class="container">
  

   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
<li>
<button type="button" class="btn btn-default" aria-label="Left Align">
   <span class="glyphicon glyphicon-align-justify" aria-hidden="true">MENU</span>
    </button> 

    <button type="button" class="btn btn-default" aria-label="Left Align">
   <span class="glyphicon glyphicon-zoom-out" aria-hidden="true"> SEA</span>
    </button> 


</li>

    </ul>
     
       
     <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="../public/images/" alt="profile Pic" height="100" width="200"></a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      </div>

     </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
</nav>


  <hr>
    
<ul class="nav nav-tabs">
 
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>


  
</div>

<br>


<!--le form bakeli   affice tt les bakeliste    -->
<div class="container">
      
<div class="row">
  <div class="col-sm-4 col-md-12">


    <div class="thumbnail">


<!-- contenu de chaque infobakeli -->
<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
      
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">

          <a href="#" class="thumbnail">
      <img src="..." alt="...">
    </a>

          </div>
        </div>  

        <div class="col-xs-12 col-sm-9">
          <div class="row">
            <div class="col-xs-6 col-lg-4">
            <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div>
        </div>

</div>
 </div><!-- fin contenu -->
 </div></div></div></div>


<script src="{{ asset('js/app.js') }}"></script>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.js'></script>

</body>
</html>