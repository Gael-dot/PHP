<?php

$todoliste = [nettoyer, ranger, acheter, travailler];

class TODOlist {
  private $to_dos = [];

  public function __construct ($tab) {
    $this->to_dos = $tab;
  }

  public function add_to_do($tache) {
      if (!preg_match("#^ *$#", $tache));
      $this->to_dos = $tache;
  }

  public function remove_to_do($indice) {
      unset($to_dos[$indice]);
  }

  public function is_empty() {
      $nb = count($to_dos);
      if ($nb == NULL) {
          return false;
      }
      else {
        return true;
      }
  }

  public function get_html($ch) {
    if (is_empty($to_dos) == true) {
      echo "Aucune tâche à faire !"
    }
    else {
      echo "<ul>"
      foreach ($to_dos as $k => $v) {
        echo "<li> $v </li>"
      }
    }
  }

  $liste = new TODOlist;
  $liste->remove_to_do(1);
  echo "$todoliste";
}

?>
