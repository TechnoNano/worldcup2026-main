<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, OPTIONS");
header("Content-Type: application/json; charset=utf-8");

echo json_encode([
    [
        "name" => "Server 1",
        "url" => "https://majed-koora.co/stream.php?channel=majed16majed&file=stream.m3u8"
    ],
    [
        "name" => "Server 2",
        "url" => "https://majed-koora.co/stream.php?channel=majed16majed&file=stream.m3u8"
    ],
    [
        "name" => "Server 3",
        "url" => "https://euc13.playlist.ttvnw.net/v1/playlist/CtAE0mbzeXhf6fsVlfxNAaqQ4m2GXykqG8Zj5nZj81DEIvFEOpWWzl2mngumSIlphA8Qrmr-bThLlWP-s-7BjI_yLndwXRoc0Ir9x1cD_L0qjQ-Rwj63UdQy6PgxMAuA_-CfGgiHqvQ1W-oju--fN_l3gkTtrpDM14nEHD3A0g9wXXi3S9DEhP5I6gAVYYvOUPxrqkvhV-wT_Vd6rN-e7TrU5grI0wal3eHlXgaFYTWl6JxlpYlDE4-yXwy0ZD3stPlX-2jQcHWVaAkb0YBp_xZNCUgpY6YGpGvk5sPJZU3D2PcwzvqgALn1L0pShXKaG7iKZy6nVI1ONYpOwArYC5R_19k0Kg3-xWqxJ7GgoohnThPwsBLXhGkBCMQWDwfR0USAWW4DsgQ-yYxvkmuFNpPQu6vr8QnT1JqHiR2tMMCknBJeDSU0H0zy8b-K5veyvPGxkYCv1nMEpTxklvn3T1QwmKe5aLP5c03DWou5jMSyo30jhBwx2br6zGswgIufyLDCXO0M0lv6xOzZhIJ19Nv-1PB7QKcLgbMT_-dUik8M8QlzzAyMZHPLcJl5DmrRD75K9StkGYVTNIT6S5Czk8UqhOfZikpsYdrGMqn6D4WOiEE6roRxVsLiYtlFQxBzObjypAmm3oTYvagYaVkWoXV53h9ibUbTr0e8L6Y-7XG7a1gkiHv3_TFQ6fnF1X_y5dSs9gslsdPC2bZOql5etI4Ujfmh0-DJm6EED2uRp7eyow2cGdQ-8x4P6jIFOAHYZyDTrwJXNPiV4jTvPZt5z2dp9xoMsDC4uhXgV5W7LBedIAEqCWV1LXdlc3QtMjC8Dw.m3u8"
    ],
    [
        "name" => "Server 4",
        "url" => "https://euc12.playlist.ttvnw.net/v1/playlist/CtEEPBw-d6f2t3i2cO2HwJAMaGjTTtdogHrZJoGauWu3ohnSW2CGzPgsTOpt83EhlqSjQxtjCGfZruz6zRQphEPpF7HSi_PaD4ejRd3Mr5_lymBwZwt3EtGIvvfPtYv-U7t58QpeyYyIayJIZO-NnpMyJjZR39LIuiCyzgWmsbaUcNb7rq-gEFpBA4jfV18IIJIbjQdIDKTf9M06RqOibvmh0xDzEVzCxtjHOVgOdYRir_Xt1Ny_tPQGJAbWtnF1eax5DFGJ3_XpLdep-lW2Vp33z834EB_Btlk9L0d9_RQQIR-lTwbpw3n5ni1bIQ_EzTqg8y6BdpVRn3mqj1m_T1huGcljtMqrhKnK3kN_kEq9Gq368S26vAIT2ZXcLU0xTVOuAK0EObedRycBYWqsJX-4ReufDyHRUJrYpLoVfHRzgiNy9esYsEpmBde-6VoSQ2hGiXaX6-luCFPt0lngWGxc_Ixl6gTegkP7OvreLJoBBjN5_Vcqw1fs5z-NkWFXm17W1d0ug8TuDlnucmnvIhzYxJBN4m91GTic1aBGI_vS-zMx8uJLpsVfKRuIN5tlLLB9VSMLpkY5rse-rdTRo0vAnwZ5u1LFIwwj-gvbU3rj8tpFe656DcZZ3n_w7VmPBhnEkZ1Wo1A35RPLthdZN7QMeLjgoSU8Nz3njtcUdR_IAEiBiybiVfouliNPuXPRtpfObiprPXgANZlci8toZyBEMAVX0SfC4liA4rkm41T7BhvFQfbmHjo0jBNJBibQseUcaF3y08tG9rJNxk-fa0MaN-YaDFSqN3OjSrvr8RiXAyABKglldS13ZXN0LTIwvA8.m3u8"
    ]
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
