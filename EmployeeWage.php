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
    $random = rand(0,1);
    if($random == $IS_FULL_TIME)
        print "Employee is present";
    else
        print "Employee is absent" ;   
   }
}
#calling the static function by using the class.
EmployeeWage::calcEmployeeWage();
?>