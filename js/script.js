let carrito = JSON.parse(localStorage.getItem("carrito")) || {};

// Función para agregar productos al carrito
function agregarAlCarrito(nombre, precio) {
  if (carrito.hasOwnProperty(nombre)){
    carrito[nombre].cantidad++;
  } else {
    carrito[nombre] = {
      cantidad: 1,
      precio: precio
    };
  }
  // Guardar el carrito en LocalStorage y actualizar la página web del carrito
  localStorage.setItem("carrito", JSON.stringify(carrito));
  actualizarCarrito();  // actualizar_cartito_db();
  actualizar_cartito_db2();
}

// Función para actualizar la página web del carrito
function actualizarCarrito() {
  let carritoElemento = document.getElementById("carrito");
  let total = document.getElementById("total");
  let subtotal = document.getElementById("subtotal");
  let subtotal_nombre = document.getElementById("nombre");
  let ticket = document.getElementById("ticket");
  carritoElemento.innerHTML = "";
  // Recorrer los productos del carrito y crear un elemento de lista para cada uno
  let suma = 0;
  subtotal.innerHTML = "";
  subtotal_nombre.innerHTML = "";
  for (let nombre in carrito) {    // console.log(Object.keys(carrito).length);
    let productoElemento = document.createElement("ul");
    let prueba = '<li class="flex items-center gap-4">'+nombre+'</h3></div><div class="flex flex-1 items-center justify-end gap-2"><form><button class ="mr-3 text-2xl"onclick="disminuirCantidad(`'+nombre+'`)">-</button><label for="Line1Qty" class="sr-only"> Quantity </label><input type="number" min="1" value="'+carrito[nombre].cantidad+'" id="Line1Qty" class="h-8 w-12 rounded border-gray-200 bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none"/></form><button class = "mr-3 text-xl" onclick="agregarAlCarrito(`'+nombre+'`, '+carrito[nombre].precio+')">+</button><button onclick="eliminarProducto(`'+nombre+'`)" class="text-gray-600 transition hover:text-red-600"><span class="sr-only">Remove item</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/></svg></button></div></li>';
    productoElemento.innerHTML =  prueba;
    subtotal_nombre.innerHTML = subtotal_nombre.innerHTML + "<br>" + nombre;
    subtotal.innerHTML = subtotal.innerHTML + "<br>"+ carrito[nombre].precio + " x " + carrito[nombre].cantidad + " = " + carrito[nombre].cantidad * carrito[nombre].precio+"€";
    suma = (carrito[nombre].cantidad * carrito[nombre].precio) +suma;
    carritoElemento.appendChild(productoElemento);
    total.innerHTML = suma+".00€";
  }

  if(Object.keys(carrito).length === 0){
    carritoElemento.innerHTML = "<p class = 'text-center'>No hay nada, dirigete a la página la tienda para poder añadir productos al carrito</p><a  href='tienda.php'><img alt = 'Pulsa para ir a la tienda' src = 'img/tienda.jpg' class = 'hover:saturate-150'/></a>";
    ticket.style.display = "none";
  }
}
function eliminarProducto(nombre) {
    delete carrito[nombre]; // Eliminar el producto del objeto carrito
    localStorage.setItem("carrito", JSON.stringify(carrito)); // Guardar el carrito actualizado en LocalStorage
    actualizarCarrito(); // Actualizar la página web del carrito
    // actualizar_cartito_db();
}

function disminuirCantidad(nombre) {
    if (carrito.hasOwnProperty(nombre)) {
      if (carrito[nombre].cantidad > 1) {
        carrito[nombre].cantidad--;
      } else {
        delete carrito[nombre];
      }
      localStorage.setItem("carrito", JSON.stringify(carrito));
      actualizarCarrito();
      actualizar_cartito_db2();
    }
  }
function cambiar_local_storage(prueba){
  localStorage.setItem("carrito", prueba);
}
function contador(){
  let haeder_cantidad = document.getElementById("cantidad");
  for(let articulo in carrito){
    haeder_cantidad.innerHTML = Number(haeder_cantidad.innerHTML) + carrito[articulo].cantidad;
  }
}
function actualizar_cartito_db2(){
  fetch('./php/action_update_cart.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: localStorage.getItem("carrito")
  })
    .then(response => {
      if (response.ok) {
        return response.text();
      }
      throw new Error('Error en la respuesta del servidor');
    })
    .then(data => {
      console.log(data); // Aquí puedes hacer algo con la respuesta del archivo PHP
    })
    .catch(error => {
      console.error('Error en la solicitud:', error);
    });
}

// function enviarJson() {
//   // Obtener el valor de la variable del LocalStorage
//   let variableLocalStorage = localStorage.getItem('carrito');
  
//   // Agregar el valor de la variable al campo oculto del formulario
//   document.querySelector('input[name="json"]').value = variableLocalStorage;
  
//   // Enviar el formulario
//   document.getElementById('miFormulario').submit();
// }