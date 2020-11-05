<?php 
    function getDB() {
        return $db = pg_connect("host=ec2-184-72-235-159.compute-1.amazonaws.com
                          dbname=d8nasp8suj2ma8c
                          port=5432
                          user=nztasikyjwjrat
                          password=e49a2098cb7b917f11d2c47afb61102f8e062e5a68955364d6a80cef8928356d")
                          or die("Connection failed!")
    }


   
 ?>