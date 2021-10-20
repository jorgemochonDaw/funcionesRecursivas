<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require './vendor/autoload.php';

    use App\FuncionesRecursivas;

    $n1 = new FuncionesRecursivas();
    ?>

    <main>
        <section>
            <h2>Potencias</h2>
            <p>
                El resultado de la potencia es:
                <?php
                echo $n1->calcularPotencia(5, 3);
                ?>
            </p>
        </section>
        <section>
            <h2>Convertir decimal a binario</h2>
            <p>
                El numero binario es:
                <?php
                echo $n1->calcularBinario(725);
                ?>
            </p>
        </section>
        <section>
            <h2>Comparar arrays</h2>
            <p>
                <?php
                $n1->array1(1, 1, 1, 1, 1);
                $n1->array2(1, 1, 1, 1, 1);
                $n1->compararArrays();
                $n1->lista(1, 12, 91, 91, 4);
                echo $n1->compararNumeroIndice(91);
                ?>
            </p>
        </section>
    </main>
</body>

</html>