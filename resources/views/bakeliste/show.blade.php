



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Bakeliste</title>
    <link rel="stylesheet" href=" {{asset('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">





          <style>
          body {
              background-color: #f6f7fb;
          }
         /* h1 {
              background-color: orange;
          }
          p {
              background-color: rgb(255,0,0);
          }
*/
                  #triangle-1 {
            width: 0;
            height: 0;
            border-left: 18px solid transparent;
            border-right: 18px solid transparent;
            border-bottom: 30px solid purple;
        }

        #triangle-2 {
            width: 0;
            height: 0;
            border-left: 18px solid transparent;
            border-right: 18px solid transparent;
            border-top: 30px solid purple;
        }

        #cercle {
            width: 40px;
            height: 40px;
            border-radius: 20px;
            background: green;
        }

        #carre {
            height: 30px;
            width: 30px;
            background: red;
            -ms-transform: rotate(45deg); /* Internet Explorer */
            -moz-transform: rotate(45deg); /* Firefox */
            -webkit-transform: rotate(45deg); /* Safari et Chrome */
            -o-transform: rotate(45deg); /* Opera */
        }

.losange{
  margin:100px auto;
  width: 0;
  height: 0;
  border-left: 50px solid transparent;
  border-right: 50px solid transparent;
  border-bottom: 100px solid #069;
  position: relative;
}
.losange:before{
  content:'';
  border: 1px solid #069;
  border-left: 50px solid transparent;
  border-right: 50px solid transparent;
  border-top: 100px solid #069;
  width:0;
  height:0;
  position: absolute;
  top:100px;
  left:-50px;
}
  
  .rond{
  width:200px;
  height:200px;
  background:#069;
  -webkit-border-radius:100px;
  -moz-border-radius:100px;
  -o-border-radius:100px;
  border-radius:100px;
}


          </style>


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

    <button type="button"  aria-label="Left Align">
   <span class="glyphicon glyphicon-zoom-out" aria-hidden="true"> SEARCH</span>
    </button> 


</li>

    </ul>
     
       
     <ul class="nav navbar-nav navbar-right">
                        
        <li><a href="#"><img src="http://localhost/gestionbakeli/public/images/fatou.jpg"  id="carre" height="20" width="20"></a></li>
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


 
    
<ul class="nav nav-tabs">
 
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>


  
</div>

<br>


<!--le form bakeli-->
<div class="container">
      
<div class="row">
  


    <div class="thumbnail">


<!-- contenu de chaque infobakeli -->
<div class="container">
<div class="blog-header">
    <div class="row row-offcanvas row-offcanvas-right">

{!! Form::model($bakeliste, ['route' => ['bakeliste.show', $bakeliste->id], 'method' => 'patch','files'=>true]) !!}

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">

          <a href="#">
           <img src="http://localhost/backend-adminbakeli/public/images/{{$bakeliste->image}}"
            height="100" width="60"  id="carre" class="rond">
         </a><br>
         <button type="submit" class="btn btn-default">change</button>


          </div>
        </div>  

        
          <div class="row">
            <div class="col-xs-6 col-lg-4">
       


<div class="clearfix"></div>

<!-- Nom Field -->

<div class="form-group col-sm-12">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-12">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Disponiblite Field -->
<div class="form-group col-sm-12">
    {!! Form::label('disponiblite', 'Disponiblite:') !!}
    {!! Form::text('disponiblite', null, ['class' => 'form-control']) !!}
</div>

<!-- Cour Field -->
<div class="form-group col-sm-12">
    {!! Form::label('cour', 'Cour:') !!}
    {!! Form::text('cour', null, ['class' => 'form-control']) !!}
</div>

<!-- Education Field -->
<div class="form-group col-sm-12">
    {!! Form::label('education', 'Education:') !!}
    {!! Form::text('education', null, ['class' => 'form-control']) !!}
</div>



           
              <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>

              {{ Form::close() }}

            </div><!--/.col-xs-6.col-lg-4-->
          </div>
        </div>

</div>
 </div><!-- fin contenu -->
 </div></div></div>


<script src="{{ asset('js/app.js') }}"></script>
<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.js'></script>

</body>
</html>