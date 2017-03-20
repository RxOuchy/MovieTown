<?php

/**
 *     Movie Town
 *     
 *     @category   Movie's
 *     @package    MovieTown
 *     @author     Brandon <bwhite@listrak.com>
 *     @version    1.0.0
 */

?>

<?php

    class Model {
    
        function __construct() {
            
        }
        
        function dbConnect($host, $user, $pass, $db = null, $port = 3306) {
            $this->db = new dbConnection($host, $user, $pass, $db, $port);
        }
    
    }

?>