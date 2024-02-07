<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Bestelling ontvangen
    </title>
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
    <h1>Bestelling ontvangen</h1>
    <hr />
    <!-- table with user info like email,phone,company,title -->
    <table>
        <tr>
            <th colspan="2">
                Gebruikers informatie

            </th>
        </tr>
        <tr>
            <td>
                Voor-en achternaam
            </td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>E-mailadres</td>
            <td>
                <a href="mailto:{{ $email }}"> {{ $email }} </a>
            </td>
        </tr>
        <!-- comapny name, country, street,
        house number, city, postal code
        company title
      -->
        <tr>
            <td>Land</td>
            <td>{{ $country }}</td>
        </tr>
        <tr>
            <td>Straat</td>
            <td>{{ $street }}</td>
        </tr>
        <tr>
            <td>Huisnummer</td>
            <td>{{ $house_number }}</td>
        </tr>
        <tr>
            <td>Stad</td>
            <td>{{ $city }}</td>
        </tr>
        <tr>
            <td>Postcode</td>
            <td>{{ $postal_code }}</td>
        </tr>
        <tr>
            <td>
                Naam onderneming
            </td>
            <td>{{ $company }}</td>
        </tr>
    </table>
    <hr />
    <table>
        <tr>
            <th colspan="2">Order informatie
            </th>
        </tr>
        <tr>
            <td>Order ID</td>
            <td>{{ $order_id }}</td>
        </tr>
        <tr>
            <td>Betaald op
            </td>
            <td>{{ $paid_at }}</td>
        </tr>
        <tr>
            <td>Transactie ID</td>
            <td>{{ $transaction_id }}</td>
        </tr>
        <tr>
            <td>Betalingsmiddel</td>
            <td>{{ $payment_method }}</td>
        </tr>
        <tr>
            <td>Betalingsstatus </td>
            <td>{{ $payment_status }}</td>
        </tr>
    </table>
</body>

</html>
