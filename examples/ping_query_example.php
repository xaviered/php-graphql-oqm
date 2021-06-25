<?php declare(strict_types=1);

/**
 * Testing custom namespace codegen.
 *
 * 1) Start your GraphQL server with the `ping` query.
 *  For more info on running your own GraphQL server, see https://www.apollographql.com/
 *
 * 2) Run the following command and make sure to use `testing\GraphQL\SchemaObject` as the custom namespace:
 *  $ php bin/generate_schema_objects
 *
 * 3) Update composer maps
 *  $ composer dump-autoload
 *
 * 4) Run this command:
 *  $ php examples/ping_query_example.php
 *
 *  You should see the output of the returned query.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use testing\GraphQL\SchemaObject\RootQueryObject;
use GraphQL\Client;

const API_URL = 'http://localhost:8080/';
$client = new Client(API_URL);

$root = new RootQueryObject();
$root->selectPing();

$result = $client->runQuery($root->getQuery());

print_r(['result' => $result->getResults()]);
