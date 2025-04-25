<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        foreach (filter_list() as $id => $filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
    </table>

    <?php
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
    ?>

    <?php
    $int = 100;

    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    } else {
        echo ("Integer is not valid");
    }
    ?>

    <?php
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    } else {
        echo ("Integer is not valid");
    }
    ?>

    <?php
    $ip = "127.0.0.1";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo ("$ip is a valid IP address");
    } else {
        echo ("$ip is not a valid IP address");
    }
    ?>

    <?php
    $email = "john.doe@example.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }
    ?>

    <?php
    $url = "https://www.w3schools.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo ("$url is a valid URL");
    } else {
        echo ("$url is not a valid URL");
    }
    ?>

</body>

</html>