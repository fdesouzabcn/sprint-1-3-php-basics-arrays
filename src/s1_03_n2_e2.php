<?php

function compareStudentGrade(array $student): void {
    
    $sumGrades = 0;
    $nbGrades = 0;
    
    echo "Student Grade Mean:\n";
    
    foreach ($student as $name => $grades) {
        $mean = array_sum($grades) / count($grades);
        echo "$name: " . round($mean, 2) . "\n";
        $sumGrades += array_sum($grades);
        $nbGrades += count($grades);
    }
    
    $meanAllgrades = $sumGrades / $nbGrades;
    echo "\nMean All Students Grade: " . round($meanAllgrades, 2) . "\n";
}

$students_grades = [
    "Student_1" => [7, 8, 6, 9, 7],
    "Student_2" => [9, 10, 8, 9, 10],
    "Student_3" => [5, 6, 7, 5, 6],
    "Student_4" => [8, 9, 7, 8, 9],
];

compareStudentGrade ($students_grades)

?>
