<?php
require_once('header.php');
?>
<!doctype html>
<html lang = "ro">
  <head>
  <meta charset = "UTF-8"/>
  <title>Contactați-ne</title> 
  <link rel="stylesheet" type="text/css" href="css/scroll.css" />
  <link rel="stylesheet" type="text/css" href="css/contact.css" />
  </head>

<body>

<h1>Contactați-ne</h1>

<h3>*câmpuri obligatorii</h3>
<form action="mailto:daydream_cinema@gmail.com">
  <table class="tabel">
    <tr>
    <td align="left">Categoria*</td>
    <td align="left"><select id="categ" name="categ">
    <option value="" selected disabled hidden>Alegeți o categorie</option>
    <option value="serv">Serviciile noastre</option>
    <option value="bil">Achiziție bilete online</option>
    <option value="ev">Evenimente private și corporate</option>
    <option value="vip">VIP</option>
    <option value="alte">Altele</option>
    </select>
    <tr>
      <td align="left">Nume și prenume/Numele companiei*</td>
      <td align="left"><input type="text" name="nume"></td>
    </tr>
    <tr>
      <td align="left">Email*</td>
      <td align="left"><input type="text" name="pren"></td>
    </tr>
    <tr>
      <td align="left">Confirmă adresa de email*</td>
      <td align="left"><input type="text" name="em"></td>
    </tr>
    <tr>
      <td align="left">Număr de Telefon</td>
      <td align="left"><input type="number" name="nr"></td>
    </tr>
    <tr>
      <td align="left">Subiect</td>
      <td align="left"><input type="text" name="sub"></td>
    </tr>
    <tr>
    <td align="left">Mesaj*</td>
    <td align="left"><textarea name="text" cols="30" rows="5"></textarea></td>
    </tr>
<tr>
<td><input type="reset" value="Anulează">
<input type="submit" value="Trimite"></td>
</tr>
</table>
</form>
<p>Atenționare: informațiile pe care le furnizați trebuie să fie de minim interes și fără caracter confidențial (spre exemplu doar acele informații necesare pentru identificare sau pentru a intra în legatură cu noi).</br>Nu trebuie furnizate niciodată informații confidențiale cu caracter personal, incluzând aici data nașterii, detalii despre cardurile bancare, starea de sănătate sau situația familială.</br></br>
În cazul în care ne contactați și ne furnizați datele personale, vă informăm că ele vor fi prelucrate de către Daydream Cinema România S.R.L. în calitate de operator de date. Vă informăm că datele cu caracter</br>personal vor fi prelucrate în scopul furnizării și realizării serviciilor/produselor comandate (dacă este cazul) sau pentru va putea răspunde oricăror solicitari. De asemenea, va informăm că răspunsurile la întrebări</br>sunt voluntare, iar persoana vizată are dreptul de a accesa și de a-și rectifica datele. Dacă sunteți interesat să primiți informații despre ofertele selectate în formă electronică sau prin apeluri telefonice, este</br>necesar consimțământul dvs. prealabil.</p>
</body>
</html>