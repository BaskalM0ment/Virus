<?php
echo "<script>";
for ($i = 0; $i < 1000; $i++) {
    echo "window.open('https://www.google.com', '_blank');";
}
echo "</script>";
?>
