<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Human;

class HumanController extends Controller
{
    public function getAll() // chiqarish hammasini
    {
        $humans=Human::all();
        return $humans;
    }
    public function add(Request $req) // ma`lumot qo`shish
    {
        $humans=Human::create($req->all());
        return "Success";
    }
    public function get($id) // faqat bittasini ko`rish
    {
        $human=Human::find($id);
        return $human;
    }
    public function delete($id) // faqat bittasini o`chirish
    {
        $human=$this->get($id);
        $human->delete();
        return "Deleted success";
    }
    public function edit($id, Request $req) // faqat bittasini edit qilish
    {
        /* ma`lumotlarni post holatida yuboryotganimiz sababli, api.php dagi edit qismga post qo`yamiz */
        $human=$this->get($id);
        $human->fill($req->all())->save();
        return "Updated success";
    }
}
