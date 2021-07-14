<?php
/**
 * The $input variable contains an array of digits
 * Return an array which will contain the same digits but repetitive by its value
 * without changing the order.
 * Example: [1,3,2] => [1,3,3,3,2,2]
 *
 * @param  array  $input
 * @return array
 */
function repeatArrayValues(array $input)
{
    $arr = [];
    for($i = 0; $i < strlen($input); $i++){
        for($j = 0; $j < $input[$i]; $j++){
            array_push($arr, $input[i]);
        }
    }   
}

/**
 * The $input variable contains an array of digits
 * Return the lowest unique value or 0 if there is no unique values or array is empty.
 * Example: [1, 2, 3, 2, 1, 5, 6] => 3
 *
 * @param  array  $input
 * @return int
 */
function getUniqueValue(array $input)
{
    $arr = [];
    if(count($input) > 1){
        $num = $input[0];
        for($i = 0; $i < count($input); $i++ ){
            if(!in_array($input[$i], $arr)){
                array_push($arr, $input[$i]);
            }
            else{
                for($j = 0; $j < count($arr); $j++){
                    if($arr[$j] == $input[$i]){
                        unset($arr[$j]);
                    }
                }
            }
        }
        for($i = 0; $i < count($arr); $i++){
            if ($arr[$i] < $num){
                $num = $arr[$i];
            }            
        }
        return $num;
    }
    else{
        if(count($input) == 0){
            return 0;
        }
        return $input[0];
    }
    
}

/**
 * The $input variable contains an array of arrays
 * Each sub array has keys: name (contains strings), tags (contains array of strings)
 * Return the list of names grouped by tags
 * !!! The 'names' in returned array must be sorted ascending.
 *
 * Example:
 * [
 *  ['name' => 'potato', 'tags' => ['vegetable', 'yellow']],
 *  ['name' => 'apple', 'tags' => ['fruit', 'green']],
 *  ['name' => 'orange', 'tags' => ['fruit', 'yellow']],
 * ]
 *
 * Should be transformed into:
 * [
 *  'fruit' => ['apple', 'orange'],
 *  'green' => ['apple'],
 *  'vegetable' => ['potato'],
 *  'yellow' => ['orange', 'potato'],
 * ]
 *
 * @param  array  $input
 * @return array
 */
function groupByTag(array $input)
{
   
   foreach($input as $item){
       
   }
    // sort($result[$item], SORT_NATURAL | SORT_FLAG_CASE);
    // ksort($result, SORT_NATURAL | SORT_FLAG_CASE);
    // array_key_exists($item, $result)


}