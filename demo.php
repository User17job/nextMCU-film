<!-- php -->
<?php

// variables
    $name = 'Ramphys';
    // var_dump($name);// metodo var_dump y gettype son similares solo que gettype solo muestra el tipo
    $age = 18;
    // echo gettype($age);
    $soltero = true;
    $dinero = (bool) 18; // forsar la conversion de typos 
    $newAge= 50 + "2" //  lo acepta porque el signo de  suma "+" es para sumar numeros ya para concatenar textos se usaria  el punto ".";
    ;
    $output = "hola \"$name\"";
    $output .= "el cual sigue solter? $soltero";

    // constantes pueden ser globales y locales las globales es recomendable declararlas en un fichero a parte
    ;
    define('Logo_url', 'https://th.bing.com/th/id/OIG3.mYNP9GSnevfQxejwFm1B?w=270&h=270&c=6&r=0&o=5&dpr=1.5&pid=ImgGn');
    $isadult = $age > 18; 
    const NOmbre = 'RAmphys';
/*
    $outputAge = $isadult 
    ? "es mayor de edad" // if
    : "no es mayor de edad"; // else
    ;
    */

        // match es mas eficiente en este caso que if y else pues a ademas de tener una sitaxis se puede utilizar como un conjunto de else if's
    $newAge = match(true){
        $age < 2  => "Eres un bebe, $name",
        $age < 5  => "Eres un niño, $name" ,
        $age < 11 => "Eres un pre-adolescente, $name" ,
        $age < 14 => "Eres un adolescente, $name:D",
        $age < 18 => "Eres un joven, $name :-()",
        $age < 30 => "es mayor de edad, $name ^_^",
        default   => "Eres un adulto, $name;P",
    };
    // arreglos
    # tambien se puede declarar los arreglos 
    $BestLanguages = array("javaScript","java", "Python", "php", 'c#', "c++");
    $BestLanguages[] = "typescript";
    $BestLanguages[] = "swift";
    $BestLanguages[] = "go";

    // arrays corporativos 
    $person = [
        "name" => "Ramphys",
        "age" => 18,
        "soltero" => true,
        "isDev"=>true,
        "lenguajes" => ["javaScript","typescript","php", "go"]
    ];
    $person["name"]="noPlay";
    $person["lenguajes"][3]="pyhton";
    

?>
<!-- // es una sintaxis alternativa de php para escribir los if  statments sin tener que estar escribiendo el echo todo el tiempo -->
<!-- 
<?php  if($isadult) : ?>
    <h3>eres mayor de edad </h3>
<?php elseif($soltero) : ?>
    <h3>no eres mayor de edad y estas soltero </h3>
<?php else :?>
    <h3>no eres mayor de edad </h3>
<?php endif;?>     -->
<!-- if($isadult){
    echo "<h3>eres mayor de edad </h3>";

}elseif ($soltero) {
    echo "<h3>no eres mayor de edad y estas soltero </h3>";
}
else{
    echo "<h3>no eres mayor de edad </h3>";
}
?> -->







<!-- html y php -->
<div class="wrapper">
<!-- iterar el arreglo se logra con forEach -->
<ul>
    <?php foreach($BestLanguages as $key => $lenguaje): ?>
        <li><?= $key ."__". $lenguaje ?></li>

    <?php  endforeach;?>    
</ul>
<img src="<?=Logo_url?>" alt="">
<h1>
    <?php echo 'Hello world from php after 3 hours of trying';?>    
</h1>
<h2>Soy un pionero </h2>
<h3>Y el mejor lenguaje de programacion es: <?= $BestLanguages[6]?></h3>
<p>primer lenguaje aprendido: <?=   $person["lenguajes"][0]?></p>


    <!-- tambien se puede omitir el echo usanto la siguiente sintaxis -->
<h4>
<?= "hola soy  $name y tengo $age años"?> 
<!-- interpolacion  solo se hace con comillas 2bles -->
</h4>

<p> 
    <?= $newAge ?>
</p>

<button>click</button>

</div>

<!-- css -->
<style>
    :root{
        color-scheme: dark;
    }
    /* body{
       
    } */
    .wrapper{
        width:100%;
        min-height: 100vh;
        height: auto;
        padding-bottom: 10px;
        display: grid;
        border: solid tomato;
        place-content: center;
        
    }
    img{
        border-radius: 20px;
    }
</style>

<!-- js -->
<script>
    const btn =document.querySelector('button').addEventListener("click", ()=>{
        alert('hola')
    })
</script>

