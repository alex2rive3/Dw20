console.log()
var fruta=["mansana",2,"jugo"];
console.log(fruta);
console.log(fruta[0]);
console.log(fruta.lenght);
console.log(fruta);
fruta.push("pera");
console.log(fruta);
fruta.push("sandia","melon");
console.log(fruta);
fruta.unshift("durazno","ciruela");
console.log(fruta);
//
console.log(fruta.sort());
var numeros = [1,2,3,40,100,11,101];
console.log(numeros);
for (var i = 0; i < fruta.length; i++ )
{
  console.log(fruta[i]);
}
console.log(i);
//Funciones simples mormales
var a=9;
var b=15;

function sumar(a,b)
{
  return a+b;
}
console.log(sumar(a,b));
//declaracion de funciones anonimas
var suma = function (a,b){return a+b;}
console.log(sumar(a,b));

//Funciones Flecha
var flecha = (a,b) => { return a+b; }
console.log(flecha(a,b));
/////////////////////////////
//Para recorrer un array sin saber su tamaño
fruta.forEach((item, i) => {
  console.log("index = "+i+" valor = "+item);
});
console.log("con funciones anonimas");
fruta.forEach(function(item, i){
  console.log("index = "+i+" valor = "+item);
});
//for Each Recorre Elemnto por elemento los elementos de un array
//realiza una accion pora cada elemento del array
function imprimir(i, item){ console.log("index ="+i+"valor"+item); }

//correr una funcion normal en un foreach
fruta.forEach(function(item, i) { imprimir(item, i); });
