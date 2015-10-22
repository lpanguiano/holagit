<?



annyeong haseyo   formal greeting
 wealth - riquezas

 For all her wealth, she does not look happy. 
 Para toda su riqueza, no parece estar feliz

You should have told me you were going to arrive late (Deberías haberme dicho que ibas a llegar tarde)
They ought to have studied harder. (deberían haber estudiado más)




/**

  p a r a  q u e m a d u r a s

**/
neosporin dermico   

para dolor:
quetorolaco sublingual  
diclofenaco
naproxeno









/**
para centrar un fieldset
**/
.center_fieldset {				// del div
	text-align:center;
    vertical-align:middle;
}
.center_fieldset fieldset {
	border: 2px groove;
	margin-left:auto;
	margin-right:auto;
	padding-bottom: 0.625em;
    display: inline-block;
    padding-left: 0.75em;
    padding-right: 0.75em;
    padding-top: 0.35em;
    text-align:left;
    vertical-align:middle;
}

forma de uso:

<div class="center_fieldset">
<fieldset>
</fieldset>
</div>




/**
script para hacer un link y pasar variable por post
**/
<script>
function via_post(url, params ) {    
  var hideen = '';  
  for (var param in params) {
    hideen += '<input type="hidden" name="'+param+'" value="'+params[param]+'" />';
  }  
  var un_div = document.createElement("div");
  un_div.innerHTML = '<form name="form_via_post" method="post" action="'+url+'">'+hideen+'</form>';
  document.body.appendChild(un_div);
  document.forms["form_via_post"].submit();
  return false; // para cancelar el click del link
}
</script>

uso:
<?php 
echo '<a href="art_recepcion_ver.php" onclick="return via_post(this.href, {cat:\'1\'});" >click</a>';












?>

