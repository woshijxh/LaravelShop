<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAddressRequest;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    /**
     * 列表页数据展示
     * @param Request $request
     * @return View
     */
    public function index(Request $request)
    {
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }

    /**
     * 新增 and 修改页面
     * @return View
     */
    public function create()
    {
        return view('user_addresses.create_and_edit', ['address' => new UserAddress()]);
    }

    /**
     * 新增收货地址
     * @param UserAddress $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserAddressRequest $request)
    {
        $request->user()->addresses()->create($request->only([
            'province', 'city', 'district', 'address', 'zip', 'contact_name', 'contact_phone'
        ]));
        return redirect()->route('user_addresses.index');
    }
}


