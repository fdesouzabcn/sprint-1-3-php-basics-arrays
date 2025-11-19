<?php

function findIntersection (array $guestsList1, array $guestsList2): array{
    $gIntersection= array_intersect ($guestsList1, $guestsList2);
    return array_values ($gIntersection);
};

function mergeList (array $guestsList1, array $guestsList2): array{
    $gFullListRaw = array_merge($guestsList1, $guestsList2);
    $gFulllistClean = array_unique ($gFullListRaw);
    return array_values ($gFulllistClean);
};

function findExclusiveList1 (array $guestsList1, array $guestsList2): array{
    $gexclusive = array_diff ($guestsList1, $guestsList2);
    return array_values ($gexclusive);
};

function findExclusiveList2 (array $guestsList1, array $guestsList2): array{
    $gexclusive = array_diff ($guestsList2, $guestsList1);
    return array_values ($gexclusive);
};

$guestsList1 = ['Pedro','Clara','Roberto','Lucas'];
$guestsList2 = ['Clara','Lara','Johanna','Roberto'];

$findIntersection = findIntersection ($guestsList1,$guestsList2);
$mergeList = mergeList ($guestsList1,$guestsList2);
$findExclusiveList1 = findExclusiveList1 ($guestsList1,$guestsList2);
$findExclusiveList2 = findExclusiveList2 ($guestsList1,$guestsList2);

echo "   [" . implode(", ", $findIntersection) . "]\n";
echo "   [" . implode(", ", $mergeList) . "]\n";
echo "   [" . implode(", ", $findExclusiveList1) . "]\n";
echo "   [" . implode(", ", $findExclusiveList2) . "]\n";

?>
