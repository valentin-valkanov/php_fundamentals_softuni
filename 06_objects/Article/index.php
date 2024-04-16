<?php

require_once 'ArticleRepository.php';
require_once 'ArticleFactory.php';

use Article\ArticleRepository;
use Article\ArticleFactory;

// Create an instance of the ArticleFactory
$articleFactory = new ArticleFactory();

// Create an instance of the ArticleRepository and pass the ArticleFactory to its constructor
$repo = new ArticleRepository($articleFactory);

// Create an article from input
$article = $repo->createArticleFromInput();

// Output the article
echo $article;