<?php
if ($_SERVER['REQUEST_URI'] === "/pages/team.php") {
  header("Location: ..");
  die();
}
?>
<link rel="stylesheet" href="./css/team.css">


<title>HGU Team</title>
<div class="outer" id="teamout">

    <div class="" id="teamhead">
      <div class="inner m">
      </div>
    </div>
    <div class="" id="players">
      <div class="inner m f">
        <div class="player" id="boppe">
          <?php include './players/mrboppe.php'; ?>
        </div>
        <div class="player">
          <?php include './players/evasion.php'; ?>
        </div>
        <div class="player">
          <?php include './players/vxy26.php'; ?>
        </div>
        <div class="player">
          <?php include './players/lew.php'; ?>
        </div>
        <div class="player">
          <?php include './players/ottobiceps.php'; ?>
        </div>
      </div>
    </div>
  </div>
</div>
