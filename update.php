<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        "paperLink" => $_POST['paperLink'],
        "examTime" => $_POST['examTime'],
        "paperDetails" => $_POST['paperDetails'],
        "deadline" => $_POST['deadline']
    ];

    file_put_contents("exam-data.json", json_encode($data, JSON_PRETTY_PRINT));
    echo "Exam details updated successfully!";
}
?>
