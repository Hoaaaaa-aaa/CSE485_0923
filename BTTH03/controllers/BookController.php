<?php
require APP_ROOT.'/services/BookService.php';
class BookController{
    public function index(){
        $bookService = new BookService();
        $Books = $bookService->getBook();
        $tacgia = $bookService->getAuthor();
        if(isset($_POST['save'])){
            $bookService->AddBook();
        }
        else if(isset($_POST['edit'])){
            $bookService->EditBook();
        }
        require APP_ROOT.'/views/index.php';
    }
    public function Remove(){
        $musicService = new BookService();
        $musicService->RemoveBook();
    }
}