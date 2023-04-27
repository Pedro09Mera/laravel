<?php
use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Versión de SQL Server</title>
</head>
<body>
    <?php
        $version = DB::select('select @@version as version')[0]->version;
        echo "La versión de SQL Server es: ".$version;
    ?>
</body>
</html>
