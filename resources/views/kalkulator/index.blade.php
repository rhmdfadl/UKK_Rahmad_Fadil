<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rahmad fadil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: silver;
        }
        table {
            border: 2px solid black;
            margin-left: auto;
            margin-right: auto;            
            box-shadow: 10px 15px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background-color:white;
        }
        input[type="submit"]{
            width: 100%;
            padding: 20px 40px;
            background-color: lime;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
            
        }
        input[type="reset"]{
            width: 100%;
            padding: 20px 40px;
            background-color: darkred;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 10px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.2);
        }
        input[type="number"]{
            border: none;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1><center>KALKULATOR UKK</center></h1>
    <center>
    <form action=" {{ route('proses.store') }} " method="post">
        @csrf
    <table border=1 width=300>
        <tr>
            <td colspan=2><input type="number" name="a" id=""></td>
            
            <td colspan=2 rowspan=2><input type="submit" value="reset" name="op"></td>
            
        </tr>
        <tr>
            <td colspan=2><input type="number" name="b" id=""></td>
            
        </tr>
        <tr>
            <td colspan=4>hasil :</td>
            
        </tr>
        <tr>
            <td><input type="submit" value="+" name="op"></td>
            <td><input type="submit" value="-" name="op"></td>
            <td><input type="submit" value="x" name="op"></td>
            <td><input type="submit" value="/" name="op"></td>
        </tr>
        <tr>
            <td colspan=4>
                Nama :Rahmat fadil
                <br>
                Kelas:XII PPLG 2
            </td>
            
        </tr>
</center>   
</body>

</html>