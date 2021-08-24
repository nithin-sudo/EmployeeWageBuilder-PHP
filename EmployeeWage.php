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
    $FULL_WORK_HOUR = 8;
    $PART_WORK_HOUR = 4;
    $random = rand(0,1);
    
    //calculating employee daily wage using switch.
    switch ($random) 
    {
        case $IS_FULL_TIME:
            print "Employee is present";
            $dailyWage = $WAGE_PER_HOUR * $FULL_WORK_HOUR;
            print "Daily Wage: ".$dailyWage;
            break;
        case $IS_PART_TIME:
            print "Employee is Part time present";
            $dailyWage = $WAGE_PER_HOUR * $PART_WORK_HOUR;
            print "Daily Wage: ".$dailyWage;
            break;
        default:
            echo "Employee is absent.";
            break;
    }
    }
}
#calling the static function by using the class.
EmployeeWage::calcEmployeeWage();
?>