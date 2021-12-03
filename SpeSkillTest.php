<?php
class SpeSkillTest
{
    /**
     * Location of expected template
     *
     * @var string
     */
    public $folder;
    /**
     * Template constructor.
     *
     * @param $folder
     */
    function __construct($folder = null)
    {
        if ($folder) {
            $this->set_folder($folder);
        }
    }
    /**
     * Simple method for updating the base folder where templates are located.
     *
     * @param $folder
     */
    function set_folder($folder)
    {
        // normalize the internal folder value by removing any final slashes
        $this->folder = rtrim($folder, '/');
    }

    public function narcissistic(int $number)
    {
        $digit = strlen($number);
        $split = explode($number, "");
        $cek = 0;
        for ($i = 0; $i <= count($split); $i++) {
            $cek += pow($split[$i], $digit);
        }
        if ($cek === $number)
            return true;
        return false;
    }

    public function parity_outlier($array)
    {
        $a = array();
        foreach ($array as $value) {
            $mod = $value % 2;
            array_push($a, $mod);
        }
        $c = array_count_values($a);
        if (in_array(1, $c)) {
            $cek = array_search(1, $c);
            $cek2 = array_search($cek, $a);
            return $array[$cek2];
        }
        return false;
    }

    public function findNeedle(array $array, string $string)
    {
        $return = 0;
        foreach ($array as $key => $value) {
            if ($value === $string) {
                $return = $key;
                break;
            }
        }
        return $return;
    }

    public function blue_ocean(array $array1, array $array2)
    {
        $temp_array = $array1;
        $new_array = array();
        foreach ($array1 as $key => $value) {
            foreach ($array2 as $value2) {
                if ($value === $value2) {
                    unset($temp_array[$key]);
                }
            }
        }
        foreach ($temp_array as $value) {
            array_push($new_array, $value);
        }
        return $new_array;
    }
}
