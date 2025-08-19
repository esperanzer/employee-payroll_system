<?php
// task 1: calculate the basic pay
// Basic Salary=Hours Worked×Hourly Rate
// With our figures below:
$employeeName = "Margret  Tembo";
$hoursWorked = 40;
$hourlyRate = 15;

$basicSalary = $hoursWorked * $hourlyRate;
echo " Employee Name :$employeeName \n";
echo " Hours worked:$hoursWorked \n";
echo " Hourly Rate: $hourlyRate \n";
echo " Basic Salary is:  $basicSalary \n";

// task 2: calculate Overtime Pay
//Rule: Overtime Pay = Overtime Hours × (Hourly Rate × 1.5) 1.5 is  standard OT in this example
//With our figures:
// $overtimeHours = 7.5;
// $hourlyRate = 15;
// $overtimeRate = 15 * 1.5 = 22.5;
// $overtimePay = 7.5 * 22.5 = 168.75;
$overtimeHours = 7.5;
$hourlyRate = 15;
$overtimeRate = $hourlyRate * 1.5;
$overtimePay = $overtimeHours * $overtimeRate;


// Step 2: Overtime Pay   - first calculate overtime rate in orde to calculate Overtime Pay
$overtimeRate = $hourlyRate * 1.5;
//now calculate Overtime Pay
$overtimePay = $overtimeHours * $overtimeRate;

echo " Employee Name  is:$employeeName \n";
echo " Hours worked  is :$hoursWorked \n";
echo " Hourly Rate: $hourlyRate \n";
echo " Basic Salary is:  $basicSalary \n";
echo " Over Time Hours is: $overtimeHours\n";
echo " OvertimeRate is :$overtimeRate\n";
echo " Over Time Pay is : $overtimePay\n";

//task 3:  Gross Pay Calcculations
$grossPay  =  $basicSalary + $overtimePay;
echo   "Gross Pay is: $grossPay \n";

// gross pay  example with a number of items before deductions.
$allowances = 70;
$bonuses = 45;
$grossPay = $basicSalary + $overtimePay + $allowances + $bonuses;
echo "Secong gross is: $grossPay\n";

// Task 4: Net Pay Calculation
// Deductions
$zra = 30; // Tax
$napsa = 10;  // Social security
$nhima = 47;  // Health insurance

// Net Pay = Gross Pay - Total Deductions
$netPay = $grossPay - ($zra - $napsa - $nhima);
echo " net pay is : $netPay \n";
