<?php
$abilityScores_content = file_get_contents(__DIR__ . '/abilityScores.json');
$abilityScores = json_decode($abilityScores_content);

return $abilityScores;