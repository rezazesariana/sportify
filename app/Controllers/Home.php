<?php

namespace App\Controllers;

use App\Models\FieldCategoryModel;
use App\Models\FieldModel;
use App\Models\PictureModel;
use App\Models\ReviewModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $kategoriModel = new FieldCategoryModel();
        $fieldModel = new FieldModel();
        $pictureModel = new PictureModel();
        $reviewModel = new ReviewModel();
        $userModel = new UserModel();

        $categories = $kategoriModel->findAll();

        foreach ($categories as &$tab) {
            $fields = $fieldModel->where('kategori_id', $tab['kategori_id'])->findAll();
            foreach ($fields as &$field) {
                // Get Photo
                $field['main_photo'] = $pictureModel->where([
                    'field_id' => $field['field_id'],
                    'main_picture' => true
                ])->first();

                // Get Reviews
                $reviews = $reviewModel->where('field_id', $field['field_id'])->findAll();
                $totalReviews = count($reviews);
                $averageRating = $totalReviews ? array_sum(array_column($reviews, 'rating')) / $totalReviews : 0;
                
                $field['total_reviews'] = $totalReviews;
                $field['average_rating'] = $averageRating;
            }
            $tab['fields'] = $fields;
        }

        $reviews = $reviewModel->findAll();
        foreach ($reviews as &$review) {
            $review['user'] = $userModel->find($review['user_id']);
        }

        $data['categories'] = $categories;
        $data['all_reviews'] = $reviews;

        echo view('part/header.php');
        echo view('home.php', $data);
        echo view('part/footer.php');
    }
}
