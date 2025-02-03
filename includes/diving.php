<?php
    class Diving {
        
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


        // Write requested booking to the database
        public function divingBooked($namn, $epost, $antal, $datum)
        {
            $sql = "INSERT INTO diving_bookings (namn, epost, antal, datum)VALUES('$namn', '$epost', '$antal','$datum');";
            $result = $this->conn->query($sql);
        }

        // Write confirmation that form is sent to screen
        public function confirmSent($namn)
        {
            echo '<script>
                let text = "Vad roligt att du vill dyka hos oss! Vi hör av oss så snart vi kontrollerat bokningen.";
                document.getElementById("confirm").innerHTML = text;
            </script>';
        }
    }
?>