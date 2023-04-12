<?php

    $numbers = array(1,2,3,4,5,6,7);

    function binary_search($arr, $target) {
        $left = 0;
        $right = count($arr)-1;

        while ($left<=$right){
            $mid = floor(($left+$right)/2);
            if ($arr[$mid] == $target) {
                return $mid;
            } elseif ($arr[$mid] < $arr[$target]) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return -1;
    }

    echo binary_search($numbers, 3);

    

?>