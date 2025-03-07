<?php

// Iniciar o cronômetro
$startTime = microtime(true);

// Simulando um processo que leva tempo
sleep(2);  // Simula um delay de 2 segundos

// Parar o cronômetro
$endTime = microtime(true);

// Calcular o tempo decorrido
$elapsedTime = $endTime - $startTime;

// Exibir o tempo decorrido
echo "Tempo de execução: " . $elapsedTime . " segundos\n";
