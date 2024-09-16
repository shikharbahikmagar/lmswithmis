<?php
namespace App\Http\Controllers;

use App\Services\ImageAnalysisService;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $imageAnalysisService;

    public function __construct(ImageAnalysisService $imageAnalysisService)
    {
        $this->imageAnalysisService = $imageAnalysisService;
    }

    public function show($id)
    {
        $book = Book::find($id);

        // Path to the image you want to analyze
        $imagePath = public_path('images/book_images' . $book->image_url);

        // Analyze the image
        $results = $this->ImageAnalysisService->analyzeImage($imagePath);

        echo "<pre>"; print_r($results); die;

        // Extract relevant data and fetch recommendations
        $recommendedBooks = $this->getRecommendedBooks($results);

        return view('books.show', compact('book', 'recommendedBooks'));
    }

    protected function getRecommendedBooks($results)
    {
        // Example logic for recommendation based on detected labels
        $labels = array_map(fn($item) => $item['name'], $results['objects']);

        return Book::where(function ($query) use ($labels) {
            foreach ($labels as $label) {
                $query->orWhere('description', 'like', "%{$label}%");
            }
        })->get();
    }
}
