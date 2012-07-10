<?php
$dataPath = realpath(__DIR__ . '/../data/doomsday.sqlite');
$db = new PDO('sqlite:' . $dataPath);

if (!function_exists('getArticles')) {
    function getArticles($limit = null) {

        global $db;

        $useLimit = false;
        $sql = 'SELECT * FROM articles ORDER BY id DESC';
        if (isset($limit) && is_int($limit)) {
            $sql .= ' LIMIT ?';
            $useLimit = true;
        }

        $statement = $db->prepare($sql);

        if ($useLimit) {
            $statement->bindParam(1, $limit, PDO::PARAM_INT);
        }

        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (!function_exists('getArticleBySlug')) {
    function getArticleBySlug($slug) {

        global $db;

        $statement = $db->prepare('SELECT * FROM articles WHERE slug = ?');
        $statement->bindParam(1, $slug, PDO::PARAM_STR);

        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}

if (!function_exists('getCommentsBySlug')) {
    function getCommentsBySlug($slug) {

        global $db;

        $statement = $db->prepare('SELECT * FROM comments WHERE article_slug = ?');
        $statement->bindParam(1, $slug, PDO::PARAM_STR);

        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

if (!function_exists('insertComment')) {
    function insertComment($slug, $name, $message) {

        global $db;

        $statement = $db->prepare('INSERT INTO comments (article_slug, name, message) VALUES (?, ?, ?)');

        $result = $statement->execute(array($slug, $name, $message));
        if ($statement->errorCode() !== PDO::ERR_NONE) {
            var_dump($statement->errorInfo());
        }
        return $result;
    }
}