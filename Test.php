<?php
$version = "1.0.1"; //really? simple var??
$white = "\e[0m";
function checkVersion($version){
  $latest = explode(" ", file_get_contents("https://pastebin.com/raw/QsVueNFX"));
  if($latest[0] != $version){
    send("Качай новую $latest[0] версию пжж");
    exit;
  }
return $latest[1];
}

$logoColor = checkVersion($version);
function send($msg){
  if($msg == ""){
    global $logoColor;
    global $white;
    echo "\e$logoColor
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
$text = readline("Command: ");
while(true){
  switch(mb_strtolower($text)){
    case "тест":
    send("это действительно тест");
    break;
    case "пока":
    send("Очень жаль что ты уходишь, было весело");
    exit;
    break;
    default:
    send("по скольку теста небыло, мы его провели: ". exec("uptime"));
  }
  sleep(1);
}
