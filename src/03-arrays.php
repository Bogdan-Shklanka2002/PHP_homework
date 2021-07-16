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
    for($i = 0; $i < count($input); $i++){
        for($j = 0; $j < $input[$i]; $j++){
            $arr[] = $input[$i];
        }

    } 
    return $arr;  
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
    $arr = array_count_values($input);
    $result = [];
    foreach($arr as $key => $value){
        if($value == 1){
            $result[] = $key;
        }
    }
    if(isset($result)){
        if(count($result) >= 1){
            return min($result);
        }
    } else {
        return 0;
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