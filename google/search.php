<?php
if(!array_key_exists('name', $_GET))
{
    echo json_encode([]);
}
else
{
    $cities = file_get_contents('C:/Apache24/Apache24/htdocs/cities.json', true);
    $json = json_decode($cities);
    $results = array();
    $input = $_GET['name'];
    $i = 0;
    foreach($json as $value)
    {
        if (is_numeric(stripos($value->name, $input)))
        {
            $results[$i] = $value;
            $i++;
        }
    }
    $wyjscie = json_encode($results);
    echo htmlspecialchars($wyjscie);
}
?>