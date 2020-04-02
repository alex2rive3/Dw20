var origen = [];
var destino = [];
//bucle para cargar el array Origen con los nunmeros aleatorios con un rango de 1 a 99
for (var i = 0; i <10; i++) {
  origen[i]=Math.floor(Math.random()*100)+1;
}
//se copia el contenido del array origen al array destino

//funcion para comprar y poner en orden los numeros
function comparar(a,b) {return a - b}

//en esta funcion devuelve los numeros ordenados la lista destino
function ordenar(origen){
  destino=origen.slice([0[9]]);
  destino = destino.sort(comparar);//se pasa commo parametro la funcion comparar
  return destino;
}
console.log(origen);
console.log(ordenar(origen));
