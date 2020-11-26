<html>

<head>
    <link rel="stylesheet" href="/RabIt/resources/css/main.css">
</head>

<body>
    <div>
        <h1>Advertisements</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Advertisements</th>
            </tr>
            <?php
            foreach ($ads as $title => $adv) {
                echo '<tr><td>' . $adv->id . '</td><td>' . $adv->userName . '</td><td>' . $adv->title . '</td></tr>';
            }
            ?>
        </table>
    </div>
</body>

</html>