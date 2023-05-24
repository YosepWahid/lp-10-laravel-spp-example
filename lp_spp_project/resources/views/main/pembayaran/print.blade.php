<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>
    <style>
        * {
            margin: 0;
        }

        .container {
            margin: .5em;
            width: 300px
        }

        .data {
            padding: 0.5em;
            display: flex;
            justify-content: space-between;
        }

        .text-judul {
            color: gray;
            text-align: center;
        }
    </style>
</head>

<body onload="window.print()">
    <div class="container">
        <hr>
        <hr>
        <hr>
        <h3 class="text-judul">
            {{ $data->bulan }}
        </h3>
        <hr>
        <hr>
        <hr>

        <div class="container-fluid">
            <div class="data">
                <span>Sumbangan :</span>
                <span>{{ number_format($data->sumbangan->total, 2, ',', '.') }}</span>
            </div>
            <hr>
            <div class="data">
                <span>Dibayarkan :</span>
                <span>{{ number_format($data->dibayarkan, 2, ',', '.') }}</span>
            </div>
            <hr>
            <div class="data">
                <span>Kembalian :</span>
                <span>{{ number_format($data->kembalian, 2, ',', '.') }}</span>
            </div>
            <hr>
            <div class="data">
                <span>Kekurangan :</span>
                <span>{{ number_format($data->kekurangan, 2, ',', '.') }}</span>
            </div>
            <hr>
            <hr>
            <div class="data">
                <span>Kekurangan :</span>
                <span>{{ number_format($data->kekurangan, 2, ',', '.') }}</span>
            </div>
            <hr>
        </div>
    </div>

</body>

</html>
