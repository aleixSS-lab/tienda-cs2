<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $skins = [
            [
                'nombre' => 'AWP | Dragon Lore',
                'descripcion' => 'Exterior: Recién fabricado. Una leyenda entre leyendas.',
                'precio' => 12500.00,
                'stock' => 1,
                'imagen' => 'https://steamcommunity-a.akamaihd.net/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyLwiYbf_jdk4veqYaF7IfysCnWRxuF4j-B-Xxa-kBkupjDLw96pcX6TZg5yCZJ5TbNZtxjtwNS2NemztgDbidoQyH-sjCga6no-6_FCD_QEyQmfGQ/256fx256f'
            ],
            [
                'nombre' => 'AK-47 | Case Hardened (Blue Gem)',
                'descripcion' => 'Patrón 661. El azul más puro del mercado.',
                'precio' => 8500.50,
                'stock' => 1,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyLwlcK3wiNK0P2nZKFpH_yaCW-Ej7sk5bE8Sn-2lEpz4zndzoyvdHuUPwFzWZYiE7EK4Bi4k9TlY-y24FbAy9USGSiZd5Q/280x210'
            ],
            [
                'nombre' => 'M4A4 | Howl',
                'descripcion' => 'Contrabando. Exterior: Recién fabricado.',
                'precio' => 5400.00,
                'stock' => 2,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyL8ypexwiFO0P_6afVSKP-EAm6extF6ueZhW2exwkl2tmTXwt39eCiUPQR2DMN4TOVetUK8xoLgM-K341eM2otDnC6okGoXufBz_TAB/280x210'
            ],
            [
                'nombre' => 'Butterfly Knife | Doppler Sapphire',
                'descripcion' => 'Gama Doppler. Una joya brillante en tus manos.',
                'precio' => 15000.00,
                'stock' => 1,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyL6kJ_m-B1Z-ua6bbZrLOmsD2qvxeFmoO1sXRajnRw0tmm6lob-KT-JPVQpA5d3Q7IM4Ra_ltLgN7jn4wKPi41Nyyir3CpK6H1vt7xWAKt0qLqX0V-7tNsN5g/280x210'
            ],
            [
                'nombre' => 'USP-S | Kill Confirmed',
                'descripcion' => 'Exterior: Algo desgastado. Rojo sangre.',
                'precio' => 120.00,
                'stock' => 10,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyLkjYbf7itX6vytbbZSI-WsG3SA_uV_vO1WTCa9kxQ1vjiBpYPwJiPTcFB2Xpp5TO5cskG9lYCxZu_jsVCL3o4Xnij23ClO5ik9tegFA_It8qHJz1aWe-uc160/280x210'
            ],
            [
                'nombre' => 'Desert Eagle | Printstream',
                'descripcion' => 'Efecto perlado que brilla con la luz.',
                'precio' => 85.00,
                'stock' => 15,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyL1m5fn8Sdk7OeRbKFsJ8-DHG6e1f1iouRoQha7kBwxqnPQnNmqcSrCPVVzDJB3ROVZ5xLpkIbvY-qws1CLgo5Dny783HtK6yts_a9cBrhYI1Ka/280x210'
            ],
                [
                'nombre' => 'Karambit | Doppler Phase 2',
                'descripcion' => 'Exterior: Recién fabricado. El brillo rosado del Doppler Phase 2.',
                'precio' => 2400.00,
                'stock' => 1,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyL6kJ_m-B1Q7uCvZaZkNM-SA1iUzv5mvOR7cDm7lA4i4QKJk4jxNWWXawUgA8dxRLEO40KwkobnMbnj5QKL348Qmy-sji5K7i466uxUUKQn5OSJ2KBZjkQR/280x210'
            ],
            [
                'nombre' => 'AK-47 | Vulcan',
                'descripcion' => 'Diseño deportivo y limpio. Exterior: Recién fabricado.',
                'precio' => 950.00,
                'stock' => 3,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyLwlcK3wiFO0POlPPNSMuWRDGKC_uJ_t-l9AXCxxEh14zjTztivci2ePQZ2W8NzTecD4BKwloLiYeqxtAOIj9gUyyngznQeF7I6QE8/280x210'
            ],
            [
                'nombre' => 'M4A1-S | Printstream',
                'descripcion' => 'Acabado perlado con detalles geométricos minimalistas.',
                'precio' => 450.00,
                'stock' => 5,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyL8ypexwjFS4_ega6F_H_OGMWrEwL9lj_F7Rienhgk1tjyIpYL8JSLSMxghAsBwQeMN5BHtlIblZuLr4Q3biNkRmH_5iX5Muypj47pWA6EsqPaGkUifZp-rQ1Ym/280x210'
            ],
            [
                'nombre' => 'Glock-18 | Fade',
                'descripcion' => 'Gradiente de color completo. 100% Fade.',
                'precio' => 1100.00,
                'stock' => 2,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyL2kpnj9h1a7s2oaaBoH_yaCW-Ej-8u5bZvHnq1w0Vz62TUzNj4eCiVblMmXMAkROJeskLpkdXjMrzksVTAy9US8PY25So/280x210'
            ],
            [
                'nombre' => 'AWP | Gungnir',
                'descripcion' => 'Colección Norse. La lanza de Odín en tus manos.',
                'precio' => 9800.00,
                'stock' => 1,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyLwiYbf-jFk7uW-V6N4LvedB3WvzedxuPUnHnjnzUl0sWrdztitI3rDZgJzAsZ1QOFY4UPqldDgMO_l41HXit9AmTK-0H227dAsvQ/280x210'
            ],
            [
                'nombre' => 'M9 Bayonet | Lore',
                'descripcion' => 'Nudo de oro grabado en la hoja. Exterior: Casi nuevo.',
                'precio' => 1600.00,
                'stock' => 1,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyL6kJ_m-B1Wts2sab1iLvWHMWSF_uMvj-NoVha_mg8ijDGMnYftbyrBOw52D5R0FOYPtkG6ltOxNrjl4FPdiN0WzC723SxP6ypp6u8LVKY7uvqAFpeI3XY/280x210'
            ],
            [
                'nombre' => 'AK-47 | Gold Arabesque',
                'descripcion' => 'Oro puro de 24 quilates. Un lujo prohibido.',
                'precio' => 3200.00,
                'stock' => 1,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyLwlcK3wiVI0POlPPNSJ_-fCliR0-90tfJ4WiyMnRgmpSTLwt-tJ3mTaFMjXJp3TOBb5BHpwIbmYuLk5wbbj99DzHn4ii1Buns95_FCD_QgH1PjwA/280x210'
            ],
            [
                'nombre' => 'Desert Eagle | Blaze',
                'descripcion' => 'Llamas pintadas a mano. Un clásico de CS:GO.',
                'precio' => 600.00,
                'stock' => 4,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyL1m5fn8Sdk7vORbqhsLfWAMWuZxuZi_uI_TX6wxxkjsGXXnImsJ37COlUoWcByEOMOtxa5kdXmNu3htVPZjN1bjXKpkHLRfQU/280x210'
            ],
            [
                'nombre' => 'Butterfly Knife | Marble Fade',
                'descripcion' => 'Patrón de tres colores con punta roja (Red Tip).',
                'precio' => 2100.00,
                'stock' => 1,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf0ebcZThQ6tCvq4GGqPr1Ibndk1RX6cF0teXI8oThxlG1rRA5Z2rzdtfHeldqZ13U-QO-w-jth8C4upzOnyFguSUq4XndyUepwUYb00RQWkk/280x210'
            ],
            [
                'nombre' => 'AWP | Asiimov',
                'descripcion' => 'Diseño de ciencia ficción. El corazón de tu tienda.',
                'precio' => 180.00,
                'stock' => 8,
                'imagen' => 'https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17PLfYQJD_9W7m5a0n_L1JaKfk21XvZFyjLrC8Nms2gK1_EY5MW3zcI-SI1BqYguE_1a4kOu5hMS87oOJlyV2PoDpPA/280x210'
            ],
            [
                'nombre' => 'AK-47 | Blue Laminate',
                'descripcion' => 'Acabado azul brillante. Un clásico de CS:GO.',
                'precio' => 400.00,
                'stock' => 1,
                'imagen' => 'https://community.fastly.steamstatic.com/economy/image/i0CoZ81Ui0m-9KwlBY1L_18myuGuq1wfhWSaZgMttyVfPaERSR0Wqmu7LAocGIGz3UqlXOLrxM-vMGmW8VNxu5Dx60noTyLwlcK3wipC0POlPPNhIf2sDGuFxNF6ueZhW2fhzE5_5G7dnt_7JXufa1J0DZAkE-cKtBaxl9WzPuyz5lDY3YpAzCn9kGoXuZPu7T4u/330x192?allow_animated=1' 
            ]
        ];

        foreach ($skins as $skin) {
            Product::create($skin);
        }
    }
}