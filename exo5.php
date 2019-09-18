<?php

$tabMagazines = [
  'le monde'              => ['frequence' => 'quotidien', 'type' => 'actualité', 'prix' => 220],
  'le point'              => ['frequence' => 'hebdo'    , 'type' => 'actualité', 'prix' => 80 ],
  'causette'              => ['frequence' => 'mensuel'  , 'type' => 'féministe', 'prix' => 180],
  'politis'               => ['frequence' => 'hebdo'    , 'type' => 'opinion'  , 'prix' => 100],
  'le monde diplomatique' => ['frequence' => 'mensuel'  , 'type' => 'analyse'  , 'prix' => 60 ]
];

$tabMagazinesAbonne = ['le monde', 'le monde diplomatique'];

#'''
#$tab = array_keys($tabMagazines);
#sort($tab);
#$liste = implode(", ", $tab);
#echo "$liste";
#'''

echo "<ul>";

$p = 0;
$tab = $tabMagazines;
$c = array_keys($tab)[$p];
$cc = $tab[$c];

foreach ($tab as $k => $v) {
  echo "<li> $k </li>";
  foreach ($cc as $key => $value) {
    echo "$value";
  }
}
echo "</ul";

?>
