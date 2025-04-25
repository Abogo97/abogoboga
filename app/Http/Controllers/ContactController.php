<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CompanyRepository;
class ContactController extends Controller
{
    public function __construct(protected CompanyRepository $company)
    {}
    public function index()
    {
        $companies = $this->company->pluck();
        $contacts = $this->getContacts();
        return view('contacts.index', compact('contacts', 'companies'));
    }
    //
    public function create()
    {  
        return view('contacts.create');
    }

    public function show($id)
    {
        $contacts = $this->getContacts();
        abort_unless(isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contacts.show')->width('contact', $contact);
    }
    
    protected function getContacts()
    {
        return [
            1 => ['id' => 1, 'Name 1', 'phone' => '123'],
            2 => ['id' => 2, 'Name 2', 'phone' => '456'],
            3 => ['id' => 3, 'Name 3', 'phone' => '789'],
        ];
    }
    
}
