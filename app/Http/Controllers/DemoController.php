<?php

namespace App\Http\Controllers;

use App\Models\DemoIcon;
use App\Models\DemoOrder;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = DemoOrder::paginate(3);

        return view('static.demo.index')
            ->with('test', 'TESTING')
            ->with('orders', $orders);
    }

    /**
     * Process the demo form submission
     *
     * @return Factory|View
     */
    public function demoForm(Request $request)
    {
        $validated = $request->validate([

            'email' => 'required|email',
        ]);

        $orders = DemoOrder::paginate(3);

        return view('static.demo.index')
            ->with('test', 'TESTING')
            ->with('orders', $orders);
    }

    /**
     * Display a grid of the icons, with search ability.
     */
    public function icons(Request $request)
    {
        $validated = $request->validate([
            'iconSearch' => ['sometimes', 'string', 'max:16', 'alpha'],
            'page' => ['sometimes', 'numeric', 'min:1'],
        ]);

        $searchFor = $validated['iconSearch'] ?? '';
        $icons = DemoIcon::where('name', 'like', '%'.$searchFor.'%')->paginate(30);

        return view('static.demo.icons')
            ->with('icons', $icons)
            ->with('iconSearch', $searchFor)
            ->with('page', $validated['page'] ?? 1);
    }
}
