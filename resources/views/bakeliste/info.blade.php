 
<!-- on doit le metre  surr index  pour le pdf -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>




<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('contact') }}">contact Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('contact')}}">View All contact</a></li>
        <li><a href="{{ URL::to('contact/create') }}">Create a contact</a>
    </ul>




</nav>



<div class="container" display="inline-block">
<h1>Showing {{ $contact->nom}}</h1>
<hr>

   
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"> 

            <div style="height: 150px; ">
    
    </div>


{!! Form::model($contact, ['route' => ['contact.show', $value->id], 'method' => 'patch','files'=>true]) !!}

<img src="http://localhost/gestioncontact/public/images/{{$contact->image}}" alt="profile Pic" class="img-responsive" height="300" width="500"">
          </div>
 <FIELDSET>

    <div class="jumbotron text-center">
        <h2>{{ $contact->Name }}</h2>  

<div class="form-group">
        {!! Form::label('nom', 'NOM:') !!}
        {!! Form::textarea('nom', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prenom', 'PREENOM:') !!}
        {!! Form::textarea('prenom', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fonction', 'FONCTION:') !!}
        {!! Form::textarea('fonction', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('entreprise', 'ENTREPRISE:') !!}
        {!! Form::textarea('entreprise', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>


    <div class="form-group">
        {!! Form::label('tel', 'TEL:') !!}
        {!! Form::textarea('tel', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>


       <!--  <p>
            <strong>nom:</strong> {{ $contact->nom }}<br>
           <strong>Prenom:</strong> {{ $contact->prenom }}<br>
             <strong>Fonction:</strong> {{ $contact->fonction }}<br>
            <strong>Entreprise:</strong> {{ $contact->entreprise }}<br>
            <strong>Tel:</strong> {{ $contact->tel }}<br>
            
        </p>

 -->





    </div>
</FIELDSET>
 </div>
      </div>
  </div>
</div>
 

</body>
</html>















 <HTML> 
<HEAD> 
<!-- Le Site BARESPACE --> 
<TITLE> E </TITLE> 
</HEAD> 
<BODYBGCOLOR=#00FFFF> 
<FORM> 
<H3 ALIGN=CENTER> Enquête sur la satisfaction des Utilisateurs</H3> 
<FORM METHOD="POST" ACTION="mailto:barry_amadou@yahoo.fr" > 
<PRE> 
<P> 
Nom : <INPUT TYPE="texte" NAME="Nom1" SIZE="30"> 
Prénom : <INPUT TYPE="texte" NAME="Prenom1" SIZE="40"> 
E-mail : <INPUT TYPE="texte" NAME="E-mail" SIZE="50"> 
Adresse : <INPUT TYPE="texte" NAME="Adr1" SIZE="30"> 
<INPUT TYPE="texte" NAME="SIZE="30"> 
Code Postale : <INPUT TYPE="texte" NAME="code postal" SIZE="10"> 
Ville : <INPUT TYPE="texte" NAME="ville" SIZE="50"> 
<P> 
<OL> 
<LI> <INPUT TYPE ="CHECKBOX" NAME="topping1" VALUE="Marie"> Marié 
<LI> <INPUT TYPE ="CHECKBOX" NAME="topping2" VALUE="Célibataire"> Célibataire 
<LI> <INPUT TYPE ="CHECKBOX" NAME="topping3" VALUE="Etudiant"> Etudiant 
<LI> <INPUT TYPE ="CHECKBOX" NAME="topping4" VALUE="Cadre"> Cadre 
</OL> 
<P> 
Votre opinion <SELECT NAME=OPTION1> 
<OPTION> Très Satisfait 
<OPTION> Satisfait 
<OPTION> Indifferent 
<OPTION> C'est très nul !! 
</SELECT> 
<P> 
Vos commentaires : <TEXTAREA NAME=COM1 ROWS="6" COLS="70" A></textarea> 
<P> 
<INPUT TYPE=SUBMIT VALUE="Envoyer"> 
<INPUT TYPE=RESET VALUE="Annuler">

</BODY> 
</PRE> 
</FORM> 
</HTML>



<CENTER><TABLE BORDER=3 BGCOLOR="#FFFFFF" WIDTH="80%"> 

<TR> 

<TD> 

<P><form action="http://www.francais.robertdanet.com" ENCTYPE="multipart/form-data" method="POST"> 

<input type="hidden" name="_id" value="123456"> 

<input name="_subject" type="hidden" value="toto infos"> 

<input name="_requiredFields" type="hidden" value="Nom,Prénom,Ville"> 

<input name="_userinfo" type="hidden" value="1"> 

<input name="_replyToField" type="hidden" value="Email"> 

<input name="_redirect" type="hidden" value="http://www.robertdanet.com"> 

<table> 

<tr> 

<td><font color="#ff0000">*</font>Nom</td> 

<td><input type="text" name="prenom" size="40" maxlength="40"></td> 

</tr> 

<tr> 

<td><font color="#ff0000">*</font>Prénom</td> 

<td><input type="text" name="url" size="40" maxlength="40"></td> 

</tr> 

<tr> 

<td><font color="#ff0000">*</font>Ville</td> 

<td><input type="text" name="email" size="40" maxlength="40"></td> 

</tr> 

<tr> 

<td><font color="#ff0000">*</font>E-mail</td> 

<td><input type="text" name="objet" size="40" maxlength="40"></td> 

</tr> 

<tr> 

<td>Votre message</td> 

<td><textarea name="message" rows="5" cols="50" wrap=virtual></textarea> 

</td> 

</tr> 

<tr> 

<td>Photo</td> 

<td><input type="file" name="fichier"></td> 

</tr> 

<tr> 

<td colspan="2" align="center"><br><input type="submit" value="Envoyer"></td> 

</tr> 

</table> 





</form> 

<!-- fin du code à insérer --> 

</P> 

</TD> 

</TR> 

</TABLE></CENTER> --> -->