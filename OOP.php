<?php

class Book {


    // TODO: Add properties as Private
    private string $title;
    private int $availableCopies;

 public function __construct($title, $availableCopies) {


        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;

    }


// TODO: Add getTitle method
    public function getTitle(): string {
        return $this->title;
    }


    // TODO: Add getAvailableCopies method
    public function getAvailableCopies(): int {
        return $this->availableCopies;
    }



    // TODO: Add borrowBook method
    public function borrowBook(): int{
        return $this->availableCopies--;
    }



    // TODO: Add returnBook method
    public function returnBook(): int{
        return $this->availableCopies++;
    }


}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);


class Member {


    // TODO: Add properties as Private
    private string $name;


    public function __construct($name) {


        // TODO: Initialize properties
        $this->name = $name;

    }



    // TODO: Add getName method
    public function getName(): string {
        return $this->name;
    }


    // TODO: Add borrowBook method
    public function borrowBook(Book $book): int {
        return $book->borrowBook();
    }



    // TODO: Add returnBook method
    public function returnBook(Book $book): int {
        return $book->returnBook();
    }


}

$name1 = new Member("John Doe");
$name1->borrowBook($book1);
$name2 = new Member("Jane Smith");
$name2->borrowBook($book2);

// Output

printf("Available Copies of '%s': %s <br>", $book1->getTitle(), $book1->getAvailableCopies());
printf("Available Copies of '%s': %s <br>", $book2->getTitle(), $book2->getAvailableCopies());

