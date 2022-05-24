<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Examen</title>
</head>
<body>
    <table class="table">
        
        <thead>
            <tr>
                <th>Pregunta</th>
                <th>&nbsp;</th>
                <th>Respuesta</th>
               
            
            </tr>
        </thead>
        <tbody>
          
              
            <tr>
               <td></td>
               <td></td>
                <td>
                    <form action="{{ route('users.destroy', $user)}}" method="POST">
               
                <input
                 type="submit" value="Guardar" class="btn btn-sm btn-success"/>
                </form>
            </td>
            </tr>

        </tbody>
    </table>

</body>
</html>