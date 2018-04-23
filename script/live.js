$.ajax({
  dataType: "json",
  type: 'GET',
  url: 'https://api.twitch.tv/kraken/streams?client_id=jlrfw4tbzfpt9n0daakyqjx8sow71z&channel=mrboppee',
  success: function(data) {
    console.log(data);
    if (data._total > 0) {
      $("#live").show();
    }
  }
});
$(document).ready(function(){
    $("#live").click(function(){
        window.open('https://www.twitch.tv/mrboppee');
    });
});
