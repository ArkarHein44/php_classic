<?php

$students = [
    [
        "firstname "=>"Aung Kyaw",
        "lastname"=>"Kyaw"
    ],
    [
        "firstname "=>"Tun Tun",
        "lastname"=>"Aung"
    ],
    [
        "firstname "=>"Kyaw Kyaw",
        "lastname"=>"Htway Lwin"
    ],
    [
        "firstname "=>"Hsu Hsu Tun",
        "lastname"=>"Kyaw"
    ],
    [
        "firstname "=>"Thura Tun",
        "lastname"=>"Kyaw"
    ],
];



?>
<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Working With HTML</title>
</head>
<body>
    <h1>Data Land <?php echo "Student list"; ?></h1>
    <ul>
        <li><?php echo $students[0]['firstname']." ". $students[0]['lastname']; ?></li>
        <li><?php echo $students[1]['firstname']." ". $students[1]['lastname']; ?></li>
        <li><?php echo $students[2]['firstname']." ". $students[2]['lastname']; ?></li>
        <li><?php echo $students[3]['firstname']." ". $students[3]['lastname']; ?></li>
        <li><?php echo $students[4]['firstname']." ". $students[4]['lastname']; ?></li>
    </ul>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
    <title>Working With HTML</title>
</head>
<body>
    <h1>Data Land <?php echo "Student list"; ?></h1>
    <ul>
        <?php foreach($students as $Student) : ?>
         <li>
            <?php  echo "{$student["firstname"]} {$student["lastname"]}"; ?>
         </li>
         <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach($students as $Student) : ?>
         <li>
            <?php  echo "{$student["firstname"]} {$student["lastname"]}"; ?>
         </li>
         <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach($students as $Student) : ?>
         <li>
            <?= "{$student["firstname"]} {$student["lastname"]}"; ?>
         </li>
         <?php endforeach ?>
    </ul>
</body>
</html>

// 