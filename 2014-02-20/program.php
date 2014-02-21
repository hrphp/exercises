<?php
for ($i = 1; $i < 9; $i++) {
    echo str_repeat('#', 8 - $i) . PHP_EOL;
}
echo PHP_EOL;
for ($i = 1; $i < 9; $i++) {
    echo str_pad('', $i, '#') . PHP_EOL;
}
echo PHP_EOL;
$parts = [];
for ($i = 2; $i < 10; $i += 2) {
    $parts[] = str_pad(str_repeat('#', abs(10 - $i)), 8, ' ', STR_PAD_BOTH);
}

foreach (array_reverse($parts) as $part) {
    echo $part . PHP_EOL;
}
foreach ($parts as $part) {
    echo $part . PHP_EOL;
}

for ($i = -8; $i < 10; $i += 2) {
    if (abs($i)) {
        echo str_repeat(' ', (8 - abs($i))/2)
           . str_repeat('#', ((8 - abs($i))/2) + 1)
           . str_repeat(' ', ((abs($i)/2) -1) * 4)
           . str_repeat('#', ((8 - abs($i))/2) + 1)
           . PHP_EOL;
    }
}
