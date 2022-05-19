<?php
function send($msg){
if($msg == ""){
echo "\n\n   ***\n Test...\n  (c)MK\n   ***\n\n\n";
return true;
}
echo "\n$msg";
}

send("");
while(true){
if("тест" == "тест"){
send("\nэто действительно тест");
}else{
send("\nпо скольку теста небыло, мы его провели: ". exec("uptime"));
}
sleep(1);
}
