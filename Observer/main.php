<?php

require 'OnlineMarketplace.php';

$onlineMarketplace = new OnlineMarketplace();

$ahmed = new Customer('ahmed');
$mubarak = new Customer('mubarak');
$mohamed = new Customer('mohamed');
$omani = new Customer('omani');

$onlineMarketplace->subscribe(EventType::NEW_PRODUCT, $ahmed);
$onlineMarketplace->subscribe(EventType::NEW_OFFER, $ahmed);

$onlineMarketplace->subscribe(EventType::NEW_PRODUCT, $mubarak);
$onlineMarketplace->subscribe(EventType::NEW_OFFER, $mohamed);
$onlineMarketplace->subscribe(EventType::JOB_OPENING, $omani);

$onlineMarketplace->addNewProduct(new Product('mobile', 1000));
$onlineMarketplace->addNewOffer(new Offer('New offer with 20% for every item.'));
$onlineMarketplace->addNewJobOpening('Sales Man');

