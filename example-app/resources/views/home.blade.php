<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@800&family=Bungee+Spice&family=Itim&family=Libre+Franklin:wght@100;300&family=Noto+Sans+Cypro+Minoan&family=Poppins:wght@800&family=Roboto+Mono:wght@300&family=Victor+Mono:ital,wght@1,700&display=swap"
        rel="stylesheet">
    <title>Multiplication</title>
</head>

<body>

    <div class="container">

        <div class=h1div>
            <h1>แม่สูตรคูณ</h1>
        </div>


        <div class=input>
            <form method="post" action="/multiplication_table">
                @csrf
                <div class=butt>
                    <input type="number" name="inputNumber" placeholder="กรุณากรอกเลข">
                    <button class="button-31" role="button">ยืนยัน</button>
                </div>
            </form>
        </div>

    </div>

    </div>

    <style>
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .butt {
            display: table-column;
            justify-content: center;
            align-items: center;
        }

        input[type="number"] {
            width: 98%;
            height: 70px;
            margin-bottom: 10px;
            font-family: Itim;
            font-size: 25px;
            font-weight: 700;
            line-height: 1.5;
            text-align: center;
            background: #EAD196;

            justify-content: center;
            align-items: center;
        }


        .h1div {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #7D0A0A;
            margin: 0;
            font-size: 30px;
            width: 100%;
        }

        h1 {
            font-family: Itim;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: white;
            text-align: center;
            text-wrap: balance;
            text-shadow: 1px 1px 1px black, 1px 2px 1px black, 1px 3px 1px black, 1px 4px 1px black, 1px 5px 1px black, 1px 6px 10px black;
        }

        body {
            margin: 0px;
            padding: 0px;
            height: 400px;
            background: #F3EDC8;

        }

        .container {
            flex-direction: column;
            display: flex;
            align-items: center;
            width: 100%;
            height: 100vh;
            margin: 0px;
            padding: 0px;
            overflow: auto;
        }

        .button-31 {
            background-color: #222;
            border-radius: 4px;
            border-style: none;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: Itim;
            font-size: 25px;
            font-weight: 700;
            line-height: 1.5;
            margin: 0;
            max-width: 100%;
            min-height: 44px;
            min-width: 10px;
            width: 100%;
            height: 70px;
            outline: none;
            overflow: hidden;
            padding: 9px 20px 8px;
            position: relative;
            text-align: center;
            text-transform: none;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;


            justify-content: center;
            align-items: center;
        }

        .button-31:hover,
        .button-31:focus {
            opacity: .75;
        }
    </style>

</body>

</html>
