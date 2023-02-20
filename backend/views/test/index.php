<?php
/*$portno=22;
$errno="";
$errstr="err";
$timeout=30;



$socket = fsockopen("192.168.180.33", $portno, $errno, $errstr, $timeout);
fputs($socket, "Action: Login\r\n");
fputs($socket, "UserName: root\r\n");
fputs($socket, "Secret: @Ray@1234!@#\r\n\r\n");


//$channel = $_GET['value']; //pass channel through GET method
$channel = "SIP/315-00004c65"; //pass channel through GET method


echo "<pre>";
fwrite($socket, "Action: Status\r\n");
fwrite($socket, "Command: Lists channel status " . $channel . "\r\n\r\n");
$wrets = "";


fputs($socket, "Action: Logoff\r\n\r\n");

while (!feof($socket)) {
    $wrets .= fread($socket, 8192) . '</br>';
}

echo $wrets . "<br/>";
echo $socket . "<br/>";
echo $channel . "<br/>";

fclose($socket);*/








$port = 5038;

// Replace with your username. You can find it in /etc/asterisk/manager.conf.
// If unsure look for a user with "originate" permissions, or create one as
// shown at http://www.voip-info.org/wiki/view/Asterisk+config+manager.conf.
$username = "admin";

// Replace with your password (refered to as "secret" in /etc/asterisk/manager.conf)
$password = "@rAY@1234";

// Internal phone line to call from
$internalPhoneline = "315";

$target="330";

// Context for outbound calls. See /etc/asterisk/extensions.conf if unsure.
//$context = "context";
//$context = "from-pstn";
//$context = "from-trunk";
//$context = "from-pstn-e164-us";
$context = "from-trunk";

$socket = stream_socket_client("tcp://192.168.180.33:$port");
if($socket)
{
    echo "Connected to socket, sending authentication request.\n";

    // Prepare authentication request
    $authenticationRequest = "Action: Login\r\n";
    $authenticationRequest .= "Username: $username\r\n";
    $authenticationRequest .= "Secret: $password\r\n";
    $authenticationRequest .= "Events: off\r\n\r\n";

    // Send authentication request
    $authenticate = stream_socket_sendto($socket, $authenticationRequest);
    if($authenticate > 0)
    {
        // Wait for server response
        usleep(200000);

        // Read server response
        $authenticateResponse = fread($socket, 4096);

        // Check if authentication was successful
        if(strpos($authenticateResponse, 'Success') !== false)
        {
            echo "Authenticated to Asterisk Manager Inteface. Initiating call.\n";

            // Prepare originate request
            $originateRequest = "Action: Originate\r\n";
            $originateRequest .= "Channel: SIP/$internalPhoneline\r\n";
            //$originateRequest .= "Callerid: Click 2 Call\r\n";
            $originateRequest .= "Callerid: jafari\r\n";
            $originateRequest .= "Exten: $target\r\n";
            $originateRequest .= "Context: $context\r\n";
            $originateRequest .= "Priority: 1\r\n";
            $originateRequest .= "Async: yes\r\n\r\n";

            // Send originate request
            $originate = stream_socket_sendto($socket, $originateRequest);
            if($originate > 0)
            {
                // Wait for server response
                usleep(200000);

                // Read server response
                $originateResponse = fread($socket, 4096);

                // Check if originate was successful
                if(strpos($originateResponse, 'Success') !== false)
                {
                    echo "Call initiated, dialing.";
                } else {
                    echo "Could not initiate call.\n";
                }
            } else {
                echo "Could not write call initiation request to socket.\n";
            }
        } else {
            echo "Could not authenticate to Asterisk Manager Interface.\n";
        }
    } else {
        echo "Could not write authentication request to socket.\n";
    }
} else {
    echo "Unable to connect to socket.";
}


?>



<h1>Test</h1>



