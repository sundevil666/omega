<?php
require_once(__DIR__ . '/../../../vendor/autoload.php');

use Carbon\Carbon;

$created_at = Carbon::now()->format('Y');
?>

<?php wp_footer(); ?>

<script type='text/javascript' src='/wp-content/themes/twentynineteen/dist/index.js'></script>

</body>
</html>
