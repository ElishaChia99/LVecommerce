<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Purchase;
use App\Post;
use DB;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmPurchase($postid)
    {
        $post = Post::find($postid);
        if(auth()->user()->id === $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        $post = Post::find($postid);
        return view('purchase.confirmPurchase')->with('post', $post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = new Purchase;
        $purchase->post_id = $request->input('post_id');
        $purchase->user_id = auth()->user()->id;
        $purchase->purchase_status = 'Payment have not complete.';
        $purchase->save();

        return redirect('/posts')->with('success', 'Successfully Purchase, the product will delivery after payment done.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($postid)
    {
        $post = Post::find($postid);
        if($post === null){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }
        if(auth()->user()->id !== $post->user_id){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }
        $purchase = Purchase::orderBy('created_at','desc')->where('post_id', $postid)->get();
        return view('purchase.show')->with('purchase',$purchase)->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Paid(Request $request, $purchaseid)
    {
        $purchase = Purchase::find($purchaseid);
        if($purchase === null){
            return redirect('/home')->with('error', 'Unauthorized Page');
        }
        if(auth()->user()->id !== $purchase->post->user_id){
            return redirect('/homme')->with('error', 'Unauthorized Page');
        }
        $purchase->purchase_status = $request->input('paid');
        $purchase->save();

        return redirect('/purchase/'.$purchase->post->id)->with('success', 'Status Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
