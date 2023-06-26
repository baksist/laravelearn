<?php

    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Elit mollit aliquip esse qui fugiat. Qui aliqua duis proident elit incididunt ut ipsum labore nisi. Fugiat pariatur ad pariatur veniam quis duis deserunt amet incididunt Lorem adipisicing incididunt ea velit. Tempor dolore occaecat amet quis reprehenderit dolor.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Elit mollit aliquip esse qui fugiat. Qui aliqua duis proident elit incididunt ut ipsum labore nisi. Fugiat pariatur ad pariatur veniam quis duis deserunt amet incididunt Lorem adipisicing incididunt ea velit. Tempor dolore occaecat amet quis reprehenderit dolor.'
                ]
            ];
        }

        public static function find($id) {
            $listings = self::all();
            foreach($listings as $listing){
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }