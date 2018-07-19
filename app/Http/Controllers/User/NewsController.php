<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;
use App\Models\Tag;
use App\Models\Brand;
use App\Models\News;
use MetaTag;

class NewsController extends Controller {

    function leftMenu($request){
        // mTag = menu Tag
        $cateID       = isset($request->category) ? (int) $request->category : '';
        $typeID       = isset($request->type) ? (int) $request->type : '';
        $brandID      = isset($request->brand) ? (int) $request->brand : '';
        $size         = isset($request->size) ? $request->size : '';
        $mTag         = Tag::where(array("status" => 1))->orderByRaw("id DESC")->get();
        $mBrand       = Brand::where(array("status" => 1))->orderByRaw("id DESC")->get();
        $mProductType = ProductType::orderByRaw("id DESC")->get();
        $mProductCate = ProductCategory::where(array("status" => 1))->orderByRaw("id DESC")->get();

        View::share('mTag', $mTag);
        View::share('mBrand', $mBrand);
        View::share('mProductType', $mProductType);
        View::share('mProductCate', $mProductCate);
        View::share('cateID', $cateID);
        View::share('typeID', $typeID);
        View::share('brandID', $brandID);
        View::share('size', $size);
    }

    public function index(Request $request)
    {
        MetaTag::set('title', 'Danh sách tin tức');
        MetaTag::set('description', 'danh sách tin tức');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');
        self::leftMenu($request);
        $params      = $request->all();
        $builder     = News::select()->where("status", 1)->orderByRaw("ord ASC, id DESC");
        $totalResult = $builder->count();
        $listNews    = $builder->paginate(LIMIT_PAGE_PRODUCT);
        $paginator   = $listNews->appends($params);
        return view("user.news.index")
            ->with("listNews", $listNews)
            ->with("paginator", $paginator);
    }

    public function detail($id, $seo_link, Request $request)
    {
        MetaTag::set('title', 'chi tiết tin tức');
        MetaTag::set('description', 'chi tiết tin tức');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');
        self::leftMenu($request);

        $news = News::select()->where(array("id" => $id, "status" => 1))->first();
        if(empty($news)) return redirect()->guest("/n");
        return view("user.news.detail")
            ->with("news", $news);
    }
}