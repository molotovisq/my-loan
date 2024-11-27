<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProviderService;
use App\Http\Requests\User\ShowUserRequest;

class ProviderController extends Controller
{

    protected $providerService;

    public function __construct(ProviderService $providerService)
    {
        $this->providerService = $providerService;
    }

    public function index(Request $request)
    {
        $providers = $this->providerService->getAll();

        return response()->json($providers);
    }

    public function show(ShowUserRequest $request)
    {
        $providers = $this->providerService->findWithRelation($request->id);

        return response()->json($providers);
    }
}
