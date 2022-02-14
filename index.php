<?php

require_once 'vendor/autoload.php';

$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'c8321miad3ie4lt0bpng');
$client = new Finnhub\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);

$search = $_GET["search"] ?? "";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>

<form method="get" action="/" class="search">
    <input name="search" placeholder="search" value="">
    <button type="submit">Search</button>
</form>

<br>

<?php if ($search): ?>
<div class="box">
    <?php
    echo 'Stock name: ' . $client->companyProfile2($search)->getTicker() . '<br>' . 'Stock price: ' . $client->quote($search)->getC() . '<br>';
    if ($client->quote("$search")->getDp() < 0) { ?>
        <span id="red">
                <?php echo $client->quote("$search")->getDp() . '% (' . $client->quote("$search")->getD() . ')'; ?>
            </span>
    <?php } else { ?>
        <span id="green">
                <?php echo $client->quote("$search")->getDp() . '% (' . $client->quote("$search")->getD() . ')'; ?>
            </span>
    <?php }
    echo '</br>';
    ?>
    <?php endif; ?>
</div>

<div class="layout">
    <div class="box1">
        <?php
        echo 'Stock name: ' . $client->companyProfile2("AAPL")->getTicker();
        echo '</br>';
        echo 'Stock price: ' . $client->quote("AAPL")->getC();
        echo '</br>';
        if ($client->quote("AAPL")->getDp() < 0) { ?>
            <span id="red">
           <?php echo $client->quote("AAPL")->getDp() . '% (' . $client->quote("AAPL")->getD() . ')'; ?>
        </span>
        <?php } else { ?>
            <span id="green">
                <?php echo $client->quote("AAPL")->getDp() . '% (' . $client->quote("AAPL")->getD() . ')'; ?>
            </span>
        <?php }
        echo '</br>';
        ?>
    </div>

    <div class="box2">
        <?php
        echo 'Stock name: ' . $client->companyProfile2("MSFT")->getTicker();
        echo '</br>';
        echo 'Stock price: ' . $client->quote("MSFT")->getC();
        echo '</br>';
        if ($client->quote("MSFT")->getDp() < 0) { ?>
            <span id="red">
           <?php echo $client->quote("MSFT")->getDp() . '% (' . $client->quote("MSFT")->getD() . ')'; ?>
        </span>
        <?php } else { ?>
            <span id="green">
                <?php echo $client->quote("MSFT")->getDp() . '% (' . $client->quote("MSFT")->getD() . ')'; ?>
            </span>
        <?php }
        echo '</br>';
        ?>
    </div>

    <div class="box3">
        <?php
        echo 'Stock name: ' . $client->companyProfile2("AMZN")->getTicker();
        echo '</br>';
        echo 'Stock price: ' . $client->quote("AMZN")->getC();
        echo '</br>';
        if ($client->quote("AMZN")->getDp() < 0) { ?>
            <span id="red">
           <?php echo $client->quote("AMZN")->getDp() . '% (' . $client->quote("AMZN")->getD() . ')'; ?>
        </span>
        <?php } else { ?>
            <span id="green">
                <?php echo $client->quote("AMZN")->getDp() . '% (' . $client->quote("AMZN")->getD() . ')'; ?>
            </span>
        <?php }
        echo '</br>';
        ?>
    </div>

    <div class="box4">
        <?php
        echo 'Stock name: ' . $client->companyProfile2("TDS")->getTicker();
        echo '</br>';
        echo 'Stock price: ' . $client->quote("TDS")->getC();
        echo '</br>';
        if ($client->quote("TDS")->getDp() < 0) { ?>
            <span id="red">
           <?php echo $client->quote("TDS")->getDp() . '% (' . $client->quote("TDS")->getD() . ')'; ?>
        </span>
        <?php } else { ?>
            <span id="green">
                <?php echo $client->quote("TDS")->getDp() . '% (' . $client->quote("TDS")->getD() . ')'; ?>
            </span>
        <?php }
        echo '</br>';
        ?>
    </div>
</div>

</body>
</html>
