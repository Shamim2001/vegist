<?php

namespace App\Http\Controllers\Backend;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller {
    function index() {
        $products = Product::latest()->paginate( 10 );
        // Return
        return view( 'backend.product.index', compact( 'products' ) );
    }

    /**
     * Create function
     *
     * @param Request $request
     * @return void
     */
    function create( Request $request ) {

        // If Method POST
        if ( $request->isMethod( 'POST' ) ) {
            // Validation
            $request->validate( [
                'title'       => 'required|string',
                'slug'        => 'required|string',
                'excerpt'     => 'nullable|string',
                'description' => 'nullable|string',
                'price'       => 'required|numeric',
                'category_id' => 'required',
                'gallery'     => 'required',
            ] );

            // Product Create
            $product = Product::create( [
                'title'       => $request->title,
                'slug'        => $request->slug,
                'excerpt'     => $request->excerpt,
                'description' => $request->description,
                'price'       => $request->price,
                'category_id' => $request->category_id,
            ] );

            // Multiple Gallery Image
            if ( !empty( $request->file( 'gallery' ) ) ) {
                foreach ( $request->file( 'gallery' ) as $image ) {
                    $file = $image->getClientOriginalName();
                    $filename = str_replace( ' ', '-', time() . '--' . $file );
                    $image->storeAs( 'products/', $filename );

                    // Gallery Create
                    Gallery::create( [
                        'name'       => $filename,
                        'product_id' => $product->id,
                    ] );
                }
            }
            // Return
            return redirect()->route( 'product.index' )->with( 'success', 'Product Created Successfully' );
        }

        // Return
        return view( 'backend.product.create', compact( 'categories' ) );
    }

    function edit( Request $request, Product $product ) {
        // Category
        $categories = Category::get();

        // If Method PUT
        if ( $request->isMethod( 'PUT' ) ) {
            $request->validate( [
                'title'       => 'required|string',
                'slug'        => 'required|string',
                'excerpt'     => 'nullable|string',
                'description' => 'nullable|string',
                'price'       => 'required|numeric',
                'category_id' => 'required',
                'gallery'     => 'required',
            ] );

            // Product Create
            $product = Product::create( [
                'title'       => $request->title,
                'slug'        => $request->slug,
                'excerpt'     => $request->excerpt,
                'description' => $request->description,
                'price'       => $request->price,
                'category_id' => $request->category_id,
            ] );

            // Multiple Gallery Image
            if ( !empty( $request->file( 'gallery' ) ) ) {
                foreach ( $request->file( 'gallery' ) as $image ) {
                    $file = $image->getClientOriginalName();
                    $filename = str_replace( ' ', '-', time() . '--' . $file );
                    $image->storeAs( 'posts/', $filename );

                    // Gallery Create
                    Gallery::create( [
                        'name'       => $filename,
                        'product_id' => $product->id,
                    ] );
                }
            }
            // Return
            return redirect()->route( 'product.index' )->with( 'success', 'Product Updated Successfully' );
        }

        // Category Store Variable
        $categories = Category::get(['id','name']);
        // Return
        return view( 'backend.product.edit', compact( 'categories', 'product' ) );
    }

    function delete(Product $product) {
        // Slider Delete
        $product->delete();
        // Return
        return redirect()->route( 'product.index' )->with( 'success', 'Product Deleted Successfully' );
    }
}
