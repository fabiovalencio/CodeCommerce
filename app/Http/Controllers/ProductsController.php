<?php

namespace CodeCommerce\Http\Controllers;


use CodeCommerce\Category;
use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    private $productModel;

    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }

    public function index()
    {
        $products = $this->productModel->paginate(10);

        return view('products.index', compact('products'));
    }

    public function create(Category $category)
    {
        $categories = $category->lists('name', 'id');

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Requests\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProductRequest $request)
    {
        $input = $request->all();
        $input['featured'] = $request->get('featured') ? true : false;
        $input['recommend'] = $request->get('recommend') ? true : false;

        $product = $this->productModel->fill($input);
        $product->save();

        return redirect()->route('products');
    }

    public function edit($id, Category $category)
    {
        $categories = $category->lists('name', 'id');
        $product = $this->productModel->find($id);
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Requests\ProductRequest $request, $id)
    {
        $input = $request->all();

        $input['featured'] = $request->get('featured') ? true : false;
        $input['recommend'] = $request->get('recommend') ? true : false;
        $this->productModel->find($id)->update($input);

        return redirect()->route('products');
    }

    public function destroy($id)
    {
        $this->productModel->find($id)->delete();
        return redirect()->route('products');
    }

    public function images($id)
    {
        $product = $this->productModel->find($id);

        return view('products.images', compact('product'));
    }

    public function createImage($id)
    {
        $product = $this->productModel->find($id);

        return view('products.create_image', compact('product'));
    }

    public function storeImage(Requests\ProductImageRequest $request, $id, ProductImage $productImage)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();

        $image = $productImage::create(['product_id'=>$id, 'extension'=>$extension]);

        Storage::disk('s3')->put($image->id.'.'.$extension, File::get($file), 'public');

        return redirect()->route('products.images', ['id'=>$id]);
    }

    public function destroyImage(ProductImage $productImage, $id)
    {
        $image = $productImage->find($id);

        $file = $image->id.'.'. $image->extension;

        if(Storage::disk('s3')->get($file)) {
            Storage::disk('s3')->delete($file);
            $image->delete();
        }

        $product = $image->product;

        return redirect()->route('products.images', ['id'=>$product]);
    }
}
