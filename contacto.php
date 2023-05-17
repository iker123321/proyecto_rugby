<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/header.php';?>
<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->

<section class="bg-gray-100">
  <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
      <div class="lg:col-span-2 lg:py-12">
        <p class="max-w-xl text-lg">
        ¡Bienvenido a la página de contacto del Club de Rugby! Estamos muy emocionados de que hayas decidido ponerte en contacto con nosotros. Si estás interesado en unirte al equipo, recibir información sobre nuestros programas y horarios, o si tienes cualquier otra pregunta relacionada con el rugby, no dudes en escribirnos. Nuestro equipo de expertos en rugby está aquí para ayudarte en todo lo que necesites. Para ponerte en contacto con nosotros, simplemente rellena el formulario de contacto que se encuentra a continuación. ¡Esperamos poder saber de ti pronto!
        </p>

        <div class="mt-8">
          <a href="" class="text-2xl font-bold text-blue-600">
            971 332 124
          </a>

          <address class="mt-2 not-italic">
            Mahon, Islas Baleares
          </address>
        </div>
      </div>

      <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
        <form action="" class="space-y-4">
          <div>
            <label class="sr-only" for="name">Nombre</label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              placeholder="Nombre"
              type="text"
              id="name"
            />
          </div>

          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
              <label class="sr-only" for="email">Correo</label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="Correo"
                type="email"
                id="email"
              />
            </div>

            <div>
              <label class="sr-only" for="phone">Teléfono</label>
              <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="Teléfono"
                type="tel"
                id="phone"
              />
            </div>
          </div>

          <div>
            <label class="sr-only" for="message">Mensage</label>

            <textarea
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              placeholder="Message"
              rows="8"
              id="message"
            ></textarea>
          </div>

          <div class="mt-4">
            <button
              type="submit"
              class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
            >
              Enviar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php  include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/footer.php';?>
