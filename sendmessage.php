<?php
function send($params, $message){  
  $socket = @fsockopen($params["server"], $params["port"]);
  if(!$socket){
    return "NO_SOCKET";
  }
  $message = "test";
  socket_set_timeout($socket, 30);
  fputs($socket, sprintf("USER %s * * :%s\n", $params["nick"], $params["fullname"]));
  fputs($socket, sprintf("NICK %s\n", $params["nick"]));
  fputs($socket, sprintf("JOIN %s\n", $params["channel"]));
  fputs($socket, sprintf("PRIVMSG %s :%s \n", $params["channel"], $message));
  fputs($socket, sprintf("QUIT\n"));

  while ($input = trim(fgets($socket))){
    echo("SOCKET: " . $input. "<br/>");
    flush();
    ob_flush();
  }
  echo("COMPLETED");
}

send(
	  Array(
		      "server"   => "irc.solnste.ru",
		          "port"     => 6667,
			      "fullname" => "HAL 9000",
			          "nick"     => "belomorkanal",
				      "channel"  => "#belomorkanal"
	  ),
	 $_GET("message") 
);
