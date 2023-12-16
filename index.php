<?php
    require_once ('php/encabezado.php');
?>
<?php
    $num = mt_rand(100, 100000); //Generar un número aleatorio entre 100 y 100.000
    $aux = $num;
    $contador = 0;
    $contadorPar = 0;
    $contadorImpar = 0;
    while($aux > 0){
        $ultimoDigito = $aux % 10; //Obtener último dígito
        if($ultimoDigito % 2 == 0){
            $contadorPar = $contadorPar+1; //Contar Dígitos Pares
        }else{
            $contadorImpar = $contadorImpar+1; //Contar Dígitos Impares
        }
        $aux = intdiv ($aux, 10); //Eliminar último dígito
        $contador = $contador+1; //Incrementa el contador de dígitos
    }
?>
    <!-- Mostrar resultados con HTML -->
    <main>
        <section class="text-center">
        <p>Número: <?php echo $num;?></p>
        <p>Cantidad de dígitos: <?php echo $contador;?></p>
        <p>Cantidad de pares: <?php echo $contadorPar;?></p>
        <p>Cantidad de Impares: <?php echo $contadorImpar;?></p>
        </section>
    </main>
<?php
    require_once ('php/pie.php');
?>