<?php
function is_prime(int $n): bool {
    if ($n <= 1) {
        return false;
    }
    if ($n === 2) {
        return true;
    }
    if ($n % 2 === 0) {
        return false;
    }

    for ($i = 3; $i <= sqrt($n); $i += 2) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
    /*
        case 2
            for ($i = (int)($n ** 0.5) | 1; $i && $n % $i--;);
            return !$i && $n > 1;
    */
}

echo is_prime(0)."<<<\n";
echo is_prime(1)."<<<\n";
echo is_prime(2)."<<<\n";
echo is_prime(3)."<<<\n";
echo is_prime(4)."<<<\n";
echo is_prime(5)."<<<\n";
echo is_prime(234)."<<<\n";
echo is_prime(33457)."<<<\n";
echo is_prime(3357234)."<<<\n";
echo is_prime(33472)."<<<\n";
echo is_prime(473333)."<<<\n";
