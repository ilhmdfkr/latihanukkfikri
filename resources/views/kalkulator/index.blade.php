<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    <style> 
        table { 
            border: 1px solid black; 
            margin-left: auto; 
            margin-right: auto; 
        } 
          
        input[type="button"] { 
            width: 100%; 
            padding: 20px 40px; 
            background-color: green; 
            color: white; 
            font-size: 24px; 
            font-weight: bold; 
            border: none; 
            border-radius: 5px; 
        } 
          
        input[type="text"] { 
            padding: 20px 30px; 
            font-size: 24px; 
            font-weight: bold; 
            border: none; 
            border-radius: 5px; 
            border: 2px solid black; 
        } 
 </style>
<body>
<h1><center>KALKULATOR </center></h1>
    <center>
        
        <br>
        <form action=" {{ route('proses.store') }} " method="post">
            @csrf 
        <table border=1 width=300>
          <tr>
            <td colspan=1> <input type="number" name="a" id=""></td>

            <td colspan=1 rowspan=2> <input type="Reset" value="Reset" name="op"></td>
           
          </tr>
          <tr>
            <td colspan=1><input type="number" name="b" id=""></td>

         
          </tr>
          <tr>
            <td colspan=4>HASIL :</td>
            
          </tr>
          <td>
            <input type="submit" value="+" name="op">
            <input type="submit" value="-" name="op">
            <input type="submit" value="*" name="op">
            <input type="submit" value="/" name="op">
            
          </td>
          <tr>
            <td colspan=4>
               <center>
              Nama : Fikri
              <br>
              Kelas : 12 PPLG2
</center>
            </td>
          
          </tr>
        </table>
        </form>
    </center>

</body>
</html>