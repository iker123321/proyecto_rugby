<?php
    header("Content-Type: text/html; charset=UTF-8");
    include $_SERVER['DOCUMENT_ROOT'].'/proyecto_rugby/templates/connection.php';
    $results = array();

    // Execute the SQL query
    $sql = "SELECT COUNT(*) AS total, MONTH(order_date) AS month
            FROM 034_orders
            GROUP BY MONTH(order_date)";
    $result = $conn->query($sql);
    
    // Check if the query was successful
    if ($result) {
        // Initialize an array to track the existing months
        $existingMonths = array();
    
        // Loop through the results
        while ($row = $result->fetch_assoc()) {
            $total = $row['total'];
            $month = $row['month'];
    
            // Store the result in the array
            $results[$month] = $total;
    
            // Add the month to the existing months array
            $existingMonths[] = $month;
        }
    
        // Fill in missing months with 0
        for ($i = 1; $i <= 12; $i++) {
            if (!in_array($i, $existingMonths)) {
                $results[$i] = 0;
            }
        }

       $prueba =  json_encode($results);
       setcookie('ordersByMonth', $prueba, time() + 86400, '/');


       $sum = array_sum($results);
       echo '<article
       class="flex items-center gap-4 rounded-lg border border-gray-100 bg-white p-6"
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
   <p class="text-2xl font-medium text-gray-900">'.$sum.'</p>
   <p class="text-sm text-gray-500">Pedidos relaizados</p>
 </div>
</article>';
    } else {
        echo "Error executing query: " . $conn->error;
    }
      
    
    
    
    
    
?>