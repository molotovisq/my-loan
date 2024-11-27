<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ClientService;
use App\Http\Requests\User\ShowUserRequest;

class ClientController extends Controller
{

    protected $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    public function index(Request $request)
    {
        $clients = $this->clientService->getAll();

        return response()->json($clients);
    }

    public function show(ShowUserRequest $request)
    {
        $clients = $this->clientService->findWithUser($request->id);

        return response()->json($clients);
    }
}
