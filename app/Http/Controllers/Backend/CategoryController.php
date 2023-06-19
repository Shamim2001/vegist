<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller {
    /**
     * Return function
     *
     * @return void
     */
    function index() {
        // Category
        $categories = Category::orderBy( 'name', 'ASC' )->paginate( 10 );
        // Return
        return view( 'backend.category.index', compact( 'categories' ) );
    }

    public function create( Request $request ) {

        if ( $request->isMethod( 'POST' ) ) {
            $request->validate( [
                'name'      => 'required|string|max:255',
                'slug'      => 'required|string|max:255',
                'thumbnail' => 'nullable',
            ] );

            $thumb = '';
            if ( !empty( $request->file( 'thumbnail' ) ) ) {
                $thumb = time() . '-' . str_replace( ' ', '--', $request->file( 'thumbnail' )->getClientOriginalName() );
                // Store the thumbnail
                $request->file( 'thumbnail' )->storeAs( '/', $thumb );
            }

            Category::create( [
                'name'      => $request->name,
                'slug'      => $request->slug,
                'thumbnail' => $thumb,
            ] );

            // Return
            return redirect()->back()->with( 'success', 'Category Cretaed Successfully' );
        }

        return view( 'backend.category.create' );
    }

    function edit( Request $request, Category $category ) {
        // If Method PUT
        if ( $request->isMethod( 'PUT' ) ) {
            // Validation
            $request->validate( [
                'name'      => 'required|string|max:255',
                'slug'      => 'required|string|max:255',
                'thumbnail' => 'nullable',
            ] );

            try {
                // Thumbnail
                $thumb = $category->thumbnail;
                if ( !empty( $request->file( 'thumbnail' ) ) ) {
                    Storage::delete( '/', $category->thumbnail );
                    $thumb = time() . '-' . str_replace( ' ', '--', $request->file( 'thumbnail' )->getClientOriginalName() );
                    // Store the thumbnail
                    $request->file( 'thumbnail' )->storeAs( '/', $thumb );
                }
                // Category Update
                $category->update( [
                    'name'      => $request->name,
                    'slug'      => $request->slug,
                    'thumbnail' => $thumb,
                ] );
            } catch ( \Throwable $th ) {
                // Error Massage;
                $th->getMessage();
            }
            // Return
            return redirect()->route( 'category.index' )->with( 'success', 'Category Updated Successfully' );
        }
        // Return
        return view( 'backend.category.edit', compact( 'category' ) );
    }

    function delete(Category $category) {
        // Image Delete
        Storage::delete('/', $category->thumbnail );
        // Slider Delete
        $category->delete();
        // Return
        return redirect()->route( 'category.index' )->with( 'success', 'Category Deleted Successfully' );
    }
}
