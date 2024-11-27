<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoanService;
use App\Http\Requests\User\ShowUserRequest;

class LoanController extends Controller
{

    protected $loanService;

    public function __construct(LoanService $loanService)
    {
        $this->loanService = $loanService;
    }

    public function index(Request $request)
    {
        $loans = $this->loanService->getAll();

        return response()->json($loans);
    }

    public function show(ShowUserRequest $request)
    {
        $loans = $this->loanService->findWithRelation($request->id);

        return response()->json($loans);
    }
}
