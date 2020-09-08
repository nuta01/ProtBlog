<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ProtBlogController extends Controller
{
    public function index(Request $request){
        $items = Post::all();
        return view('protblog.index',['items' => $items]);
    }

    public function find(Request $request){
        // $items = Post::where("text", $request->input)->get();

        //検索機能
        $input = $request->input;
            
        //①ひらがなをカタカナに変換
        $kana_title = mb_convert_kana($request->input,"KVC");

        //②カタカナをひらがなに変換
        $katakana_title = mb_convert_kana($request->input,"KVc");

        if ($input != '') {
            //1~3を全て通す式
            //reqestを曖昧検索、KVCを曖昧検索、KVcを曖昧検索
            $items = Post::where('text','LIKE','%'.$input.'%')
                ->orWhere('text','LIKE','%'.$kana_title.'%')
                ->orWhere('text','LIKE','%'.$katakana_title.'%')
                ->orderBy('created_at','desc')->paginate(5);
        }else{
            $items = Post::orderBy('created_at','desc')->paginate(5);
        }

        return view('protblog.show', ['items' => $items, 'input' => $request->input]);
    }
}
