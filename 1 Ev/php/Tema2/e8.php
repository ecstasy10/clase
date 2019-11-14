<html>
<body>
    <center>
    <h1>Trabajando con Matrices o arrays</h1>

    <TABLE BORDER="1" CELLPADDING="2" CELLSPACING="2">
    <TR ALIGN="center" BGCOLOR="yellow">
    <td></td>
    <td>Modelo</td>
    <td>Marca</td>
    <td>Fecha</td>
    <td>CC</td>
    <td>Motor</td>
    <td>Potencia</td>
    
    

    <?php
    $matriz0 = array('cougar', 'ford', ' ', '2.500', 'V6', '182');
    $matriz1 = array('Modelo'=>'cougar', 'Marca'=>'ford', 'Fecha'=>' ', 'CC'=>'2.500', 'Motor'=>'V6', 'Potencia'=>'182');

    echo("<tr ALIGN=center>");
    echo("<td BGCOLOR=yellow>matriz1</td>");
    echo("<td>$matriz0[0]</td>");
    echo("<td>$matriz0[1]</td>");
    echo("<td>$matriz0[2]</td>");
    echo("<td>$matriz0[3]</td>");
    echo("<td>$matriz0[4]</td>");
    echo("<td>$matriz0[5]</td>");

    echo("<tr ALIGN=center>");
    echo("<td BGCOLOR=yellow>matriz2</td>");
    echo("<td>$matriz1[Modelo]</td>");
    echo("<td>$matriz1[Marca]</td>");
    echo("<td>$matriz1[Fecha]</td>");
    echo("<td>$matriz1[CC]</td>");
    echo("<td>$matriz1[Motor]</td>");
    echo("<td>$matriz1[Potencia]</td>");
    ?>

</body>
</html>

