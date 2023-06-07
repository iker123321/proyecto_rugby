<?php
    include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/connection.php';
    $sql = "SELECT  COUNT(*) AS total FROM  034_users WHERE tipo = 'socio'";
    $result = mysqli_query($conn, $sql); 
    $row = $result->fetch_assoc();

    // Get the count value
    $count = $row['total'];

    // Print the count
    

        echo '<article
        class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6 mb-5"
        >
  <span class="rounded-full bg-blue-100 p-3 text-blue-600">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="h-8 w-8"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
      stroke-width="2"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"
      />
    </svg>
  </span>

  <div>
    <p class="text-2xl font-medium text-gray-900">'.$count.'</p>

    <p class="text-sm text-gray-500">Socios totales</p>
  </div>
</article>';
      
    
    
    
    
    
?>