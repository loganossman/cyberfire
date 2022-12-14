<?php
/**
 * @var $smarty
 */

include "../private_html/config.php";
include PRIVATE_PATH . "db.inc.php";

$value = $_SESSION["id"];
$value2 = $value['user_id'];
console_log($value2);


$sql = "SELECT employee.first_name,employee.last_name, location.city_name, shift.shift_times, Date, schedule.user_id
        FROM schedule
            INNER JOIN employee ON schedule.user_id=employee.user_id
            INNER JOIN location ON schedule.Location_id=location.location_id
            INNER JOIN shift ON schedule.Shift_id=shift.Shift_id

            WHERE schedule.user_id = $value2
            ";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$item = array();
$array = array();
$i = 0;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ///while theres a row that equals the exucted satement
        $i = $i + 1;
        
        $item['name'] = $row['first_name']." ".$row['last_name'] ;
        $item['location'] = $row['city_name'];
        $item['date'] = $row['Date'];
        $item['shift'] = $row['shift_times'];
        $array[$i] = $item;
}
function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
    if ($with_script_tags)
    {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
    return;
}
$smarty->assign("array", $array);
$smarty->display("EmployeeSchedule.tpl");

