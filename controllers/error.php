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

    class Error extends Controller {
        function __construct() {
            parent::__construct();
        }
        function index() {
            $this->view->render('error');
        }
    }
?>