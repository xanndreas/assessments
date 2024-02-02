<?php

function example() {
    $raw = array(1, 2, 3, 4, 5);

    // array manipulate
    foreach ($raw as $index => $val) {
        // cond: ganjil tambahkan 2, genap kurangi 1
        if ($val % 2 == 1) {
            $raw[$index] += 2;
        } else {
            $raw[$index] -= 1;
        }
    }

    // cond: raw > 3, tambahkan elemen baru
    if (count($raw) > 3) {
        $raw[] = 6;
    }

    return $raw;
}



print_r(example());

// 3, 1, 5, 3, 7, 6

?>