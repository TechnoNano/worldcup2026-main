<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    [
        "name" => "Server 1",
        "url" => "https://majed-koora.co/stream.php?channel=chche999&file=stream.m3u8"
    ],
    [
        "name" => "Server 2",
        "url" => "https://player.twitch.tv/?autoplay=true&channel=akefbad1&muted=false&parent=appscss.blogspot.com&parent=www.appscss.blogspot.com"
    ],
    [
        "name" => "Server 3",
        "url" => "https://player.twitch.tv/?channel=%20chche999&muted=false&parent=majed-koora.co"
    ],
    [
        "name" => "Server 4",
        "url" => "https://euc12.playlist.ttvnw.net/v1/playlist/CtEEPBw-d6f2t3i2cO2HwJAMaGjTTtdogHrZJoGauWu3ohnSW2CGzPgsTOpt83EhlqSjQxtjCGfZruz6zRQphEPpF7HSi_PaD4ejRd3Mr5_lymBwZwt3EtGIvvfPtYv-U7t58QpeyYyIayJIZO-NnpMyJjZR39LIuiCyzgWmsbaUcNb7rq-gEFpBA4jfV18IIJIbjQdIDKTf9M06RqOibvmh0xDzEVzCxtjHOVgOdYRir_Xt1Ny_tPQGJAbWtnF1eax5DFGJ3_XpLdep-lW2Vp33z834EB_Btlk9L0d9_RQQIR-lTwbpw3n5ni1bIQ_EzTqg8y6BdpVRn3mqj1m_T1huGcljtMqrhKnK3kN_kEq9Gq368S26vAIT2ZXcLU0xTVOuAK0EObedRycBYWqsJX-4ReufDyHRUJrYpLoVfHRzgiNy9esYsEpmBde-6VoSQ2hGiXaX6-luCFPt0lngWGxc_Ixl6gTegkP7OvreLJoBBjN5_Vcqw1fs5z-NkWFXm17W1d0ug8TuDlnucmnvIhzYxJBN4m91GTic1aBGI_vS-zMx8uJLpsVfKRuIN5tlLLB9VSMLpkY5rse-rdTRo0vAnwZ5u1LFIwwj-gvbU3rj8tpFe656DcZZ3n_w7VmPBhnEkZ1Wo1A35RPLthdZN7QMeLjgoSU8Nz3njtcUdR_IAEiBiybiVfouliNPuXPRtpfObiprPXgANZlci8toZyBEMAVX0SfC4liA4rkm41T7BhvFQfbmHjo0jBNJBibQseUcaF3y08tG9rJNxk-fa0MaN-YaDFSqN3OjSrvr8RiXAyABKglldS13ZXN0LTIwvA8.m3u8"
    ]
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
