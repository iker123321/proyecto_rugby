function getCookieValue(cookieName) {
  var name = cookieName + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var cookieArray = decodedCookie.split(';');
  for(var i = 0; i < cookieArray.length; i++) {
    var cookie = cookieArray[i];
    while (cookie.charAt(0) === ' ') {
      cookie = cookie.substring(1);
    }
    if (cookie.indexOf(name) === 0) {
      return JSON.parse(cookie.substring(name.length, cookie.length));
    }
  }
  return "";
}

// const ctx = document.getElementById('myChart');

// new Chart(ctx, {
//   type: 'bar',
//   data: {
//     labels: [
//         'Enero',
//         'Febrero',
//         'Marzo',
//         'Abril',
//         'Mayo',
//         'Junio',
//         'Julio',
//         'Agosto',
//         'Septiembre',
//         'Octubre',
//         'Noviembre',
//         'Diciembre'
//       ],
//     datasets: [{
//       label: 'Numero de pedidos',
//       data: getCookieValue("ordersByMonth"),
//       borderWidth: 1
//     }]
//   },
//   options: {
//   }
// });

const usuariosPorMes = Object.values(getCookieValue("ordersByMonth"));
// console.log(Object.values(getCookieValue("ordersByMonth")));

// Obtener el elemento canvas
const ctx2 = document.getElementById('grafico').getContext('2d');

// Crear el gráfico
new Chart(ctx2, {
  type: 'line',
  data: {
    labels: [
      'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
      'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ],
    datasets: [{
      label: 'Usuarios por Mes',
      data: usuariosPorMes,
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      tension: 0.1
    }]
  },
  options: {
    animations: {
        tension: {
          duration: 1000,
          easing: 'linear',
          from: 1,
          to: 0,
          loop: false
        }
      }
    },
    scales: {
      x: { // defining min and max so hiding the dataset does not change scale range
        min: 0,
        max: 100
      }
  } 
});