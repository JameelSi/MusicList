<?php>
$data = [
    ["artist_name"=> "עקיבא","name"=>"פשוטים", "id"=>"e8LX8SxYWdI"],
    ["artist_name"=> "ישי ריבו","name"=>"לשוב הביתה", "id"=>"Y30pfWIQfoo"],
    ["artist_name"=> "ישי ריבו","name"=>"לשוב הביתה", "id"=>"Y30pfWIQfoo"],
    ];
header('Content-Type: application/json');
echo json_encode($data);