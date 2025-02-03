<?php
    class Employee {
        
        private $conn;

        public function __construct() {
            $this->conn = new mysqli('localhost', 'admin', 'password', 'guestbook');
            
            if ($this->conn->connect_errno > 0) 
            {
                die("Fel vid anslutning: " . $this->conn->connect_error);
            }
        }

        public function __destruct()
        {
            $this->conn->close();
        }


        // Read list of employees from the database
        public function getEmployees() {
            $employees = Array();

            // Get messages from database and add into the array
            $query = "SELECT * FROM employee";

            $result = $this->conn->query($query);

            while($row = $result->fetch_assoc())
            {
                array_push($employees, Array($row["id"], $row["namn"], $row["roll"]));    
            }

            return $employees;
        }

        // Print list of employees from array
        public function printEmployees($employees) {
            
            foreach ($employees as $a) {
                echo "<div class='individual_employees'>";

                $altFoto = "'Foto av ".$a[1]."'";
                $urlFoto = "'images/anstallda/".$a[1].".jpg'";

                echo "
                <picture>
                <source media='(min-width: 650px)' srcset=".$urlFoto.">
                <source media='(min-width: 465px)' srcset=".$altFoto.">
                <img src=".$urlFoto." alt=".$altFoto.">
                </picture>
                ";

                echo "<h2>".$a[1]."</h2>";
                echo "<p>".$a[2]."</p>";

                echo "<br>";
                echo "</div>";
            };
        }
    }
?>