<!-- <?php
function vowelConsonant($char) {
    $vowels = array('a', 'e', 'i', 'o', 'u');

    if (in_array(strtolower($char), $vowels)) {
        return $char . " is a vowel.<br>";
    } else {
        return $char . " is a consonant.<br>";
    }
}

$character = 'a';
echo vowelConsonant($character);

$character = 'd';
echo vowelConsonant($character); 

?> -->

<!-- <?php
function digitToWord($number) {
    $digitWords = array(
        'Zero', 'One', 'Two', 'Three', 'Four',
        'Five', 'Six', 'Seven', 'Eight', 'Nine'
    );

    $result = '';
    $digits = str_split($number);

    foreach ($digits as $digit) {
        $result .= $digitWords[$digit] . ' ';
    }

    return trim($result);
}
$number = 721;
echo digitToWord($number);

?> -->

<!-- <?php
function divByThree($number) {
    if ($number % 3 === 0) {
        return true;
    } else {
        return false;
    }
}

$number = 8;
if (divByThree($number)) {
    echo $number . " is divisible by 3.";
} else {
    echo $number . " is not divisible by 3.";
}

?> -->

<!-- <?php
function delSameElements($sortedList) {
    $result = array();

    $length = count($sortedList);
    if ($length === 0) {
        return $result;
    }

    $previous = $sortedList[0];
    $result[] = $previous;

    for ($i = 1; $i < $length; $i++) {
        $current = $sortedList[$i];
        if ($current !== $previous) {
            $result[] = $current;
            $previous = $current;
        }
    }

    return $result;
}

$list = array("apple", "apple", "banana", "banana", "banana", "orange", "peach", "peach", "peach", "peach");
$deduplicatedList = delSameElements($list);
print_r($deduplicatedList); 

?> -->

<!-- <?php
function armstrongNumber($number) {
    $originalNumber = $number;
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit ** 3;
        $number = (int) ($number / 10);
    }

    if ($originalNumber === $sum) {
        return true;
    } else {
        return false;
    }
}

$number = 153;
if (armstrongNumber($number)) {
    echo $number . " is an Armstrong Number.";
} else {
    echo $number . " is not an Armstrong Number.";
}

?> -->