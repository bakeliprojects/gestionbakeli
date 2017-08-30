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
             <span class="glyphicon glyphicon-zoom-out" aria-hidden="true"> SEACH</span>
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


<div class="container">

  <div class="row">

    @foreach($bakeliste as $bakel)

    <div class="col-lg-6">

    <div class="w3-card-4">

<header class="w3-container w3-light-grey">
  <h3>{{$bakel->nom}}</h3>
</header>

<div class="w3-container">
  <p></p>
  <hr>
  <img src="http://localhost/backend-adminbakeli/public/images/{{$bakel->image}}" style="width: 120px;" alt="Avatar" class="w3-left w3-circle">
  <p>President/CEO at Mighty Schools...</p>
</div>
        <p><a href="{{url('bakelist/'.$bakel->id)}}" class="btn btn-danger" role="button">Voir profil</a> 
        </p>

</div>


  </div><!-- /.col-lg-6 -->
  @endforeach

</div>
</div>


<script src="{{ asset('js/app.js') }}"></script>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.js'></script>

</body>
</html>