<?php

namespace App\Http\Controllers;

use App\Enum\ShareTypeEnum;
use App\Http\Requests\ShareCreateRequest;
use App\Models\Share;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function index()
    {
        $shares = Share::all();

        return view('shares.shares-list', ['shares' => $shares]);
    }

    public function create()
    {
        $shareTypes = ShareTypeEnum::ru();
        return view('shares.share-create', ['shareTypes' => $shareTypes]);
    }

    public function store(ShareCreateRequest $request)
    {
        Share::create($request->all());

        return redirect()->route('shares.index');
    }
}
