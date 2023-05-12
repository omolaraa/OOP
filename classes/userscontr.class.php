<?php

class UsersContr extends Users{

    public function createCategory($categoryName, $categorySlug){

    $this->setCategories($categoryName, $categorySlug);

    }

}