<?php
include("connection.php");

$q = "SELECT UF04.UF04_NAME,
       UF04.UF04_COD_EXPERT,
       UF08.uf08_name,
       uf07.UF07_NAME,
       uf05.UF05_NAME,
       to_char(UF09.UF09_DATE, 'DD-MM-YYY') AS data_cadastro
FROM UF04_EXPERT uf04
         left join uf08_initiative uf08 oN UF04.fkuf04uf08_cod_initiative = UF08.UF08_COD_INITIATIVE
         left join uf07_city uf07 ON uf07.UF07_COD_CITY = uf04.FKUF04UF07_COD_CITY
         left join uf06_state uf06 ON uf06.UF06_COD_STATE = uf07.fkuf07uf06_cod_state
         left join uf05_country uf05 ON uf05.UF05_COD_COUNTRY = uf06.fkuf06uf05_cod_country
         LEFT JOIN UF09_ANSWER UF09 on (UF09.FKUF09UF04_COD_EXPERT = UF04.UF04_COD_EXPERT AND
                                        UF09.uf09_cod_answer = (SELECT MAX(uf09_cod_answer)
                                                                FROM UF09_ANSWER
                                                                WHERE FKUF09UF04_COD_EXPERT = UF04.UF04_COD_EXPERT))
WHERE UF04_COD_EXPERT IN (
    SELECT DISTINCT FKUF09UF04_COD_EXPERT
    FROM UF09_ANSWER
);";

$result = pg_query($conn, $q) or die(error());
?>