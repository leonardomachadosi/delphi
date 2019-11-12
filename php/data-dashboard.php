<?php
include("connection.php");

$q = "SELECT *
FROM VW01_DASHBOARD
ORDER BY VW01_MUITO_RELEVANTE DESC, VW01_PCT_POUCO_RELEVANTE DESC, VW01_NAO_RELEVANTE DESC;";

$result = pg_query($conn, $q) or die(error());
?>