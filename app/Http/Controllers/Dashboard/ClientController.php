<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use http\Client\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::all()->where('status',1);
        return view('admin.Client.index',compact('clients'));


    }
    public function CustomerService()
    {
        $clients=Client::all()->where('status',2);

        return view('admin.Client.index2',compact('clients'));


    }
    public function safeService()
    {
        $clients=Client::all()->where('status',3);

        return view('admin.Client.index3',compact('clients'));


    }

    public function create()
    {
        return view('admin.Client.create');
    }


    public function store(StoreClientRequest $request)
    {
        Client::create($request->all());
        session()->flash('success','Client Added successful');
        return redirect()->back();
    }

    public function show(Client $client)
    {
        //
    }

    public function edit(Client $client)
    {
        //
    }


    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }


    public function destroy(Client $client)
    {
        //
    }
    public function changeStatusToDelivered($client_id){

        try {
            $client = Client::find($client_id);
            if (!$client) {
                return redirect()->back()->with(['error' => 'هذا المنتج غير موجود']);
            }
            $active = $client->status == 1 ? 2 : 3;
            $client->update([$client->status=$active]);
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $exception) {
            return redirect()->back()->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }
}
