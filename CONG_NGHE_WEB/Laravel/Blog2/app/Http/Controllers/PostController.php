<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    //Ham nay de hien thi view them du lieu
    public function create()
    {
        return view('post.create');
    }


//Ham nay se thuc hien them du lieu moi
    public function store(Request $request)
    {
        $data = $request->all();
        //Dung thang support/facades
        $validator = Validator::make($data, [
            'title' => "required|max:70",
            'body' => "required"
        ]);

        if ($validator->fails()) {
            return redirect(route('post.create'))->with(['error' => "Du lieu nhap vao khong hop le"], 400);
        }

        $post = Post::create($data);
        if ($post) {
            return redirect(route('post.create'))->with(['success' => "Them thanh cong"], 200);
        } else {
            return redirect(route('post.create'))->with(['error' => "Them that bai"], 400);
        }
    }

    //Hien thi ra view sua du lieu
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token']);
        //Dung thang support/facades
        $validator = Validator::make($data, [
            'title' => "required|max:70",
            'body' => "required"
        ]);

        if ($validator->fails()) {
            return redirect(route('post.edit',['id'=>$id]))->with(['error' => "Du lieu nhap vao khong hop le"], 400);
        }

        $post = Post::where('id',$id);
        if ($post) {
            $post->update($data);
            return redirect(route('post.edit',['id'=>$id]))->with(['success' => "Sua thanh cong"], 200);
        } else {
            return redirect(route('post.edit',['id'=>$id]))->with(['error' => "Sua that bai"], 400);
        }
    }

    public function delete($id)
    {
        try {
            $post = Post::where('id',$id)->first();
            if ($post) {
                $post->delete();
                return redirect(route('home'));
            }
            else {
                return redirect(route('home'))->with(['error' => "Xoa that bai"], 400);
            }
        }
        catch (\Exception $e) {
            return redirect(route('home'))->with(['error' => $e->getMessage()], 400);
        }
    }
}
