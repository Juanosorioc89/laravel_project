<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('categories.store') }}" method="post">
        @csfr
        <label for="category_name">Nombre categoria</label>
        <input type="text" name="category_name" id="category_name" placeholder="category_name">
        
        <label for="active">Activa</label>   
        <input type="checkbox" name="active" id="active" value="0">   

        <button type="submit">Guardar</button>

          
    </form> 
</body>
</html>