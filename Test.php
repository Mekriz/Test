<?php
$version = "1.0.1"; //really? simple var??
function checkVersion($version){
  $latest = file_get_contents("https://pastebin.com/raw/QsVueNFX");
  if($latest != $version){
    send("Качай новую $latest версию пжж");
    exit;
  }
}

function send($msg){
  if($msg == ""){
    echo "\n\n   ***\n Test...\n  (c)MK\n   ***\n\n\n";
    return true;
  }
  echo "\n$msg";
}

checkVersion($version);
send("");
while(true){
  switch("тест"){
    case "тест":
    send("это действительно тест");
    break;
    default:
    send("по скольку теста небыло, мы его провели: ". exec("uptime");
  }
  sleep(1);
}
