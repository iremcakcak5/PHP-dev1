<?php
function ucgnYap($sayi)
{
    for ($i = 1; $i <= $sayi; $i++) {
        $count = 1;
        while ($count <= $i) {
            $count++;
            echo 'o' . ' ';
        }
        echo '<br>';
    }
}
ucgnYap(15);