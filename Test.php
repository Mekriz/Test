<?php
$version = "1.0.1"; //really? simple var??
function checkVersion($version){
  $latest = explode(" ", file_get_contents("https://pastebin.com/raw/QsVueNFX"));
  if($latest[0] != $version){
    send("Качай новую $latest версию пжж");
    exit;
  }
return $latest[1];
}

$logoColor = checkVersion($version);
function send($msg){
  if($msg == ""){
    echo "$logoColor
███╗░░░███╗███████╗██╗░░██╗██████╗░██╗███████╗
████╗░████║██╔════╝██║░██╔╝██╔══██╗██║╚════██║
██╔████╔██║█████╗░░█████═╝░██████╔╝██║░░███╔═╝
██║╚██╔╝██║██╔══╝░░██╔═██╗░██╔══██╗██║██╔══╝░░
██║░╚═╝░██║███████╗██║░╚██╗██║░░██║██║███████╗
╚═╝░░░░░╚═╝╚══════╝╚═╝░░╚═╝╚═╝░░╚═╝╚═╝╚══════╝$white";
    return true;
  }
  echo "\n$msg";
}

send("");
while(true){
  switch("тест"){
    case "тест":
    send("это действительно тест");
    break;
    default:
    send("по скольку теста небыло, мы его провели: ". exec("uptime"));
  }
  sleep(1);
}
