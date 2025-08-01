
<?php
$score = 40;

if($score >= 90):

    echo "Grade A";

elseif($score >=80 && $score < 90):

    echo "Grade B";

elseif($score >=70 && $score < 80):

    echo "Grade C";

elseif($score >=60 && $score < 70):

    echo "Grade D";

else:

    echo "Grade F";
endif;

echo "<br/>";

$word = "Sadia";
$first = $word[0];
$consonent = "B-Z";
if($first == "A" || $first == "E" || $first == "I" || $first == "O" || $first == "U")
{
    echo "Word starts with vowel " . $first;
}
else
{
    echo "Word starts with consonent " . $consonent;
}

echo "<br/>";
$today = date("D");
switch($today)
{
    case "Sat":
        echo "Today is Saturday.";
        break;
    case "Sun":
        echo "Today is Sunday.";
        break;
    case "Mon":
        echo "Today is Monday.";
        break;
    case "Tue":
        echo "Today is Tuesday.";
        break;
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break;
    case "Fri":
        echo "Today is Friday.";
        break;
}

echo "<br/>";

$unitType = "Hospital";
$unit_icon ="";
$unit_service = "";
switch($unitType)
{
    case "Hospital":
        $unit_icon = "hospital.png";
        $unit_service = "Medical Service.";
        displayUnitInfo();
        break;

    case "University":
        $unit_icon = "University.png";
        $unit_service = "For higher Education.";
        displayUnitInfo();
        break;

    case "Police_Station":
        $unit_icon = "policestation.png";
        $unit_service = "For safty service.";
        displayUnitInfo();
        break;
    
    default:
        echo "Undefined Unit.";
        break;

}
function displayUnitInfo()
{
    global $unitType, $unit_icon, $unit_service;
    echo "Unit Type: " . $unitType . "<br/>";
    echo "Unit Image Name: " . $unit_icon . "<br/>"    ;
    echo "Unit Service: " . $unit_service;
}
    echo "<br/>";

$randomizer = rand(1,50);
switch($randomizer)
{
    case($randomizer <= 20):
        $fontSize = 11;
        break;
    
    case($randomizer <= 30):
        $fontSize = 16;
        break;
    
    case($randomizer <= 40):
        $fontSize = 18;
        break;
    
    case($randomizer <= 50):
        $fontSize = 20;
        break;

    default:
        $fontSize = 11;
        break;
}
//echo "<span style = 'font-size: . "$fontSize . ";'> www.jamunagroup.com <span/>";
echo "<span style = 'font-size: $fontSize ', color: red;>  Dhaka  </span>"


$i = 1;
while($i < 10)
{
    $x = sqrt($i);
    echo "Sqrt($i) : " . $x . "<br/>";
    $i++;
}

$age = 18;
if($age >= 18)
{
    echo "Congratulations! you can vote. <br/>";
}
else
{
    echo "Sorry! you can't vote. <br/>";
}
echo "Thank you.";

?>