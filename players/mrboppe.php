<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $.ajax({
  dataType: "json",
    type: 'GET',
    url: 'https://api.faceit.com/api/nicknames/Snorvalpeeen',
    success: function(data) {
      $("#mrboppeav").attr("src",data.payload.avatar);
    }
  });
  function hideSmall() {
    $(document).ready(function(){
      $(".small").hide();
    });
  }
  function hideLarge() {
    $(document).ready(function(){
      $(".large").hide();
    });
  }
</script>
<?php
  $page = $_SERVER['REQUEST_URI'];

  if($page == "/?pages=team"){
    ?>
      <script type="text/javascript">
        hideLarge();
      </script>
    <?php
  }else {
    ?>
      <script type="text/javascript">
        hideSmall();
      </script>
    <?php
  }
?>
<div class="playerbox small">
  <div class="playername">
    <p>Boppe</p>
    <button type="button" class="ho">View Profile</button>
  </div>
  <img src="" class="r" id="mrboppeav">
</div>
<div class="large">

</div>
