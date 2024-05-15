<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use App\Objects\Article\ArticleFactory;
use App\Objects\Article\ArticleRepository;

// Create an instance of the ArticleFactory
$articleFactory = new ArticleFactory();

// Create an instance of the ArticleRepository and pass the ArticleFactory to its constructor
$repo = new ArticleRepository($articleFactory);

// Create an article from input
$article = $repo->createArticleFromInput();

// Output the article
echo $article;