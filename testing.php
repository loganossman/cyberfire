<?php
/**
 * @var $smarty Smarty defined in private_html/config.inc.php
 * @var $pdo PDO defined in db.inc.php
 */
include "private_html/config.php";
include PRIVATE_PATH . "db.inc.php";
$date = '2022-11-18';

$sql = "SELECT * FROM availability WHERE date = '$date'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$data = [];
$employeeTable = [];
$locationTable = [];
$shiftTable = [];



while($availability = $stmt->fetch()){
    $sqldate = $availability[3];

    $sqllocationid = $availability[0];
    $sql3 = "SELECT * FROM location WHERE location_id = '$sqllocationid'";
    $stmt3 = $pdo->prepare($sql3);
    $stmt3->execute();
    $location = $stmt3->fetch();//[1]

    $sqluserid = $availability[1];
    $sql2 = "SELECT * FROM employee WHERE user_id ='$sqluserid'";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute();
    $employee = $stmt2->fetch(); //[5] first name  [7]pay

    $sqlshiftid = $availability[2];
    $sql4 = "SELECT * FROM shift WHERE shift_id ='$sqlshiftid'";
    $stmt4 = $pdo->prepare($sql4);
    $stmt4->execute();
    $shift = $stmt4->fetch(); //[3]
    if ($shift[3] == 'full'){
        $shiftNum = 1;
    }else{
        $shiftNum = .5;
    }


    $sqlDataLine = [[$location[1]],[$employee[5]],[$shift[3]],[$sqldate],[$employee[7]],[$shiftNum]];

    array_push($data, $sqlDataLine);
}

for ($x = 0; $x < (count($data)); $x++){
    print_r('[['.implode(" ", $data[$x][0]).'],['.implode(" ", $data[$x][1]).'],['.implode(" ", $data[$x][2]).'],['.implode(" ", $data[$x][3]).'],['.implode(" ", $data[$x][4]).'],['.implode(" ", $data[$x][5]).']],');
    echo "<br>";
    
};

$data1 = [
    [['HRC'],['tim'],['full'],['2022-11-01'],['9.25'],['1']],
    [['HRC'],['josh'],['morning'],['2022-11-01'],['12.55'],['.5']],
    [['HRC'],['bill'],['full'],['2022-11-01'],['7.12'],['1']],
    [['HRC'],['tray'],['full'],['2022-11-01'],['12.25'],['1']],
    [['HRC'],['ben'],['full'],['2022-11-01'],['9.25'],['1']],
    [['HRC'],['ray'],['morning'],['2022-11-01'],['7.20'],['.5']],
    [['HRC'],['shelly'],['evening'],['2022-11-01'],['8.15'],['.5']],
    [['PINE'],['frony'],['full'],['2022-11-01'],['12.50'],['1']],
    [['PINE'],['kris'],['morning'],['2022-11-01'],['11.25'],['.5']],
    [['PINE'],['devin'],['evening'],['2022-11-01'],['8.75'],['.5']],
    [['PINE'],['angle'],['full'],['2022-11-01'],['11.59'],['1']],
    [['PINE'],['rick'],['full'],['2022-11-01'],['9.75'],['1']],
    [['PINE'],['jelm'],['full'],['2022-11-01'],['10.50'],['1']],
    [['PINE'],['tommy'],['full'],['2022-11-01'],['8.75'],['1']],
    [['PINE'],['rico'],['full'],['2022-11-01'],['15.75'],['1']],
    [['PINE'],['jrey'],['morning'],['2022-11-01'],['8.00'],['.5']],
    [['PINE'],['ray'],['morning'],['2022-11-01'],['8.50'],['.5']],
    [['PINE'],['hanna'],['evening'],['2022-11-01'],['9.25'],['.5']],
    [['WINC'],['karaline'],['full'],['2022-11-01'],['11.75'],['1']],
    [['WINC'],['nate'],['morning'],['2022-11-01'],['8.50'],['.5']],
    [['WINC'],['jo'],['morning'],['2022-11-01'],['13.50'],['.5']],
    [['WINC'],['matt'],['evening'],['2022-11-01'],['10.25'],['.5']],
    [['WINC'],['jrey'],['evening'],['2022-11-01'],['8.00'],['.5']],
    
];
$locations = [
    [['Houston(HRC'],['5'],['0']],
    [['Houston(Pine'],['4'],['0']],
    [['Houston(Winchester'],['2'],['0']],
];
$schudule = [];
$data_price_organized = [];
$sm = $data[0];
$count = count($data);

for ($h = 0; $h < $count; $h++){
 
    $smnum = 99.00;
    for ($i = 0; $i < (count($data)); $i++){
        

        if( $smnum > (floatval($data[$i][4][0]))){
            $sm = $data[$i];
            $smnum = (floatval($data[$i][4][0]));
            $index = $i;
        };
    };
    array_splice($data,$index,1);
    array_push($data_price_organized, $sm);
};

for ($x = 0; $x < (count($data_price_organized)); $x++){
    
    print_r($data_price_organized[$x][1][0]." ".$data_price_organized[$x][0][0]." ".$data_price_organized[$x][4][0]." ".$data_price_organized[$x][5][0]." ".$data_price_organized[$x][2][0]);
    echo "<br>";
};
echo "<br>";
echo "<br>";
print_r($locations[1][1]);
echo "<br>";
$a;
for ($x = 0; $x < (count($locations)); $x++){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r("for ".$x."<".(count($locations)));
    echo "<br>";
    $trigger = 0;
    $offset = false;
    while(floatval($locations[$x][2][0]) < floatval($locations[$x][1][0])){
        print_r("while ".floatval($locations[$x][2][0]) ."<".floatval($locations[$x][1][0]));
        echo "<br>";
        for ($b = 0; $b < (count($data_price_organized)-1); $b++){
            if($offset == true){
                $b =$b-1;
                $offset = false;
            }
            print_r("inner for ".$b."<".count($data_price_organized)-1);
            echo "<br>";
            
            if($locations[$x][2][0] < $locations[$x][1][0]){
                
            
                if($locations[$x][0][0] == $data_price_organized[$b][0][0]){
                    print_r("inner if ".$locations[$x][0][0]." == ".$data_price_organized[$b][0][0]);
                    echo "<br>";
                    
                    if(floatval($data_price_organized[$b][5][0]) == .5){
                        if($trigger == 0){
                            print_r("half of a listing has been made but has not been pushed yet");
                            echo "<br>";
                            $a = $data_price_organized[$b];
                            array_splice($data_price_organized,$b,1);
                            $offset = true;
                            $trigger = $trigger + .5;
                        
                        } else if($trigger == .5){
                            print_r($a[2][0]."is not equal to?".$data_price_organized[$b][2][0]);
                            echo "<br>";
                            if($a[2][0] != $data_price_organized[$b][2][0]){
                                print_r("a full listing from two halfs has been made and pushed");
                                echo "<br>";
                                array_push($schudule, $data_price_organized[$b]);
                                array_push($schudule,$a);
                                array_splice($data_price_organized,$b,1);
                                $offset = true;
                                $locations[$x][2][0] = strval((floatval($locations[$x][2][0])+1));
                                $trigger = 0;
                                print_r( $locations[$x][2][0]."<".$locations[$x][1][0]);
                                echo "<br>";
                            }
                            
                        }
                    }else if(floatval($data_price_organized[$b][5][0]) == 1){
                        print_r("a full listing  has been made and pushed");
                        echo "<br>";
                        array_push($schudule, $data_price_organized[$b]);
                        array_splice($data_price_organized,$b,1);
                        $offset = true;
                        $locations[$x][2][0] = strval((floatval($locations[$x][2][0])+1));
                        print_r( $locations[$x][2][0]."<".$locations[$x][1][0]);
                        echo "<br>";

                    }
                    
                }
            }
        }
    }
};

for ($x = 0; $x < (count($schudule)); $x++){
    
    print_r($schudule[$x][1][0]." ".$schudule[$x][0][0]." ".$schudule[$x][4][0]." ".$schudule[$x][5][0]." ".$schudule[$x][2][0]);
    echo "<br>";
};
$names= [];
for ($x = 0; $x < (count($schudule)); $x++){
    array_push($names, $schudule[$x][1][0]);
};
print_r("this is names: ". implode(" ",$names));
echo "<br>";

// https://stackoverflow.com/questions/22045788/check-if-email-exists-in-mysql-database
// https://phpdelusions.net/pdo_examples/check_email_exists
// mr.ianpadilla@gmail.com
// 1234

    
    

    // check if password matches a password in Employee table
$schedule_disputes = [];
$line =[];
$dups = validateDup($names);



function validateDup($names){
    $schedule_disputes = [];
    for ($focus = 0; $focus < (count($names)); $focus++){
        
        $line = [];
        $first = true;
        $push = false;
        for ($other = 0; $other < (count($names)); $other++){
           if($focus != $other){
                if($names[$focus] == $names[$other]){
                    if($names[$focus] != null){
                        print_r("outter if ".$names[$focus]. " = " .$names[$other]);
                        echo "<br>";
                        if($first == true){
                            $line = [[($names[$other])],[$focus],[$other]];
                            echo("the line: ");
                            print_r($line);
                            echo "<br>";
                            $names[$other] = null;
                            $first = false;
                            $push = true;
                        }else{
                            array_push($line, $other);
                        }
                    }   
                }
            }
        }
        if($push == true){
            array_push($schedule_disputes, $line);
        }
        
    }
    return $schedule_disputes;
}




?>
print_r($locations[$x][0][0]." = ".$data_price_organized[$b][0][0]);
array_push($schudule, $data_price_organized[$b]);
echo "<br>";
array_splice($data_price_organized,$b,1);
$locations[$x][2][0] = strval((floatval($locations[$x][2][0])+floatval($data_price_organized[$b][5][0])));
print_r("adding: ".floatval($data_price_organized[$b][5][0]));
echo "<br>";
print_r("sum: ".$locations[$x][2][0]);
echo "<br>";
if(floatval($locations[$x][2][0]) == floatval($locations[$x][2][0])-.5)
function fix($dup){
    for ($z = 0; $z < (count($names)); $z++){
        $check = $dup[$z];
        for ($a = 0; $a < (count($check)-1); $a++){
            if ($check[$a] == 'morning' && $check[$a+1] == 'n')
        }


    }
}
fix($dups);