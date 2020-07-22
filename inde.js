
window.onload = function dani(){
 
setTimeout('daniel()',hora());
}
function hora()
{
horaActual = new Date();
horaProgramada = new Date();
horaProgramada.setHours(11);
horaProgramada.setMinutes(49);
horaProgramada.setSeconds(0);
return horaProgramada.getTime() - horaActual.getTime();
}
function daniel(){
	alert('');


}

<script src="inde.js"></script>