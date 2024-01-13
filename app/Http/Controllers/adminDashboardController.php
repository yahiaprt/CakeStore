<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\products;

class adminDashboardController extends Controller
{
    public function acceptShip($id)
    {
        $accpt = 'accept';
        $order = Order::find($id);
        $order->status = $accpt;
        $order->save();
        return redirect()->back();

      }
      public function finishShip($id)
      {
          $delevered = 'delevered';
          $order = Order::find($id);
          $order->status = $delevered;
          $order->save();
          return redirect()->back();
        }
    public function refuseShip($id)
    {
        $refuse = 'refuse';
        $order = Order::find($id);
        $order->status = $refuse;
        $order->save();
        return redirect()->back();
      }
    public function livreurProfil()
    {
        $orders = Order::all();
        $products = products::all();
        $seller = Auth()->user();
        return view('vendor.livreurProfil', [
            'orders' => $orders,
            'products' => $products,
            'seller' => $seller,
        ]);
    }
    public function livreur()
    {
        $orders = Order::all();
        $products = products::all();
        $seller = Auth()->user();

        return view('vendor.ordersLivreur', [
            'orders' => $orders,
            'products' => $products,
            'seller' => $seller,
        ]);
            }
    public function adminlivreur()
    {
        $orders = Order::all();
        $products = products::all();
        $seller = Auth()->user();

        return view('layouts.adminLivreur', [
            'orders' => $orders,
            'products' => $products,
            'seller' => $seller,
        ]);
    }
    public function indexadminReal()
    {
        return view('layouts.adminReal');
    }
    public function index()
    {
        return view('layouts.admin');
    }
}
