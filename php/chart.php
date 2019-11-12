<?php
include("connection.php");

$q = "SELECT vw01_characteristic,
 vw01_muito_relevante,
  vw01_pouco_relevante,
   vw01_nao_relevante,
   vw01_pct_muito_relevante,
   vw01_pct_pouco_relevante,
   vw01_pct_nao_relevante
FROM VW01_DASHBOARD
ORDER BY VW01_MUITO_RELEVANTE DESC, VW01_PCT_POUCO_RELEVANTE DESC, VW01_NAO_RELEVANTE DESC;";

$result = pg_query($conn, $q) or die(error());

$res = "";
$i = 0;
while ($row = pg_fetch_array($result)) {
    $res[$i]['category'] = $row['vw01_characteristic'];
    $res[$i]['value1'] = $row['vw01_muito_relevante'];
    $res[$i]['value2'] = $row['vw01_pouco_relevante'];
    $res[$i]['value3'] = $row['vw01_nao_relevante'];
    $res[$i]['vw01_pct_muito_relevante'] = $row['vw01_pct_muito_relevante'];
    $res[$i]['vw01_pct_pouco_relevante'] = $row['vw01_pct_pouco_relevante'];
    $res[$i]['vw01_pct_nao_relevante'] = $row['vw01_pct_nao_relevante'];
    $i++;
}

echo json_encode($res);

?>