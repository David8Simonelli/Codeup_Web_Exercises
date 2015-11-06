<?php

class Input {
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static $error = [];
    public static function has($key) {
        if(empty($_REQUEST[$key])) {
            return false;
        }
        else {
            return true;
        }
    }
    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null) {
        if(empty($key)) {
             array_push(self::$error,'Entry was empty.');
            return $default;
        }
        else {
            return $key;
        }
    }
    public static function getString($key, $min, $max) {
        if (!is_string($key) || !is_integer($min) || !is_integer($max)) {
            throw new InvalidArgumentException("Input is not in correct format.", 1);
        }
        if (empty($key)) {
            throw new OutOfRangeException("Input is empty.", 1);   
        }
        $val = static::get($key);
        if ($val > $max || $val < $min) {
            throw new LengthException("Input is out of range of the $/min and $/max.", 1);   
        }
        if (!is_string($val)) {
            array_push(self::$error, 'Not a string.');
            return 'String Fail';
        }
        return trim($val);
    }
    public static function getNumber($key, $min = 1, $max = 30) {
        if (!is_integer($key) || !is_integer($min) || !is_integer($max)) {
            throw new InvalidArgumentException("Input is not in correct format.", 1);
        }
        if (empty($key)) {
            throw new OutOfRangeException("Input is empty.", 1);   
        }
        $val = static::get($key);
        if ($key > $max || $key < $min) {
            throw new RangeException("Input is out of range of the $/min and $/max.", 1);   
        }
        if (!is_numeric($val)) {
            array_push(self::$error, 'Not a number.');
            return 404;
        }
        return trim($key);
    }
    public static function getDate($key, $min = 1, $max = 30) {
        $val = static::get($key);
        if (empty($val[9]) || $val[9] === ' ') {
            array_push(self::$error, 'Entry for date was Invalid');
        }
        $i = 0;
        do {
            if (is_numeric($val[$i]) || $val[$i] === '-') {
                $i++;
            } else {
                array_push(self::$error, 'Not Numeric.');
                return 404;
            }
        } while ($i != 9);
        if ($val[4] . $val[7] != '--') {
            array_push(self::$error, 'Misplaced "--"');
        }
        if ($val[5] * 10 + $val[6] > 12) {
            array_push(self::$error, 'Invalid Month');
        }
        if ($val[8] * 10 + $val[9] > 31) {
            array_push(self::$error, 'Invalid Day');
        }
        return 404;
    }
    public static function checkErrors() {
        $array = self::$error;
        foreach ($array as $key => $value) {
            echo $value . PHP_EOL;
        }
    }
    // / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / 
    //                      DO NOT EDIT ANYTHING BELOW!!                     /
    // The Input class should not ever be instantiated, so we prevent the     /
    // constructor method from being called. We will be covering private     /
    // later in the curriculum.                                               /
    // / / / / / / / / / /  / / / / / /  / / / / / /  / / / / / /  / / / / / / 
}
// $devisionsub = 5;
// $devisionName = 1;
// $winstreak = 0;
// $elo = 0;
// $elogain = 15;
// $winrate = rand(1, 2);
// $lose = 0;
// $win = 0;
// for ($i = 0; $i < 1000; $i++) {
//     if ($elo >= 100 && $winstreak >= 3) {
//         $devisionsub = -1;
//     }
//     if ($devisionsub <= 0) {
//         $devisionName ++;
//         $devisionsubsub = 5; 
//     }
//     $elogain += $winstreak;
//     if(rand(1, 2) == 2) {
//         $win++;
//         $elo += $elogain;
//         $winstreak++;
//     } else {
//         $lose++;
//         $winstreak = 0;
//         $elogain = 15;
//         $elo -= $elogain;
//     }
//     $devision = $devisionsub;
//     $devisionRem = $devision % 5;
//     $rank = $devision -($devisionRem) / 5;
//     echo 'Rank' . $rank . $devisionsub . 'Elo = ' . $elo . ', WinStreak' . $winstreak . PHP_EOL;
// }
// echo $win . ' ' . $lose . PHP_EOL;








