<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form of modif</title>
</head>
<body>

    <form action="modif_client.php" method="post">
        <fieldset>
            <legend><b>Enter your ID for modify</b></legend>
            <table>
                <tr>
                    <td><input type="text" name="id_client" maxlength="10"></td>
                </tr>
                <tr>
                    <td>Update: </td>
                    <td><input type="submit" value="Update" name="modifier"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>
</html>