<?php  
const API_URL= "https://whenisthenextmcufilm.com/api";
#inicializar la nueva seccion de cURL; ch = cURL handle 
    $ch = curl_init(API_URL);   
#indicar que no queremos mostrar la respuesta en pantalla     
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#indicar que queremos que se guarde la respuesta en una variable
    $result = curl_exec($ch);
    // tambien se pudiera utilizar $result = file_get_contents(API_URL); si solo quieres hacer una peticion  GET

# convertir la respuesta json en un arrya asociativo  
    $data = json_decode($result, true);      
# CERRAR LA PETICION 
curl_close($ch);

# usamos un var_dump()para ver lo que tiene 
// var_dump($data);
?>






<!-- html -->
<head>
    <meta charset="UTF-8" />
    <title>The Next Movie of Marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <div class="wrapper" style="display:grid; place-content:center; border:solid red;">

    <section style="border: solid yellow; display: grid; grid-template-columns: auto; place-content: center; text-align:center">
        <div class="header"><h1>Next MCU Film</h1></div>
        <h2>I inviteyou to see see the next movie of marvel</h2>

        <img src="<?= $data["poster_url"]; ?>" width="400" style="margin: auto; border-radius:15px" alt="POST">

        <p>
        <strong>Release Date:</strong> <?= $data["release_date"]; ?> <br>   
        <strong>Movie Title:</strong> <?= $data["title"]; ?> <br>
        <strong>Overview:</strong> <?= $data["overview"]; ?> <br>
        </p>
        <hr>
            <strong>Next Production: </strong><?=  $data["following_production"]["title"]?>
            <img src="<?= $data["following_production"]["poster_url"]; ?>" width="200" style="margin: auto; opacity: 50%; border-radius:10px" alt="POST">
            <strong>Release Date:</strong> <?= $data['following_production']["release_date"]; ?> <br>   
    </section>
    </div>
</body>