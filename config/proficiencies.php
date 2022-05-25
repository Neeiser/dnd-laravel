<?php
$proficiencies_content = file_get_contents(__DIR__ . '/proficiencies.json');
$proficiencies = json_decode($proficiencies_content);

return $proficiencies;