<?php

declare(strict_types=1);

namespace App\Objects\Article;


class ArticleRepository
{
    public function __construct(private ArticleFactory $factory)
    {
    }

    public function createArticleFromInput(): object
    {
        $input = explode(", ", readline());
        [$title, $content, $author] = $input;
        $article = $this->factory->create($title, $content, $author);

        $n = readline();
        for($i=0; $i<$n; $i++){
            $command = explode(": ", readline());{
                switch ($command[0]) {
                    case 'Edit':
                        $article->edit($command[1]);
                        break;
                    case 'ChangeAuthor':
                        $article->changeAuthor($command[1]);
                        break;
                    case 'Rename':
                        $article->rename($command[1]);
                        break;
                    default:
                        break;
                }
            }
        }
        return $article;
    }
}
