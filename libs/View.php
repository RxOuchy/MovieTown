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

    class View {
        
        function __construct() {
            
        }
        
        public function render($name) {
            require 'templates/header.php';
            require 'views/' . $name . '/index.php';
            require 'templates/footer.php';
        }
        
    }
?>