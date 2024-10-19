<?php
    function calculatingResult( int $mark1 , int $mark2 , int $mark3 ,int $mark4 , int $mark5) {
    
         if ($mark1 < 0 || $mark1 > 100) {
            return "Subject One range is invalid.";
            } 
            if ($mark1 < 33) {
            return "Result: Failed in subjects-One.";
        }

        if ($mark2 < 0 || $mark2 > 100) {
            return "Subject Two range is invalid.";
            }
            if ($mark2 < 33) {
            return "Result: Failed in subjects-Two";
            }

        if ($mark3 < 0 ||$mark3 > 100) {
            return "Subject Three range is invalid.";
        }
            if ($mark3 < 33) {
            return "Result: Failed in subjects-Three";
        }

        if ($mark4 < 0 ||$mark4 > 100) {
            return "Subject Four range is invalid.";
        }
            if ($mark4 < 33) {
            return "Result: Failed in subjects-Four.";
        }
        
        if ($mark5 < 0 ||$mark5 > 100) {
            return "Subject Five range is invalid.";
        }
            if ($mark5 < 33) {
            return "Result: Failed in subjects-Five";
        }
        
        
        $subjectNumbers = 5 ; 
        $total = $mark1 + $mark2 + $mark3 + $mark4 + $mark5 ;
         $average = $total /  $subjectNumbers;


    $grade = '';
        switch (true) {

            case ($average >= 80 && $average <= 100):
            $grade = 'A+';
            break;

            case ($average >= 70 && $average <= 79):
            $grade = 'A';
            break;

            case ($average >= 60 && $average <= 69):
            $grade = 'A-';
            break;

            case ($average >= 50 && $average <= 59):
            $grade = 'B';
            break;

            case ($average >= 40 && $average <= 49):
            $grade = 'C';
            break;

            case ($average >= 33 && $average <= 39):
            $grade = 'D';
            break;
            
            default:
             $grade = 'F';
            break;
    }

    return "Total Marks: $total \nAverage Marks: $average \nGrade: $grade";
}


    $mark1 = 50;
    $mark2 = 52;
    $mark3 = 45;
    $mark4 = 45;
    $mark5 = 40;

echo calculatingResult( $mark1 , $mark2 ,$mark3, $mark4 , $mark5);
?>