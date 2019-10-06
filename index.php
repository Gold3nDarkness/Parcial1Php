<?php 

$cv=array(
"quienSoy"=> array(
    "Jose Rafael Jorge",
    "20 Años",
    "La Romana, Rep. Dominicana"
),
"experienciaLaboral"=> array(
    "2019 - Pasante de desarrollador de software en la Oficina Presidencial de Tecnología de la Información y Comunicación (OPTIC)."
),
"estudios"=> array(
    "2019 - Tecnólogo en Software. En el Instituto Tecnológico de Las Américas (ITLA).",
    "2018 - Diplomado en JavaScript. Realizado por el Ministerio de Educación Superior, Ciencias y Tecnología (MESCYT) de 60 horas de duración."
),
"habilidades"=>array(
    "Conocimiento de los lenguajes de programación: Java, C# y C++.",
    "Conocimiento de las bases de datos: MySql, Sql Express y Oracle.",
    "Conocimiento de los lenguajes de desarrollo web: HTML5, CSS3, JavaScript, JSP y ASP.",
    "Fácil adaptabilidad a los cambios.",
    "Aprendizaje rápido."
),
"idiomas"=>array(
    "Español. Lengua materna.",
    "Ingles. Nivel Intermedio hablado y escrito."
),
"referencias"=>array(
    //Lo deje vacio, porque no tengo idea que poner aca.
)
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Curriculum Vitae</title>
</head>

<body>
    <div class="main">
    <div class="derecha">
       <?php if(!empty($cv["quienSoy"])):?>
    <div class="quienSoy">
        <h2>Quien Soy</h2>
        <?php foreach($cv["quienSoy"] as $Div): ?>
            <?php if(!empty($Div)):?>
            <?php echo "<li>".$Div."</li>";?>
            <?php else:?>
                <div class="sinInformacion"><?php echo "<span> &nbsp; </span>" ?> </div>
            <?php endif ?>
        <?php endforeach ?><br>
    </div>
    <?php endif ?>
 
    <?php if(!empty($cv["idiomas"])):?>
        <div class="idiomas">
            <h3>Idiomas</h3>
            <?php foreach($cv["idiomas"] as $Div): ?>
                <?php if(!empty($Div)):?>
                <?php echo "<li>".$Div."</li>";?>
                <?php else:?>
                    <div class="sinInformacion"><?php echo "<span> &nbsp; </span>" ?> </div>
                <?php endif ?>
            <?php endforeach ?><br>
        </div>
    <?php endif ?>

    </div>
    <div class="izquierda">
    
    <?php if(!empty($cv["experienciaLaboral"])):?>
        <div class="experienciaLaboral">
            <h3>Experiencia Laboral</h3>
            <?php foreach($cv["experienciaLaboral"] as $Div): ?>
                <?php if(!empty($Div)):?>
                    <?php echo "<li>".$Div."</li>";?>
                <?php else:?>
                    <div class="sinInformacion"><?php echo "<span> &nbsp; </span>" ?> </div>
                <?php endif ?>
            <?php endforeach ?><br>
        </div>
    <?php endif ?>

    <?php if(!empty($cv["estudios"])):?>
    <div class="estudios">
    <h3>Estudios</h3>
        <?php foreach($cv["estudios"] as $Div): ?>
            <?php if(!empty($Div)):?>
            <?php echo "<li>".$Div."</li";?>
            <?php else:?>
                <div class="sinInformacion"><?php echo "<span> &nbsp; </span>" ?> </div>
            <?php endif ?>
        <?php endforeach ?><br>
    </div>
    <?php endif ?>

    <?php if(!empty($cv["habilidades"])):?>
    <div class="habilidades">
            <h3>Habilidades</h3>
            <?php foreach($cv["habilidades"] as $Div): ?>
                <?php if(!empty($Div)):?>
                <?php echo "<li>".$Div."</li>";?>
                <?php else:?>
                    <div class="sinInformacion"><?php echo "<span> &nbsp; </span>" ?> </div>
                <?php endif ?>
            <?php endforeach ?><br>
        </div>
    <?php endif ?>

    <?php if(!empty($cv["idiomas"])):?>
        <div class="idiomas">
            <h3>Idiomas</h3>
            <?php foreach($cv["idiomas"] as $Div): ?>
                <?php if(!empty($Div)):?>
                <?php echo "<li>".$Div."</li>";?>
                <?php else:?>
                    <div class="sinInformacion"><?php echo "<span> &nbsp; </span>" ?> </div>
                <?php endif ?>
            <?php endforeach ?><br>
        </div>
    <?php endif ?>

    <?php if(!empty($cv["referencias"])):?>
        <div class="referencias">
            <h3>Referencias</h3>
            <?php foreach($cv["referencias"] as $Div): ?>
                <?php if(!empty($Div)):?>
                <?php echo "<li>".$Div."</li>";?>
                <?php else:?>
                    <div class="sinInformacion"><?php echo "<span> &nbsp; </span>"; ?> </div>
                <?php endif ?>
            <?php endforeach ?><br>
        </div>
    <?php endif ?>
</div>
    </div>
</div>
</body>
</html>