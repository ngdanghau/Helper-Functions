/**
 * Truncate string
 * @param  string  $string     
 * @param  integer $max_length Max length of result
 * @param  string  $ellipsis   
 * @param  boolean $trim       
 * @return string              
 */
function truncate_string($string = "", $max_length = 50, $ellipsis = "...", $trim = true)
{
    $max_length = (int)$max_length;
    if ($max_length < 1) {
        $max_length = 50;
    }
    
    if (!is_string($string)) {
        $string = "";
    }

    if ($trim) {
        $string = trim($string);
    }

    if (!is_string($ellipsis)) {
        $ellipsis = "...";
    }

    $string_length = mb_strlen($string);
    $ellipsis_length = mb_strlen($ellipsis);
    if($string_length > $max_length){
        if ($ellipsis_length >= $max_length) {
            $string = mb_substr($ellipsis, 0, $max_length);
        } else {
            $string = mb_substr($string, 0, $max_length - $ellipsis_length)
                    . $ellipsis;
        }
    }

    return $string;
}
        
/*
echo truncate_string('Mark Zuckerberg',7);
=> Mark...
*/ 
