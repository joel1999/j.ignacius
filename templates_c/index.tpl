<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <tr>
        <th>naam</th>
        <th>achternaam</th>
        <th>email</th>
        <th>passwoord</th>
    </tr>
    {foreach $name as $naamtest}
        <tr>
            <td>{$naamtest.naam}</td>
            <td>{$naamtest.achternaam}</td>
            <td>{$naamtest.email}</td>
            <td>{$naamtest.passwoord}</td>

        </tr>
    {/foreach}
</table>

</body>
</html>