<?php


namespace projet_back\Manager;

use Entity\Article;
use Classes\DB;


class ArticleM {

    // Add Article to database ...

    public function addArticle (Article $article) {
        $request = DB::getInstance()->prepare("INSERT INTO article(name,article,user_fk) 
                                                   VALUE(:name,:article,:user_fk)");
        $request->bindValue(':name',$article->getName());
        $request->bindValue(':article',$article->getArticle());
        $request->bindValue(':user_fk',$article->getUserFk());
        if($request->execute()) {
            echo 'article ajouté';
        }
    }

    // GET article to database ....
    public function getarticle(int $id) {
        $article = [];
        $request = DB::getInstance()->prepare("SELECT * FROM article WHERE id=:id");
        $request->bindValue(':id', $id);
        $request->execute();
        $article_data = $request->fetch();
        if ($article_data) {
            $article[] = new Article($article_data['id'],$article_data['name'],$article_data['article'],$article_data['user_fk']);
        }
        return $article;
    }
}
