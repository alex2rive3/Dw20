document.getElementsByTagName('body')[0].onload=inicio;
var datos=[];

function inicio(){
console.log("cargo...");
  document.getElementById('enviar').onclick=procesar;
  // document.getElementById('storage').onclick=almacenar;
  cargarDatos();
  imprimirFilas();
}
function procesar()
    {
      console.log("procesando...");
      //console.log(document.getElementById('apellido'));
      //se pregunta si el indice del elemnto esta vacio o es recuperado
      //si esta vacio se guarga un nuevo regidtro y de lo contrario solo se guarda las modificaciones
      if (document.getElementById('idx').value=="")
      {
      datos.push([document.getElementById('apellido').value,document.getElementById('nombre').value,document.getElementById('fenac').value]);
    } else {
      var idx=document.getElementById('idx').value;
      datos[idx][0]=document.getElementById('apellido').value;
      datos[idx][1]=document.getElementById('nombre').value;
      datos[idx][2]=document.getElementById('fenac').value;
    }
      //document.getElementById('apellido').value;
      //console.log(datos);
      almacenar();
      imprimirFilas();
      limpiarForm();
    }
function imprimirFilas()
    {
      //se rrecorre el array para imprimir asi el contenido de la misma
    var salida="";
    datos.forEach((item, i) => {
      salida=salida+"<div class='card '><div class='card-body'><p class='card-header bg-dark text-light'>"+"Alumno Registrado<br></p><span> Id: <span>"+i+ "</span></span> <br><span> Apellidos: <span>" +item[0]+"</span></span><br><span> Nombres: <span>"+ item[1]+"</span></span> <br><span> Fecha de nacimiento: <span>"+item[2]+"</span></span><br><br><button type='button' class='editar  btn btn-outline-secondary' data-id='"+i+"'>Editar</button>  <span><button type='button' class='borrar btn btn-outline-secondary' data-id='"+i+"'>Borrar</button> </span></span><br></div></div><br>"
    });
    //se manda el array a la pagina html para que sea impresa
    document.getElementById('datos').innerHTML=salida;
    //console.log(document.getElementsByClassName('editar'));
    btTabla()
    }

function cargarDatos() {
  //parse es para que devuelva los valores como un array
  console.log(JSON.parse(localStorage.datos));
  datos=JSON.parse(localStorage.datos);
  // datos.push(['Rivé', 'Alex','2000-04-06']);
  // datos.push(['Ramirez', 'Andres','2001-11-01']);
  // datos.push(['Ozuna', 'Nancy','2001-02-28']);
  // datos.push(['Armoa', 'Roberto','1999-08-15']);
}
//para limpiar se cerga la tabla con un valor vacio
function limpiarForm() {
  document.getElementById('idx').value="";
  document.getElementById('apellido').value="";
  document.getElementById('nombre').value="";
  document.getElementById('fenac').value="";
  document.getElementById('apellido').focus();
}
function btTabla(){
  var btedit=document.getElementsByClassName('editar'); //se declara un boton para editar y se recore la tabla para ir agregando un voton editar por cada nuevo elemento
  for (var i = 0; i < btedit.length; i++) {
    btedit[i].onclick=editar;
  }
  var btborrar=document.getElementsByClassName('borrar'); //se declara un boton para editar y se recore la tabla para ir agregando un voton editar por cada nuevo elemento
  for (var i = 0; i < btedit.length; i++) {
    btborrar[i].onclick=borrar;
  }
}

function editar(e)
{
console.log("editando");
var fila=e.target; //se recupera el indice de la tabla
//console.log(fila.attributes["data-id"].value);
var idx=fila.attributes["data-id"].value;
document.getElementById('idx').value=idx;
document.getElementById('apellido').value=datos[idx][0];
document.getElementById('nombre').value=datos[idx][1];
document.getElementById('fenac').value=datos[idx][2];
document.getElementById('apellido').focus(); //se asigna el focus en la ventana de apellido
}


function borrar(e){
  //console.log("borrando....");
  var fila=e.target; //se recupera el indice de la tabla
  var idx=fila.attributes["data-id"].value;
  datos.splice(idx,1);
  almacenar();
  imprimirFilas();
}

//almacenar datos en storage
function almacenar() {
  console.log("alamacenando.....");
  //stringify se usa para que guarde como array
  localStorage.setItem("datos",JSON.stringify(datos));
}
