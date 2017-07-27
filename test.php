

<a href="#"  style="background-color: #87cb16; color:white; border-color: white;" class="btn btn-primary" >Vérifier</a>


<?php $rs=50242; ?>



<script type="text/javascript">
var target;
target= document.getElementsByTagName('a')[0];


function multiLinks()
{

window.open("http://www.societe.com/cgi-bin/search?champs="+'<?php echo $rs; ?>' );
window.location.href ="http://www.franceenvironnement.com/entreprise/%7B%7Bvalue.rw%7D%7D";
}

  
target.onclick = multiLinks;
</script>	


