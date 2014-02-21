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

for ($i = 0; $i < 5; $i++) {
    echo str_repeat(' ', $i) . str_repeat('#', $i + 1) .  str_repeat('%', abs(12 - $i) - 8) . PHP_EOL;
}
