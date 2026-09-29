<?php
require_once 'Veiculo.php';

new Veiculo("Ford", "Ka", 2018, 42000);
new Veiculo("Chevrolet", "Onix", 2021, 65000);
new Veiculo("Volkswagen", "Fusca", 2015, 35000);

echo "Valor somado dos veículos: R$ " . number_format(Veiculo::$valorTotal, 2, ",", ".");
