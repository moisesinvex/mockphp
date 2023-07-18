<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

$serverToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJodHRwczovL2V4YW1wbGUuY29tL2lzc3VlciIsInVwbiI6Impkb2VAcXVhcmt1cy5pbyIsImdyb3VwcyI6WyJVc2VyIiwiQWRtaW4iXSwiYmlydGhkYXRlIjoiMjAwMS0wNy0xMyIsImN1aSI6IjEyMzQ1NiIsImZvbGlvIjoiMCIsImlhdCI6MTY4OTA5MjEzNywiZXhwIjoxNjg5MDkyNDM3LCJqdGkiOiIwYzE1YjM4My1kZjJmLTRjZTktYjhjOC04YjAwNDQ1YzU2YjYifQ.GcZlqaFH5KStz0QOpGYVn0vmDP4rgdnPK0YnLstNCpkwkL7osWOzHtghR5D4n6FKZF11yguyNoTFsRdRFsBooRJiT3oa1ZZ6W_zI_c6i3ubIsUpS8Y0jCeMTQDqlaIxaaEewTDwI43C4F_IVEPvVBWaZzNtwDRpSj7UliKktMRGmZaCrYK0sOadK4UsiAKaS6gUocEzGXOtBTtSiT-2cWpDfrlRk2DRwnXdYcTjdpai5ByL6Lp4mgLrhgdg3AGl-Q3kVUp8bT9EL1S8KCx2pXw1wmtg7JtsGUfzVA--F_kAEOfFIwOBxViscsHWtW-qD6YqrR3s4Pj9MX8w7a8bCNQ";

// Endpoint: /efectivo/movimientos/generatetoken
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/efectivo/movimientos/generatetoken') {
  echo $serverToken;
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
  header("Access-Control-Allow-Headers: Authorization");
  exit;
}

// Endpoint: /efectivo/movimientos/1/2023-06-11
if ($_SERVER['REQUEST_METHOD'] === 'GET' && preg_match('/^\/efectivo\/movimientos\/\d+\/\d{4}-\d{2}-\d{2}$/', $_SERVER['REQUEST_URI'])) {
  // Verificar cabecera de autorización
  // $headers = apache_request_headers();
  // if (!isset($headers['Authorization']) || $headers['Authorization'] !== $serverToken) {
  //   http_response_code(401); // Unauthorized
  //   exit;
  // }

  // Verificar cabecera de autorización
  $headers = apache_request_headers();

  if (!isset($headers['Authorization'])) {

    http_response_code(401); // Unauthorized
    exit;
  }

  // Obtener la URL actual
  $url = $_SERVER['REQUEST_URI'];

  // Dividir la URL en partes utilizando el delimitador "/"
  $parts = explode('/', $url);

  // Obtener el id de la ruta
  $id = $parts[3];

  $response = [];

  if ($id == '1') {
    $response = [
      [
        "concepto" => "Burger King",
        "fecha" => "2023-07-15",
        "movimiento" => -120.0,
        "saldo" => 22920.0,
        "referencia" => 98765432
      ],
      [
        "concepto" => "Netflix",
        "fecha" => "2023-07-14",
        "movimiento" => -290.0,
        "saldo" => 22630.0,
        "referencia" => 87654321
      ],
      [
        "concepto" => "Telcel",
        "fecha" => "2023-07-13",
        "movimiento" => -350.0,
        "saldo" => 22280.0,
        "referencia" => 76543210
      ],
      [
        "concepto" => "Amazon",
        "fecha" => "2023-07-12",
        "movimiento" => -520.0,
        "saldo" => 21760.0,
        "referencia" => 65432109
      ]
    ];
  }

  if ($id == '2') {
    $response =  [
      [
        "concepto" => "Cinepolis",
        "fecha" => "2023-06-27",
        "movimiento" => 320.0,
        "saldo" => 18320.0,
        "referencia" => 10987654
      ],
      [
        "concepto" => "Uber Eats",
        "fecha" => "2023-06-26",
        "movimiento" => 200.0,
        "saldo" => 18120.0,
        "referencia" => 40987654
      ],
      [
        "concepto" => "iTunes",
        "fecha" => "2023-06-25",
        "movimiento" => -100.0,
        "saldo" => 18020.0,
        "referencia" => 98765432
      ],
      [
        "concepto" => "Burger King",
        "fecha" => "2023-07-15",
        "movimiento" => -120.0,
        "saldo" => 22920.0,
        "referencia" => 98765432
      ],
      [
        "concepto" => "Netflix",
        "fecha" => "2023-07-14",
        "movimiento" => 290.0,
        "saldo" => 22630.0,
        "referencia" => 87654321
      ],
      [
        "concepto" => "Telcel",
        "fecha" => "2023-07-13",
        "movimiento" => -350.0,
        "saldo" => 22280.0,
        "referencia" => 76543210
      ],
      [
        "concepto" => "Amazon",
        "fecha" => "2023-07-12",
        "movimiento" => 520.0,
        "saldo" => 21760.0,
        "referencia" => 65432109
      ],
      [
        "concepto" => "Starbucks",
        "fecha" => "2023-07-11",
        "movimiento" => -90.0,
        "saldo" => 21670.0,
        "referencia" => 54321098
      ],
      [
        "concepto" => "Uber",
        "fecha" => "2023-07-10",
        "movimiento" => 250.0,
        "saldo" => 21420.0,
        "referencia" => 43210987
      ],
      [
        "concepto" => "Spotify",
        "fecha" => "2023-07-09",
        "movimiento" => -150.0,
        "saldo" => 21270.0,
        "referencia" => 32109876
      ],
      [
        "concepto" => "McDonald's",
        "fecha" => "2023-07-08",
        "movimiento" => -180.0,
        "saldo" => 21090.0,
        "referencia" => 21098765
      ],
      [
        "concepto" => "Cinepolis",
        "fecha" => "2023-07-07",
        "movimiento" => -320.0,
        "saldo" => 20770.0,
        "referencia" => 10987654
      ],
      [
        "concepto" => "Uber Eats",
        "fecha" => "2023-07-06",
        "movimiento" => 200.0,
        "saldo" => 20570.0,
        "referencia" => 19876543
      ],
      [
        "concepto" => "iTunes",
        "fecha" => "2023-07-05",
        "movimiento" => -100.0,
        "saldo" => 20470.0,
        "referencia" => 98765432
      ],
      [
        "concepto" => "Telcel",
        "fecha" => "2023-07-04",
        "movimiento" => -350.0,
        "saldo" => 20120.0,
        "referencia" => 87654321
      ],
      [
        "concepto" => "Netflix",
        "fecha" => "2023-07-03",
        "movimiento" => 290.0,
        "saldo" => 19830.0,
        "referencia" => 76543210
      ],
      [
        "concepto" => "Amazon",
        "fecha" => "2023-07-02",
        "movimiento" => -520.0,
        "saldo" => 19310.0,
        "referencia" => 65432109
      ],
      [
        "concepto" => "Starbucks",
        "fecha" => "2023-07-01",
        "movimiento" => -90.0,
        "saldo" => 19220.0,
        "referencia" => 54321098
      ],
      [
        "concepto" => "Uber",
        "fecha" => "2023-06-30",
        "movimiento" => 250.0,
        "saldo" => 18970.0,
        "referencia" => 43210987
      ],
      [
        "concepto" => "Spotify",
        "fecha" => "2023-06-29",
        "movimiento" => -150.0,
        "saldo" => 18820.0,
        "referencia" => 32109876
      ],
      [
        "concepto" => "McDonald's",
        "fecha" => "2023-06-28",
        "movimiento" => -180.0,
        "saldo" => 18640.0,
        "referencia" => 21098765
      ],
      [
        "concepto" => "Cinepolis",
        "fecha" => "2023-06-27",
        "movimiento" => -320.0,
        "saldo" => 18320.0,
        "referencia" => 10987654
      ],
      [
        "concepto" => "Uber Eats",
        "fecha" => "2023-06-26",
        "movimiento" => 200.0,
        "saldo" => 18120.0,
        "referencia" => 19876543
      ],
      [
        "concepto" => "iTunes",
        "fecha" => "2023-06-25",
        "movimiento" => -100.0,
        "saldo" => 18020.0,
        "referencia" => 98765432
      ]
    ];
  }

  if ($id == '3') {
    $response = [];
  }

  if ($id == '4') {
    $response = [
      [
        "concepto" => "Cinepolis",
        "fecha" => "2023-06-27",
        "movimiento" => -320.0,
        "saldo" => 18320.0,
        "referencia" => 10987654
      ],
      [
        "concepto" => "Uber Eats",
        "fecha" => "2023-06-26",
        "movimiento" => 200.0,
        "saldo" => 18120.0,
        "referencia" => 19876543
      ],
      [
        "concepto" => "iTunes",
        "fecha" => "2023-06-25",
        "movimiento" => -100.0,
        "saldo" => 18020.0,
        "referencia" => 98765432
      ]
    ];
  }


  http_response_code(200); // Unauthorized
  header('Content-Type: application/json');

  echo json_encode($response);
  exit;
}

// Endpoint: /efectivo/beneficiarios/1
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/efectivo/beneficiarios/1') {
  // Verificar cabecera de autorización
  $headers = apache_request_headers();
  if (!isset($headers['Authorization']) || $headers['Authorization'] !== $serverToken) {
    http_response_code(401); // Unauthorized
    exit;
  }

  // Procesar la solicitud y devolver un JSON de ejemplo
  $response = '
    {
        "Beneficiarios": [
          {
            "beneficiaryBank": "BANORTE",
            "beneficiaryAccount": "00102541814",
            "beneficiaryName": "JUAN BAUTISTA GUICHARD MICHEL",
            "beneficiaryBankId": "1",
            "beneficiaryRFCCURP": "001FTIN231350020",
            "activated": "1",
            "IsBeneficiaryCreditCard": true,
            "SameBank": true
          },
          {
            "beneficiaryBank": "BANCOMER",
            "beneficiaryAccount": "012180001861245775",
            "beneficiaryName": "JUAN BAUTISTA MICHEL",
            "beneficiaryBankId": "1",
            "beneficiaryRFCCURP": "001FTIN231350020",
            "activated": "0",
            "IsBeneficiaryCreditCard": false,
            "SameBank": false
          }
        ]
    }
    ';

  header('Content-Type: application/json');
  echo $response;
  exit;
}

// Endpoint: /efectivo/cuentas
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/efectivo/cuentas') {
  // Verificar cabecera de autorización
  $headers = apache_request_headers();

  if (!isset($headers['Authorization'])) {

    http_response_code(401); // Unauthorized
    exit;
  }

  // Procesar la solicitud y devolver un JSON de ejemplo
  $response = '
    {
        "account": [
          {
            "customerNumber": "00000571",
            "idAccount": 1,
            "customerAccount": "00101003326",
            "name": "CARLOS NORIEGA ROMERO",
            "currentBalance": "2942",
            "availableBalance": "2942",
            "balanceForLiquidate": "0",
            "currency": "MXN",
            "lastTransactionDate": "",
            "clabe": "059180001155100026",
            "type": "CTAEJE",
            "opera": "S",
            "typeS": "A",
            "acclass": "CTAEJE"
          },
          {
            "customerNumber": "00007391",
            "idAccount": 2,
            "customerAccount": "00101011551",
            "name": "JUAN CARLOS GONZALEZ SERNA",
            "currentBalance": "5942",
            "availableBalance": "-259296.14",
            "balanceForLiquidate": "-259296.14",
            "currency": "MXN",
            "lastTransactionDate": "",
            "clabe": "059180001155100027",
            "type": "CTAEJE",
            "opera": "S",
            "typeS": "A",
            "retTx": "",
            "dumbbell": "00011551",
            "acclass": "CTAEJE"
          },
          {
            "customerNumber": "00007391",
            "idAccount": 3,
            "customerAccount": "00101010328",
            "name": "MOISES JIMENEZ MACIAS",
            "currentBalance": "7742",
            "availableBalance": "-259296.14",
            "balanceForLiquidate": "-259296.14",
            "currency": "MXN",
            "lastTransactionDate": "",
            "clabe": "059180001155100028",
            "type": "CTAEJE",
            "opera": "S",
            "typeS": "A",
            "retTx": "",
            "dumbbell": "00011551",
            "acclass": "CTAEJE"
          },
          {
            "customerNumber": "00007392",
            "idAccount": 4,
            "customerAccount": "00105010328",
            "name": "LILITH ARISTA",
            "currentBalance": "7742",
            "availableBalance": "-259296.14",
            "balanceForLiquidate": "-259296.14",
            "currency": "USD",
            "lastTransactionDate": "",
            "clabe": "059180001155100068",
            "type": "CTAEJE",
            "opera": "S",
            "typeS": "A",
            "retTx": "",
            "dumbbell": "00011551",
            "acclass": "CTAEJE"
          },
          {
            "customerNumber": "00007392",
            "idAccount": 5,
            "customerAccount": "00105010328",
            "name": "Alfredo Garcia",
            "currentBalance": "7742",
            "availableBalance": "-259296.14",
            "balanceForLiquidate": "-259296.14",
            "currency": "JPY",
            "lastTransactionDate": "",
            "clabe": "059180001155100068",
            "type": "CTAEJE",
            "opera": "S",
            "typeS": "A",
            "retTx": "",
            "dumbbell": "00011551",
            "acclass": "CTAEJE"
          }
        ]
    }
    ';

  http_response_code(200); // Unauthorized
  header('Content-Type: application/json');
  echo $response;
  exit;
}

// Si no se encuentra ningún endpoint válido, devolver un error 404
http_response_code(404);
exit;
