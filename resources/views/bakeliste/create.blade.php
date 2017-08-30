<HTML> 
<HEAD> 
<!-- Le Site BARESPACE --> 
<TITLE> E </TITLE> 
</HEAD> 
<BODYBGCOLOR=#00FFFF> 
<FORM> 
<H3 ALIGN=CENTER> Enquête sur la satisfaction des Utilisateurs</H3> 
{{ Form::open(array('url' => 'bin',METHOD="POST",'files' => true))}}
<!-- <FORM METHOD="POST" ACTION="{{url('submitForm')}}" >  -->
<PRE> 
<P> 
Nom : <INPUT TYPE="texte" NAME="Nom1" SIZE="30"> 
Prénom : <INPUT TYPE="texte" NAME="Prenom1" SIZE="40"> 
DISPONIBLITE : <INPUT TYPE="texte" NAME="E-mail" SIZE="40"> 
COUR : <INPUT TYPE="texte" NAME="Adr1" SIZE="40"> 
<INPUT TYPE="texte" NAME="SIZE="30"> 
EDUCATION: <INPUT TYPE="texte" NAME="code postal" SIZE="40"> 
TECHNOLOGIE : <INPUT TYPE="texte" NAME="ville" SIZE="40"> 
<P> 
<OL> 
<LI> <INPUT TYPE ="CHECKBOX" NAME="topping1" VALUE="Marie"> Marié 
<LI> <INPUT TYPE ="CHECKBOX" NAME="topping2" VALUE="Célibataire"> Célibataire 
<LI> <INPUT TYPE ="CHECKBOX" NAME="topping3" VALUE="Etudiant"> Etudiant 
<LI> <INPUT TYPE ="CHECKBOX" NAME="topping4" VALUE="Cadre"> Cadre 
</OL> 


<form method="post" action="pagederemerciements.php">
    <p>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" />
    </p>
    
    <p>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" />
    </p>
    
    <p>
        <label for="email">Email :</label>
        <input type="text" name="email" id="email" />
    </p>
    
    <p>
        <label for="message">Message :</label><br />
        <textarea name="message" cols="45" rows="10"></textarea>
    </p>
    
    <p>
        <input type="submit" value="Envoyer" />
    </p>
</form>









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

</TABLE></CENTER>






@extends('master')
@section('content')
<form method="post" action="{{url('submitForm')}}">
    {{csrf_field()}}
    <div class="form-group"> <!-- Full Name -->
      <label for="full_name_id" class="control-label">image</label>
      <input type="text" class="form-control" id="full_name_id" name="image" placeholder="John Deer">
    </div>

    <div class="form-group"> <!-- Street 1 -->
      <label for="street1_id" class="control-label">nom</label>
      <input type="text" class="form-control" id="street1_id" name="street_address" placeholder="Street address, P.O. box, company name, c/o">
    </div>

    <div class="form-group"> <!-- City-->
      <label for="city_id" class="control-label">disponiblite</label>
      <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
    </div>

    <div class="form-group"> <!-- Zip Code-->
      <label for="zip_id" class="control-label">COUR</label>
      <input type="text" class="form-control" id="zip_id" name="zip_code" placeholder="#####">
    </div>

    <div class="form-group"> <!-- Zip Code-->
      <label for="zip_id" class="control-label">EDUCATION</label>
      <input type="text" class="form-control" id="zip_id" name="zip_code" placeholder="#####">
    </div>


<div class="form-group"> <!-- Zip Code-->
      <label for="zip_id" class="control-label">TECHNOLOGIE</label>
      <input type="text" class="form-control" id="zip_id" name="zip_code" placeholder="#####">
    </div>

    <div class="form-group"> <!-- Zip Code-->
      <label for="zip_id" class="control-label">language</label>
      <input type="text" class="form-control" id="zip_id" name="zip_code" placeholder="#####">
    </div>

    <div class="form-group"> <!-- Zip Code-->
      <label for="zip_id" class="control-label">MOTIVATION</label>
      <input type="text" class="form-control" id="zip_id" name="zip_code" placeholder="#####">
    </div>
    
    


    <div class="form-group"> <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Buy!</button>
    </div>

    </form>
@endsection