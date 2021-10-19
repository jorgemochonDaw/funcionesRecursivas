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
    </main>
</body>

</html>