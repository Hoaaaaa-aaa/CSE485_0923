<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

echo "<style>
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    th, td {
        border: 1px solid black;
        text-align: left;
    }
</style>";

echo "<table>";
echo "<tr><th>Các khoá học</th></tr>";

foreach ($arrs as $item) {
    echo "<tr><td>" . $item . "</td></tr>";
}

echo "</table>";
?>