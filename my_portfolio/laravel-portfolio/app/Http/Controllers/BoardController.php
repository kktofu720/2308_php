<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Board;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ** del 20231116 미들웨어로 이관
        // // 로그인 체크
        // if(!Auth::check()) {
        //     return redirect()->route('user.login.get');
        // }

        // 게시글 획득
        $result = Board::get();

        return view('home')->with('data', $result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 작성 처리(1)
        $result = Board::create($request->only('b_title', 'b_content')); // 엘러퀀트
        // $result->save(); // create에는 save가 필요x

        // // 작성 처리(2)
        // $arrInputData = $request->only('b_title', 'b_content');
        // $result = Board::create($arrInputData);

        // save()를 이용하는 방법
        // $model = new Board($arrInputData);
        // $model->save();

        return redirect()->route('board.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $result = DB::table('boards')
        // ->select('b_title', 'b_content')
        // ->where('b_id', '=', $id) // '=' 은 생략가능 
        // ->get();

        // $result = DB::table('boards')
        //     ->where('b_id', '=', $id)
        //     ->get();
        $result = Board::find($id); // 엘로퀀트 방식

        // 조회수 올리기
        $result->b_hits++; // 조회수 1증가 // 엘로퀀트 방식
        $result->timestamps = false;

        // 업데이트 처리
        $result->save(); // 엘로퀀트 방식

        return view('detail')->with('data', $result); // data란 이름에 $result를 담아서 보내줌
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Board::find($id);
        return view('edit')->with('data', $result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = Board::find($id);

        $result->b_title = $request->b_title;
        $result->b_content = $request->b_content;
        $result->save();
        
        return redirect()->route('board.show', ['board' => $result->b_id]);
        // return view('detail')->with('data', $result);

        // 다른 방식
        // $result = Board::find($id);
        // $result2 = $request->only('b_title', 'b_content');
        // $result->update($result2);

        // 실패한 방식 : 수정은 되는데 hit 에러가 뜸
        // $result = Board::find($id);
        // $result = $result->update($request->only('b_title','b_content'));
        // return redirect()->route('board.show', $result);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::debug("------- 삭제 처리 시작 -------");
        Board::destroy($id);
        Log::debug("------- 삭제 처리 종료 -------");
        return redirect()->route('board.index');
    }
}
