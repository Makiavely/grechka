<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function show(Product $product)
    {
        return $product;
    }

    public function index()
    {
      /*  $this->authorize('viewAny', Product::class);*/

/*        return $this->all(Product::class);

        return response(Crud::all()->jsonSerialize(), Response::HTTP_OK);*/

        return Product::all();
    }



    /*    public function index()
        {
            $this->authorize('viewAny', Contact::class);

            return ContactResource::collection(request()->user()->contacts);
        }*/


    /*public function store()
    {
        $this->authorize('create', Contact::class);

        $contact = request()->user()->contacts()->create($this->validateData());

        return (new ContactResource($contact))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Contact $contact)
    {
        $this->authorize('view', $contact);

        return new ContactResource($contact);
    }

    public function update(Contact $contact)
    {
        $this->authorize('update', $contact);

        $contact->update($this->validateData());

        return (new ContactResource($contact))
            ->response()
            ->setStatusCode(Response::HTTP_OK);
    }

    public function destroy(Contact $contact)
    {
        $this->authorize('delete', $contact);

        $contact->delete();

        return response([], Response::HTTP_NO_CONTENT);
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'company' => 'required',
        ]);
    }*/
}
