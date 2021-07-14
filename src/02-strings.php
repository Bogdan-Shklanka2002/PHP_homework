<?php
/**
 * The $input variable contains text in snake case (i.e. hello_world or this_is_home_task)
 * Transform it into a camel-cased string and return (i.e. helloWorld or thisIsHomeTask)
 * @see http://xahlee.info/comp/camelCase_vs_snake_case.html
 *
 * @param  string  $input
 * @return string
 */
function snakeCaseToCamelCase(string $input)
{
    return preg_replace_callback('/_(.?)/', function ($matches){
        return ucfirst($matches[1]);
    }, $input);

}

/**
 * The $input variable contains multibyte text like 'ФЫВА олдж'
 * Mirror each word individually and return transformed text (i.e. 'АВЫФ ждло')
 * !!! do not change words order
 *
 * @param  string  $input
 * @return string
 */
function mirrorMultibyteString(string $input)
{
    $str = "";
    if(strpos($input, ' ')){
        $arr = explode(' ', $input);
        $count = count($arr)-1;
        for($i = 0; $i < count($arr); $i++){
            
            $str .=  mb_strrev($arr[$i]) ;
            if($i < $count ){
                $str .= " ";
            }
        }
    } else {
       return mb_strrev($input);
    }
        
    return $str;
}
function mb_strrev ($string, $encoding = null) {
	if ($encoding === null) {
		$encoding = mb_detect_encoding($string);
	}

	$length   = mb_strlen($string, $encoding);
	$reversed = '';
	while ($length-- > 0) {
		$reversed .= mb_substr($string, $length, 1, $encoding);
	}

	return $reversed;
}

/**
 * My friend wants a new band name for her band.
 * She likes bands that use the formula: 'The' + a noun with the first letter capitalized.
 * However, when a noun STARTS and ENDS with the same letter,
 * she likes to repeat the noun twice and connect them together with the first and last letter,
 * combined into one word like so (WITHOUT a 'The' in front):
 * dolphin -> The Dolphin
 * alaska -> Alaskalaska
 * europe -> Europeurope
 * Implement this logic.
 *
 * @param  string  $noun
 * @return string
 */
function getBrandName(string $noun)
{
    if($noun[0] == $noun[strlen($noun)-1]){
        $tmp = $noun;
        $result = ucfirst($tmp) . substr($noun, 1);
    } else {
        $result = 'The ' . ucfirst($noun);
    }
    return $result;
}