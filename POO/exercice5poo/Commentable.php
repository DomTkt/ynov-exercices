<?php
/**
 * Created by PhpStorm.
 * User: Dom
 * Date: 29/11/2017
 * Time: 21:36
 */

trait Commentable
{
    private $comments;

    /**
     * Commentable constructor.
     * @param $comments
     */
    public function __construct($comments)
    {
        $this->comments = $comments;
    }

    public function getComments(){
        return $this->comments;
    }

    public function addComment(string $comment) {
        array_push($this->comments, $comment);
    }

}