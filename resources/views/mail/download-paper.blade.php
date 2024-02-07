<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gedownload papier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            overflow: scroll;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            color: #f2f2f2;
            background-color: #0f0147;
            padding: 10px;
            border-radius: 10px;
            white-space: wrap;
        }

        p {
            padding: 10px;
            border-radius: 10px;
            background-color: #f2f2f2;
        }

        hr {
            margin: 20px 0;
            height: 2px;
            background-color: #333;
        }

        h2 {
            color: #333;
        }

        th {
            background-color: #0f0147;
            color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>

        Papier gedownload door {{ $name }}
    </h1>
    <hr />
    <!-- table with user info like email,phone,company,title -->
    <table>
        <tr>
            <th colspan="2">Gebruikers informatie
            </th>
        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <a href="mailto:{{ $email }}"> {{ $email }} </a>
            </td>
        </tr>
        <tr>
            <td>Mobiel telefoonnummer</td>
            <td>{{ $phone }}</td>
        </tr>
        <tr>
            <td>Bedrijf</td>
            <td>{{ $company }}</td>
        </tr>
    </table>
</body>

</html>
