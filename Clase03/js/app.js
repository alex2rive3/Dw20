var n1 = 5;
var resultado = 0;
console.log("___________________________________________________________\n");
console.log("Imprimiendo la tabla del: "+n1+"\n");
console.log("___________________________________________________________\n");
for(var i=1; i<=10; i++){
	resultado=n1 * i;
	console.log(n1 + "x" + i + "=" + resultado + "\n")
}
console.log("===========================================================\n");
resultado2=0;
n2=0;
n3=0;
n2=prompt("Ingrese un numero: ");
n3=prompt("Ingrese un numero mayor al anterior: ");
if(n2>n3){
	console.log("___________________________________________________________\n");
	console.log("Imprimiendo la tabla del: "+n2+"\n");
	console.log("___________________________________________________________\n");
	for(var i=0;i<=10; i++){
		resultado2=n2 * i;
		console.log(n2 + "x" + i + "=" + resultado2 + "\n")
	}
	console.log("===========================================================\n");
	console.log("___________________________________________________________\n");
	console.log("Imprimiendo la tabla del: "+n3+"\n");
	console.log("___________________________________________________________\n");
	for(var i=0;i<=10; i++){
		resultado2=n3 * i;
		console.log(n3 + "x" + i + "=" + resultado2 + "\n")
	}
	console.log("===========================================================\n");
}else{
console.log("No es posible ralizar la petición")
}
