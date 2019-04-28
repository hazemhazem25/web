function controle()
{
	if(num_c.value.length==0 || total_c.value.length==0 || adress_c.value.length==0 || etat_c.value.length==0)
{
	alert("veuillez remplir touts les champs avant");
}else if( num_c.value<"1" || num_c.value>"9999")
	{
	alert("numero commande invalide");
	}
	else 
	{var i=0;
	for(i=0;i<total_c.value.length;i++)
	{
	if(!( total_c.value[i]>="0" && total_c.value[i]<="9"))
	{
		alert("total incorrect !");
		break;
	}
	} alert("jawik behi modification effectuée avec succés ")

}
}// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}