/**
 * Remove html in document
 * @param  string $document 
 * @return string 
 */
function RemoveHTML($document) {
    $search = array(
        '@<script[^>]*?>.*?</script>@si', // Remove script tags
        '@<[\/\!]*?[^<>]*?>@si', // Remove HTML tags
        '@<style[^>]*?>.*?</style>@siU', // Remove style tags
        '@<![\s\S]*?--[ \t\n\r]*>@' // Remove text inside "<" and "/>"
    );
    $text   = preg_replace($search, '', $document);
    $text   = strip_tags($text);
    $text   = trim($text);
    return $text;
}
/*
echo RemoveHtml("This is some <b>bold</b> text.");
=> This is some bold text.
*/
