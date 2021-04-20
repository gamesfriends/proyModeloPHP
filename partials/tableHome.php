<table class="tableHome">
    <tr class="tableHome-row">
        <th class="tableHome-cellTh">ID</th>
        <th class="tableHome-cellTh">NAME</th>
        <th class="tableHome-cellTh">LASTNAME</th>
        <th class="tableHome-cellTh">NAME</th>
        <th class="tableHome-cellTh">DNI</th>
    </tr>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr class='tableHome-row'>";
                if ( $i % 2 == 0) {
                    $colorRow = "par";
                } else {
                    $colorRow = "noPar";
                }
                echo "<td class='tableHome-cell " . $colorRow . "'>" . $i . "</td>";
                echo "<td class='tableHome-cell " . $colorRow . "'>" . $i . "</td>";
                echo "<td class='tableHome-cell " . $colorRow . "'>" . $i . "</td>";
                echo "<td class='tableHome-cell " . $colorRow . "'>" . $i . "</td>";
                echo "<td class='tableHome-cell " . $colorRow . "'>" . $i . "</td>";
            echo "</tr>";
        }
    ?>
</table>