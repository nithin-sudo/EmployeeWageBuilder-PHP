<?php
class EmployeeWage
{
   /**
    *Declaring a static function and checking the Employee
    *Attendance by using rand() function
    */
   public static function calcEmployeeWage()
   {
    $IS_FULL_TIME = 1;
    $IS_PART_TIME = 0;
    $WAGE_PER_HOUR = 20;
    $WORKING_DAYS = 20;
    $empHrs = 0;
    $dailyWage = 0;
    $totalWage = 0;
    $totalWorkingHrs = 0;
    //calculating employee daily wage per month using switch.
    for ($i=1; $i < $WORKING_DAYS ; $i++) 
    { 
        $random = rand(0,1);
        switch ($random) 
        {
        case $IS_FULL_TIME:
            $empHrs = 8;
            break;
        case $IS_PART_TIME:
            $empHrs = 4;
            break;
        default:
            $empHrs = 0;
        }

        //Calculating wage till this condition.
        if($totalWorkingHrs >= 100 || $i == 20)
        {
            break;
        }
        $dailyWage = $WAGE_PER_HOUR * $empHrs;
        $totalWage += $dailyWage;
        $totalWorkingHrs += $empHrs;
    }
    echo "Total Working Days: ".$i."Total Working Hours:".$totalWorkingHrs." , "."Salary Per Month: ".$totalWage;
    }
}
#calling the static function by using the class.
EmployeeWage::calcEmployeeWage();
?>