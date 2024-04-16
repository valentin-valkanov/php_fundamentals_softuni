<?php declare(strict_types=1);

namespace Article;
require_once 'Article.php';
class ArticleFactory
{
    public function create(string $title, string $content, string $author): Article
    {
        return new Article($title, $content, $author);
    }
}

