<?php

$horas_trabalhadas = 240;
$pagamento_hora = 10;

$salario_bruto = $horas_trabalhadas * $pagamento_hora;
$imposto_de_renda = ($salario_bruto * 11) / 100;
$INSS = ($salario_bruto * 8) / 100;
$sindicato = ($salario_bruto * 5) / 100;
$salario_liquido = $salario_bruto - $imposto_de_renda - $INSS - $sindicato;

echo "+ Salário Bruto: R$$salario_bruto\n";
echo "- IR (11%) : R$$imposto_de_renda\n";
echo "- INSS (8%) : R$$INSS\n";
echo "- Sindicato (5%) : R$$sindicato\n";
echo "= Salário líquido : R$$salario_liquido";
