<?php
/// Car Information
function htmlGetVehicleTile($car_info)
{
    $tile_text = "<article>
    <span class=\"image\">
      <img src=\"$car_info->square\" alt=\"\" />
    </span>

    <header class=\"major\">
      
    <p>" 
    . (!is_null($car_info->km) ? " " . number_format($car_info->km, 0, '.', ' ') . " km &nbsp;&nbsp;" : "")
    .
    "</p>

      <h3>" . strtoupper($car_info->bname)."<br> " . ucwords($car_info->mname) . "</h3>

      <p><strong> €" . number_format($car_info->price, 2) . "</strong></p>

      <p>" 
        . (!is_null($car_info->cc) ? " " . number_format($car_info->cc, 0, '.', ' ') . "cc &nbsp;&nbsp;" : "")
        . (!is_null($car_info->hp) ? " " . number_format($car_info->hp, 0, '.', ' ') . " cv &nbsp;&nbsp;" : "")
        .
      "</p>

      <div class=\"major-actions\">
        <a href=\"dettagli.php?listing_id=$car_info->idcar\" class=\"button medium next\">VEDI</a>
      </div>
    </header>
  </article>";

  return $tile_text; 
}

?>