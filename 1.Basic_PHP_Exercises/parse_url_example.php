<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy URL trong PHP</title>
</head>
<body>
    <?php
        $url = 'https://vietjack.com/bai-tap-php/lay-url-trong-php.jsp';

        $parsed_url = parse_url($url);

        echo "Scheme: " . $parsed_url['scheme'] . "<br>";
        echo "Host: " . $parsed_url['host'] . "<br>";
        echo "Path: " . $parsed_url['path'] . "<br>";

        if (isset($parsed_url['query'])) {
            echo "Query: " . $parsed_url['query'] . "<br>";
        } else {
            echo "Query: Không có query string.<br>";
        }
    ?>
</body>
</html>