/**
 * textInitials
 * @param  string  $text   
 * @param  integer $length result length
 * @return string          
 */
function textInitials($text, $length=1)
{
    $text = (string)$text;
    $length = (int)$length;

    if (mb_strlen($text) < $length || $length < 1) {
        return $text;
    }

    $parts = explode(" ", $text);
    foreach ($parts as &$p) {
        if (trim($p) == "") {
            unset($p);
        }
    }

    if (count($parts) >= $length) {
        $res = "";
        for ($i = 0; $i < $length; $i++) {
            $res .= mb_substr($parts[$i], 0, 1);
        }
    } else {
        if ($length == 1) {
            $res =  mb_substr($text, 0, 1);
        } else if ($length == 2) {
            $res =  mb_substr($text, 0, 1).mb_substr($text, -1, 1);
        } else {
            $res =  mb_substr($text, 0, $length);
        }
    }

    return $res;
}

/*
echo textInitials('Mark Zuckerberg',2);
=> MZ
echo textInitials('Mark Zuckerberg',4);
=> Mark
*/ 
