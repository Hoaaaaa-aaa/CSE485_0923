<?php
require APP_ROOT.'/services/AuthorService.php';
class AuthorController{
    public function index(){
        $bookService = new AuthorService();
        $author = $bookService->getAuthor();
        require APP_ROOT.'/views/author.php';
    }
    public function Remove(){
        $bookService = new BookService();
        $bookService->RemoveBook();
    }
}